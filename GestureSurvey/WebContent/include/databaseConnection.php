<?php

    function acquireConnection() {
        $connection = mysql_connect("localhost", "root","root");
        $db = "gesture_survey";
        //echo $db;
        mysql_select_db($db, $connection) or die("fail");
        return $connection;
    }

?>
