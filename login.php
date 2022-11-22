<?php
session_start();
$id="";
$_SESSION["id"]=$id;        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" type="image/png" href="images (1).png">

</head>
<body>
    <div id="form">
        <img src="images (1).png" alt="">
        <form action="login.php" method="POST"> 
            <h1>UserName</h1>
            <input class="form_input" type="text" name="id"  ><br><br>
            <h1>Password</h1>
            <input  class="form_input" type="password" name="password" ><br><br>
            <input class="form_input" type="submit" name="log" value="LOGIN" ><br><br>
        </form>
    </div>

</body>
</html>