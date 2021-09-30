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
                    <li><a href="register.php">Register</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="login">
        <div class="container">
            <h1> Welcome! </h1>
            <form method="POST" action="includes/login.inc.php">
                <input type="text"  name="username" placeholder="Username"><br>
                <input type="password"  name="password" placeholder="Password"><br>
                <input type="submit" name="Log In" value="Log In">
            </form>
            <?php
                if (isset($_GET['info']) && $_GET['info']=='wrong'){
                    echo '<p style="text-align: center; color: red;"> The user or password are wrong</p>';
                }
            ?>
        </div>
    </div>
</body>
</html>