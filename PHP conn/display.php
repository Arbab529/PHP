<?php
include 'DbConnect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        li {
            display: inline;
            border: 2px solid black
        }
    </style>
</head>

<body>

    <ul>
        <li>First name</li>
        <li>Last Name</li>
        <li>Edit</li>
        <li>Delete</li>

    </ul>
    <ul>
        <?php

        $query = "select * from information";
        $result = $conn->query($query);
        while ($row = mysqli_fetch_array($result)) {
            $firstname = $row['first_name'];
            $lastname = $row['second_name'];


        ?>
            <li><?php echo $firstname ?></li>
            <li><?php echo $lastname ?></li><br>
            <li><?php ?></li><br>
            <li><?php echo $lastname ?></li><br>


        <?php
        }

        ?>
    </ul>





</body>

</html>
<?php








?>