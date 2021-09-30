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
        </div>
    </div>
    <div class="login">
        <div class="container">
        <?php
                    echo 'The sender : '.$_SESSION['sendereur'];
                    echo '<pre>';
                    echo 'The receiver : '.$_SESSION['receivereur'];
                    echo '<pre>';
                    echo 'The amount sent : '.$_SESSION['amounteur'];
                    echo '<pre>';
                    echo 'Transaction number:  : '.$_SESSION['historyeurid'];
            ?>;
        </div>
    </div>

</body>
</html>