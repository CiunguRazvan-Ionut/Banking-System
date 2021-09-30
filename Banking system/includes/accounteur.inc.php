<?php

require 'conect.php';
session_start();
$userid=$_SESSION['id'];
echo $_SESSION['username'];
$eurbalance=$_POST['eurbalance'];
$userr=$_SESSION['username'];

$sql = "INSERT INTO accounteur (balance, usernameeur) VALUES ('$eurbalance','$userr')";
$result = mysqli_query($conect,$sql);


header("Location: ../addfunds.php");