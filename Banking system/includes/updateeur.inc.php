<?php

require 'conect.php';
session_start();

$usernameeur=$_SESSION['username'];
$balance = $_POST['balance'];


$sql = "UPDATE accounteur SET balance='$balance' WHERE usernameeur='$usernameeur'";
$result = mysqli_query($conect,$sql);

header("Location: ../account.php");