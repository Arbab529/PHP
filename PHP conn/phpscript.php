<?php
include 'DbConnect.php';


if (isset($_POST['submitbtn'])) {
    $firstname = $_POST['firsttxt'];
    $lastname = $_POST['lasttxt'];

    echo $firstname . $lastname;
    $query = "insert into information values('$firstname','$lastname')";
    if ($conn->query($query)) {
        echo "Successfull";
        header('Location: display.php');
    } else {
        echo "Not Successfull";
    }
}
