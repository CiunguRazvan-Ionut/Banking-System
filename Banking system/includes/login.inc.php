<?php

session_start();
require 'conect.php';
if(isset($_POST['username']) && !empty($_POST ['username']) && isset($_POST['password']) && !empty($_POST['password'])){
    $username = strtolower ($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conect, $sql);
    $row = $result->fetch_assoc();
    $hash = $row['password'];

    $check = password_verify($password, $hash);

    if($check == 0){
        header("Location: ../index.php?info=wrong");
        die();
    } else{
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$hash'";
        $result = mysqli_query($conect, $sql);

        if (!$row = $result->fetch_assoc()) {
            echo ' The password or the username are wrong.';
        } else {
            $_SESSION['id'] = $row['id'];
            $_SESSION['email']= $row['email'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['username'] = $row['username'];
        }
        header("Location: ../account.php");
    }

}