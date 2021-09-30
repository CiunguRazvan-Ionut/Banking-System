<?php

require 'conect.php';
session_start();

if(!empty($_POST['email']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['password'] && !empty($_POST['address']))
    && isset($_POST['email']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password']))
{

    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT username FROM users WHERE username ='$username'";
    $result = mysqli_query($conect,$sql);
    $check = mysqli_num_rows($result);

    if($check > 0)
    {
        header("Location: ../register.php?info=exists");
        die();
    }else{
        $sql = "INSERT INTO users (email, firstname, lastname, address, username, password) VALUES ('$email', '$firstname', '$lastname', '$address', '$username', '$password_hashed')";
        $result = mysqli_query ($conect, $sql);

        $_SESSION['username'] = $username;
        header ("Location: ../addfunds.php");
    }

} else {
    header ("Location: ../register.php?info=error");
}