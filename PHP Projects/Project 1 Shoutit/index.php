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
            <h1>SHOUT IT! Shout Box</h1>
        </header>

        <div id="shouts">
            <ul>
                <li class="shout"><span>10:00 PM - </span>Arbab: Hello How Are You?</li>
                <li class="shout"><span>10:00 PM - </span>Arbab: Hello How Are You?</li>
                <li class="shout"><span>10:00 PM - </span>Arbab: Hello How Are You?</li>
                <li class="shout"><span>10:00 PM - </span>Arbab: Hello How Are You?</li>
                <li class="shout"><span>10:00 PM - </span>Arbab: Hello How Are You?</li>
                <li class="shout"><span>10:00 PM - </span>Arbab: Hello How Are You?</li>
                <li class="shout"><span>10:00 PM - </span>Arbab: Hello How Are You?</li>
                <li class="shout"><span>10:00 PM - </span>Arbab: Hello How Are You?</li>
                <li class="shout"><span>10:00 PM - </span>Arbab: Hello How Are You?</li>
            </ul>        
        </div>

        <div id="input">
            <form action="process.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter Your Name">
                <input type="text" name="name" id="msg" placeholder="Enter Your Message">
                <br>
                <input type="submit" value="Send" name="submit" class="sbmt-btn">
            </form>
        </div>

    </div>
</body>
</html>