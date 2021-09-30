<?php

require 'conect.php';
session_start();

$usernameron=$_SESSION['username'];
$balance = $_POST['balance'];


$sql = "UPDATE accountron SET balance='$balance' WHERE usernameron='$usernameron'";
$result = mysqli_query($conect,$sql);

header("Location: ../account.php");