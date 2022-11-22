<?php
if(isset($_POST['post'])){
    echo $_POST['blog'];
}

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
        <form action="post.php" method="POST"> 
            <h3><?php if(isset($err)){echo "INVALID USER ID";}?></h3>
            <h3><?php if(isset($err1)){echo "INCORRECT PASSWORD";}?></h3>
            <h1>Write Your Blog Here</h1>
            <textarea name="blog" columns=5>  </textarea>
            <input class="form_input" type="submit" name="post" value="POST" ><br><br>
        </form>
    </div>

</body>
</html>