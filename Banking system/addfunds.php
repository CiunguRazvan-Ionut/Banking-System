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
                    <li><a href="index.php">Log In</a></li>
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
            <p>Please add funds</p>
            <form method="POST" action="includes/accounteur.inc.php">
                <input type="number" name="eurbalance" placeholder="Add Euro">
                <input type="submit" name="currency" value="Add">
            </form>
            <form method="POST" action="includes/accountusd.inc.php">
                <input type="number" name="usdbalance" placeholder="Add USD">
                <input type="submit" name="currency" value="Add">
            </form>
            <form method="POST" action="includes/accountron.inc.php">
                <input type="number" name="ronbalance" placeholder="Add Ron">
                <input type="submit" name="currency" value="Add">
            </form> 
        </div>
    </div>          
</body>
</html>