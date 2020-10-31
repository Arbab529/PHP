
<?php
$username = "root";
$pass = "";
$hostname = "localhost";
$dbname = "mydb";


$conn = mysqli_connect($hostname, $username, $pass, $dbname);

if ($conn) {
    echo "";
} else {
    echo "Connection Issue";
}
?>