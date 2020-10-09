<?php
include 'DbConnect.php';
if(isset($_POST['submitbtn']))
{
    $name=$_POST['username'];
    $pswd=$_POST['userpassword'];
    
}
echo "Username : ".$name ."<br>"."Password : ".$pswd;

?>