<?php
$user="root";
$password="";
$host="localhost";
$dbname="c8db";
$conn = mysqli_connect($host,$user,$password,$dbname);

if($conn)
{
    echo " ";
    
}else{
    echo "Connection failed". mysqli_connect_error();
    exit;
}



?>