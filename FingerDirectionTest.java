// open terminal and execute this command to connect leapmotion
// command: "LeapControlPanel"
package com;
import java.io.IOException;
import java.lang.Math;
import com.leapmotion.leap.*;
import com.leapmotion.leap.Gesture.State;

class FingerDirectionTestListener extends Listener {
    public void onInit(Controller controller) {
        System.out.println("Initialized");
    }

    public void onConnect(Controller controller) {
        System.out.println("Connected");
        controller.enableGesture(Gesture.Type.TYPE_SWIPE);
        controller.enableGesture(Gesture.Type.TYPE_CIRCLE);
        controller.enableGesture(Gesture.Type.TYPE_SCREEN_TAP);
        controller.enableGesture(Gesture.Type.TYPE_KEY_TAP);
    }

    public void onDisconnect(Controller controller) {
        //Note: not dispatched when running in a debugger.
        System.out.println("Disconnected");
    }

    public void onExit(Controller controller) {
        System.out.println("Exited");
    }

    public void onFrame(Controller controller) {
        // Get the most recent frame and report some basic information
        Frame frame = controller.frame();

        //Get hands
        for(Hand hand : frame.hands()) {
            // Get fingers
            for (Finger finger : hand.fingers()) {
            	if (finger.type().toString().equals("TYPE_INDEX")) {
            		System.out.println("    " + finger.type() + ", direction: " + finger.direction());
            	}
            }
        }

    }
}

public class FingerDirectionTest {
    public static void main(String[] args) {
        // Create a listener and controller
    	FingerDirectionTestListener ftListener = new FingerDirectionTestListener();
        Controller controller = new Controller();

        // Have the listener receive events from the controller
        controller.addListener(ftListener);

        // Keep this process running until Enter is pressed
        System.out.println("Press Enter to quit...");
        try {
            System.in.read();
        } catch (IOException e) {
            e.printStackTrace();
        }

        // Remove the listener when done
        controller.removeListener(ftListener);
    }
}
