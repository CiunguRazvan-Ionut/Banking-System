<?php

require 'conect.php';
session_start();
$userid=$_SESSION['id'];
echo $_SESSION['username'];
$ronbalance=$_POST['ronbalance'];
$userr=$_SESSION['username'];

$sql = "INSERT INTO accountron (balance, usernameron) VALUES ('$ronbalance','$userr')";
$result = mysqli_query($conect,$sql);


header("Location: ../addfunds.php");