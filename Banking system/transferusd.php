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
                    <li><a href="account.php">Back</a></li>
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
            <form action="includes/historyusd.inc.php">
                <input type="submit" name="transactionhystory" value="See transaction hystory"><br>
            </form>
        </div>
    </div>
    <div class="login">
        <div class="container">
            <h1>Transfer USD</h1>
            <form action="includes/transferusd.inc.php" method="POST">
                <input type="text" name="receiverid" placeholder="Reciver's UserName"><br>
                <input type="number" name="amount" placeholder="Amount"><br>
                <input type="submit" name="send" value="Make transfer"><br>
            </form>
            <h1>Make USD payment </h1>
            <form action="includes/paymentusd.inc.php" method="POST">
                <input type="text" name="servicename" placeholder="Service Name"><br>
                <input type="number" name="amount" placeholder="Amount"><br>
                <input type="submit" name="send" value="Make Payment"><br>
            </form>
        </div>
    </div>

</body>
</html>