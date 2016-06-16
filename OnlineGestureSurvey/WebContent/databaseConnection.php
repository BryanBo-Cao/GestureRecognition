<?php

    function acquireConnection() {
        $connection = mysql_connect("localhost", "root","root");
        $db = "online_gesture_survey";
        //echo $db;
        mysql_select_db($db, $connection) or die("Connection failed!");
        return $connection;
    }

?>
