<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" type="image/png" href="images (1).png">
</head>
<body>
    <?php
    if(isset($_SESSION['id'])){
        $user=$_SESSION['id'];
    }else{
        $user="";
    }
    ?>
    <div id="header">
    <a href="post.php"><?php if ($user!=""){echo 'POST';}?></a>
    <a href="login.php"><?php if ($user==""){echo 'LOGIN';}?></a>
    <a href="logout.php"><?php if ($user!=""){echo 'LOGOUT';}?></a>
    <h1><?php echo $user?></h1>
    </div>

    <div id="land_page">
        <div id="blog">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, inventore!</h1>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, inventore!</h2>
            <div id="bottom">
                <form action="like.php" method="POST">
                <button name="like">LIKE</button>
                </form>
                <h3>20 likes</h3>
            </div>

        </div>
        

    </div>
    
</body>
</html>