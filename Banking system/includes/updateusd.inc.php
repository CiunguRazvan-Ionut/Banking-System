<?php

require 'conect.php';
session_start();

$usernameusd=$_SESSION['username'];
$balance = $_POST['balance'];


$sql = "UPDATE accountusd SET balance='$balance' WHERE usernameusd='$usernameusd'";
$result = mysqli_query($conect,$sql);

header("Location: ../account.php");