<?php

    session_start();
    $registration_no = $_SESSION['registration_no'];
    $startDate = $_POST['startDate'];
    $returnDate = $_POST['returnDate'];
    $numberOfDaysEntitled = $_POST['no_days_entitled'];
    $numberOfDaysTaken = $_POST['no_days_taken'];
    $numberOfDaysRemaining = $_POST['no_days_remaining'];
    $diffDays = round((strtotime($returnDate) - strtotime($startDate))/86400)+1;
    
    if($startDate === null || $startDate === ""||
            $returnDate === null || $returnDate === ""){// both dates must be selected
        echo "<script>window.location = 'studentApplyEmptyError.php'</script>";
    }else if($diffDays<=0){// returnDate must be later than startDate
        echo "<script>window.location = 'studentApplyStartReturnDateError.php'</script>";
    }else if($diffDays>$numberOfDaysRemaining){// not enough holidays remaining
        echo "<script>window.location = 'studentApplyNotEnoughDatesError.php'</script>";
    }else{// submit application successfully
        
        $submissionDate = date("y-m-j H:m:s");
        $connection = mysql_connect("localhost", "bryan55","bryan55201402171747");
        $db = "bryan55";
        mysql_select_db($db, $connection) or die("fail");//'fail' means cannot connect the database

        $sqlInsert = "INSERT INTO application (registration_no,start_date,return_date,submission_date,
                    decision,acceptance,apply_reason,reject_reason,no_days_requested)
                    VALUES ('{$registration_no}','{$startDate}',
                    '{$returnDate}','{$submissionDate}','0','0',
                      'null','null','{$diffDays}')";
        $result = mysql_query($sqlInsert,$connection);

        if ($result) {
            // Success!
            echo $startDate;
    echo $returnDate;
            header ("location: studentApplySubmit.php");
        } else {
            // Display error message.
            echo "<p>Subject creation failed.</p>";
            echo "<p>" . mysql_error() . "</p>";
        }
        echo "<script>window.location = 'studentApplySubmit.php'</script>";
    }

?>