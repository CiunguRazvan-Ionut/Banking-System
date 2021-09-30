<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <div class ="container">
            <div class = "logo">
                <img src="img/logo.png">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login">
        <div class="container">
            <h1> Register here: </h1>
            <form method="POST" action="includes/register.inc.php">
                <input type="text"  name="email" placeholder="Email"><br>
                <input type="text"  name="firstname" placeholder="First Name"><br>
                <input type="text"  name="lastname" placeholder="Last Name"><br>
                <input type="text"  name="address" placeholder="Address"><br>
                <input type="text"  name="username" placeholder="Username"><br>
                <input type="password"  name="password" placeholder="Password"><br>
                <input type="submit" name="register" value="Register">
            </form>
            <?php
                if(isset($_GET['info']) && $_GET['info']=='ok'){
                    echo '<p style="text-align: center; color: green;"> The account has been created</p>';
                } else if (isset($_GET['info']) && $_GET['info']=='error'){
                    echo '<p style="text-align: center; color: red;"> There was an error creating the account</p>';
                } else if (isset($_GET['info']) && $_GET['info']=='exists'){ 
                    echo '<p style="text-align: center; color: red;"> This username already exists, please chose other username</p>';
                }
            ?>
        </div>
    </div>
</body>
</html>