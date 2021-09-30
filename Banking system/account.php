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
                    <li><a href="transfereur.php">EUR transfer</a></li>
                    <li><a href="transferusd.php">USD transfer</a></li>
                    <li><a href="transferron.php">RON transfer</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </div>
            <?php
                if (isset($_SESSION['username'])){
                        echo 'Hello '.$_SESSION['username'];
                    }
            ?>
        </div>
    </div>
    <div class="login">
        <div class="container">
            <h1> Account details:</h1>
            <?php
                if (isset($_SESSION['username'])){
                    echo 'Your name : '.$_SESSION['firstname'];
                    echo ' '.$_SESSION['lastname'];
                    echo '<pre>';
                    echo 'Your actual address : '.$_SESSION['address'];
                    echo '<pre>';
                    echo 'Your user ID is : '.$_SESSION['id'];
                    echo '<pre>';
                }
            ?>
        </div>
    </div>
    <h1>Update balance</h1>
            <form action="includes/updateeur.inc.php" method="POST">
                <input type="number" name="balance" placeholder="EUR">
                <input type="submit" name="send" value="Add balance"><br>
            </form>
            <form action="includes/updateusd.inc.php" method="POST">
                <input type="number" name="balance" placeholder="USD">
                <input type="submit" name="send" value="Add balance"><br>
            </form>
            <form action="includes/updateron.inc.php" method="POST">
                <input type="number" name="balance" placeholder="RON">
                <input type="submit" name="send" value="Add balance"><br>
            </form>    
    <div class="login">
        <div class="container">
            <h1>Change addres</h1>
            <form action="includes/updateaddress.php" method="POST">
                <input type="text" name="address" placeholder="New addres"><br>
                <input type="submit" name="send" value="Change address"><br>
            </form>
            <h1>Change password</h1>
            <form action="includes/updatepass.php" method="POST">
                <input type="password" name="password" placeholder="New password"><br>
                <input type="submit" name="send" value="Change password"><br>
            </form>
        </div>
    </div>          
</body>
</html>