<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        form{
            width:200px;
            height:auto;
            background-color:orange; 
            padding:30px;   
            text-align:center;  
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);  
            font-size:20px; 
            }
            form:hover{
           box-shadow:5px 5px 10px rgba(0,0,0,0.3);
            }
            input{
                margin:10px 0;
                width:100%;
                border:none;
                padding:10px 5px;
                outline:none;
            } 
            input[type="submit"], input[type="reset"]{
                width:100%;
                padding:10px 20px;
                font-size:20px;
                background-color:black;
                color:white;
                cursor:pointer;
                opacity:0.8;
            }
            input[type="submit"]:hover,input[type="reset"]:hover{
               
                opacity:1;
            }
        
    </style>
</head>

<body>
    <form action="info.php" method="post">
        <label>Name: </label> <br><input type="text" name="username"><br>
        <label>Email: </label><br><input type="email" name="useremail"><br>
        <label>Address: </label><br><input type="text" name="txtarea"></input><br>
        <input type="submit" value="Submit" name="sbmt">
        <input type="reset" value="Reset" name="rst">

    </form>
</body>

</html>