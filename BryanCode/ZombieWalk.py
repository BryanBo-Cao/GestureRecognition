import time

class MyClass(GeneratedClass):
    def __init__(self):
        GeneratedClass.__init__(self)
        self.tracker = ALProxy( "ALTracker" )
        self.memory = ALProxy("ALMemory")
        self.targetName = "People"
        self.distanceX = 0.0
        self.distanceY = 0.0
        self.angleWz = 0.0
        self.thresholdX = 0.0
        self.thresholdY = 0.0
        self.thresholdWz = 0.0
        self.effector = "None"
        self.subscribeDone = False
        self.isRunning = False

    def onLoad(self):
        self.BIND_PYTHON(self.getName(), "setParameter")
        self.BIND_PYTHON(self.getName(), "onTargetLost")
        self.BIND_PYTHON(self.getName(), "onTargetReached")
        self.BIND_PYTHON(self.getName(), "onTargetChanged")
        self.memory.subscribeToEvent("ALTracker/ActiveTargetChanged", self.getName(), "onTargetChanged")
        #start-move code
        import threading
        self.motion = ALProxy("ALMotion")
        self.x = 0
        self.y = 0
        self.theta = 0
        self.ptask = qi.PeriodicTask()
        self.lock = threading.RLock()
        #end-move code

    def onUnload(self):
        #start-move code
        with self.lock:
            self.ptask.stop()
            self.x = 0
            self.y = 0
            self.theta = 0
            self.motion.moveToward(0, 0, 0)
            self.motion.waitUntilMoveIsFinished()
        #end-move code
        if self.subscribeDone:
            self.memory.unsubscribeToEvent("ALTracker/TargetLost", self.getName())
            self.memory.unsubscribeToEvent("ALTracker/TargetReached", self.getName())
            self.subscribeDone = False

        if self.isRunning:
            self.tracker.setEffector("None")
            self.tracker.stopTracker()
            self.tracker.unregisterTarget(self.targetName)
            self.isRunning = False

    #start-move code
    def onInput_onStop(self):
        with self.lock:
            self.onUnload()
            self.onStopped()

    def moveFailed(self):
        self.onUnload()
        self.onMoveFailed()

    def updateMovement(self):
        import math
        with self.lock:
            enableArms = self.getParameter("Arms movement enabled")
            self.motion.setMoveArmsEnabled(enableArms, enableArms)
            x = self.getParameter("X")
            y = self.getParameter("Y")
            theta = self.getParameter("Theta")
            period = self.getParameter("Period of direction update (s)")
            epsilon = 0.0001
            dx = math.fabs(x - self.x)
            dy = math.fabs(y - self.y)
            dt = math.fabs(theta - self.theta)

            # Update moveToward parameters
            if(dx > epsilon or dy > epsilon or dt > epsilon):
                self.x=x
                self.y=y
                self.theta=theta
                self.motion.moveToward(self.x, self.y, self.theta)

            # Check if the move has been canceled
            if (not self.motion.moveIsActive()):
                self.moveFailed()

            us_period = int(period*1000000)
            self.ptask.setUsPeriod(us_period)
    #end-move code

    def onInput_onStart(self):
        self.memory.subscribeToEvent("ALTracker/TargetLost", self.getName(), "onTargetLost")
        self.memory.subscribeToEvent("ALTracker/TargetReached", self.getName(), "onTargetReached")
        self.subscribeDone = True

        mode = self.getParameter("Mode")
        self.distanceX = self.getParameter("Distance X (m)")
        self.thresholdX = self.getParameter("Threshold X (m)")
        self.distanceY = self.getParameter("Distance Y (m)")
        self.thresholdY = self.getParameter("Threshold Y (m)")
        self.angleWz = self.getParameter("Theta (rad)")
        self.thresholdWz = self.getParameter("Threshold Theta (rad)")
        self.effector = self.getParameter("Effector")

        self.tracker.setEffector(self.effector)

        peopleIds = []

        self.tracker.registerTarget(self.targetName, peopleIds)
        self.tracker.setRelativePosition([-self.distanceX, self.distanceY, self.angleWz,
                                           self.thresholdX, self.thresholdY, self.thresholdWz])
        self.tracker.setMode(mode)

        self.tracker.track(self.targetName) #Start tracker
        self.isRunning = True

    def onInput_onStop(self):
        self.onStopped()
        self.onUnload()

    def onInput_peopleId(self, p):
        if(p is None):
            return

        self.tracker.registerTarget(self.targetName, p)

    def setParameter(self, parameterName, newValue):
        GeneratedClass.setParameter(self, parameterName, newValue)
        if (parameterName == 'Mode'):
            self.tracker.setMode(newValue)
            return

        if (parameterName == "Distance X (m)"):
            self.distanceX = newValue
            self.tracker.setRelativePosition([-self.distanceX, self.distanceY, self.angleWz,
                                               self.thresholdX, self.thresholdY, self.thresholdWz])
            return

        if (parameterName == "Distance Y (m)"):
            self.distanceY = newValue
            self.tracker.setRelativePosition([-self.distanceX, self.distanceY, self.angleWz,
                                               self.thresholdX, self.thresholdY, self.thresholdWz])
            return

        if (parameterName == "Theta (rad)"):
            self.angleWz = newValue
            self.tracker.setRelativePosition([-self.distanceX, self.distanceY, self.angleWz,
                                               self.thresholdX, self.thresholdY, self.thresholdWz])
            return

        if (parameterName == "Threshold X (m)"):
            self.thresholdX = newValue
            self.tracker.setRelativePosition([-self.distanceX, self.distanceY, self.angleWz,
                                               self.thresholdX, self.thresholdY, self.thresholdWz])
            return

        if (parameterName == "Threshold Y (m)"):
            self.thresholdY = newValue
            self.tracker.setRelativePosition([-self.distanceX, self.distanceY, self.angleWz,
                                               self.thresholdX, self.thresholdY, self.thresholdWz])
            return

        if (parameterName == "Threshold Theta (rad)"):
            self.thresholdWz = newValue
            self.tracker.setRelativePosition([-self.distanceX, self.distanceY, self.angleWz,
                                               self.thresholdX, self.thresholdY, self.thresholdWz])
            return

        if(parameterName == "Effector"):
            self.tracker.setEffector(newValue)
            self.effector = newValue
            return

    def onTargetLost(self, key, value, message):
        self.targetLost()

    def onTargetReached(self, key, value, message):
        self.targetReached()

    def onTargetChanged(self, key, value, message):
        if value == self.targetName and not self.subscribeDone:
            self.memory.subscribeToEvent("ALTracker/TargetLost", self.getName(), "onTargetLost")
            self.memory.subscribeToEvent("ALTracker/TargetReached", self.getName(), "onTargetReached")
            self.subscribeDone = True
        elif value != self.targetName and self.subscribeDone:
            self.memory.unsubscribeToEvent("ALTracker/TargetLost", self.getName())
            self.memory.unsubscribeToEvent("ALTracker/TargetReached", self.getName())
            self.subscribeDone = False
