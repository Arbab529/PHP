<?php

$username="root";
$pass="";
$hostname="localhost";
$dbname="phpclass1";


$conn=mysqli_connect($hostname,$username,$pass,$dbname);
if($conn)
{
    echo "DB connected";
    echo "<br>";
}
else{
    echo "Error";
}
?>