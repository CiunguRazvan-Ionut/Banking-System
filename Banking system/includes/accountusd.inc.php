<?php

require 'conect.php';
session_start();
$userid=$_SESSION['id'];
echo $_SESSION['username'];
$usdbalance=$_POST['usdbalance'];
$userr=$_SESSION['username'];

$sql = "INSERT INTO accountusd (balance, usernameusd) VALUES ('$usdbalance','$userr')";
$result = mysqli_query($conect,$sql);


header("Location: ../addfunds.php");