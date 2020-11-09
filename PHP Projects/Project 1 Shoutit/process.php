<?php
include 'database.php';
if(isset($_POST['sbmt'])){
    $name=$_POST['name'];
    $message=$_POST['message'];
    date_default_timezone_set("Asia/Karachi");
    $time=date('h:i:sa',time()); 
    if($name=='' || !isset($name) || $message=='' || !isset($message)){
        $error = "Please fill in your name and message";
        header("Location: index.php?error=".urlencode($error));
        exit();
    }
    else{
        $query = "insert into shouts(`name`, `message`, `time`) values('$name','$message','$time')";
        if($con->query($query)){
            header("Location: index.php");
        }
        else{
            echo "Failed to insert";
            exit();
        }
    }
}


?>