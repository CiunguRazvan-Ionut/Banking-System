<?php

require 'conect.php';
session_start();

$userid=$_SESSION['id'];
$address = $_POST['address'];


$sql = "UPDATE users SET address='$address' WHERE id='$userid'";
$result = mysqli_query($conect,$sql);

header("Location: ../account.php");
