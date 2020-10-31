<?php
include 'DbConnect.php';
if(isset($_POST['submitbtn']))
{
    $name=$_POST['username'];
    $pswd=$_POST['userpassword'];
    $query = "insert into information values('$name','$pswd')";
    $conn->query($query); 
    // Execute query
    echo "Submitted Successfully";
    
}
echo "Username : ".$name ."<br>"."Password : ".$pswd;

?>