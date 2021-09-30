<?php

require 'conect.php';
session_start();
$userid=$_SESSION['id'];
$password = $_POST['password'];

$password_hashed=password_hash($password, PASSWORD_DEFAULT);


$sql = "UPDATE users SET password='$password_hashed' WHERE id='$userid'";
$result = mysqli_query($conect,$sql);

header("Location: ../account.php");
