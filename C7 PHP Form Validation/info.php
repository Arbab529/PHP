<?php
include 'dbconnect.php';
if(isset($_POST['sbmt']))
{
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $address = $_POST['txtarea'];
$query = "insert into profile_info(`name`, `email`, `address`) values('$name','$email','$address')";
    if($conn->query($query))
    {
        echo "Record Inserted Successfully";
    }
    else{
        echo "Failed to insert";
    }
}
?>