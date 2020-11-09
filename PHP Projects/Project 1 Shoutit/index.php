<?php include 'database.php';?>
<?php
$query = "select * from shouts";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shouit App</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">

        <header>
            <h1>Arbab Arain! Shout Box</h1>
        </header>

        <div id="shouts">
            <ul>

            <?php while( $row = mysqli_fetch_assoc($result)) : ?>
                <li class="shout"><span><?php echo $row['time']?> - </span><strong><?php echo $row['name']?></strong>: <?php echo $row['message']?></li>
            <?php endwhile;?>
            </ul>        
        </div>

        <div id="input">
        <?php if(isset($_GET['error'])) : ?>

            <div class="error"> <?php echo $_GET['error'];?></div>

        <?php endif;?>
            <form action="process.php" method="POST">
                <input type="text" name="name" id="name" placeholder="Enter Your Name">
                <input type="text" name="message" id="msg" placeholder="Enter Your Message">
                <br>
                <input type="submit" value="Send" name="sbmt" class="sbmt-btn">
            </form>
        </div>

    </div>
</body>
</html>