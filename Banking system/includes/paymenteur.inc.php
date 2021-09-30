<?php

require 'conect.php';
session_start();

if(isset($_POST['servicename']) && !empty($_POST ['servicename']) && isset($_POST['amount']) && !empty($_POST ['amount'])){
    $servicename=$_POST['servicename'];
    $amount=$_POST['amount'];
    $usernameeur=$_SESSION['username'];


    $sql = "INSERT INTO paymenteur (senderusername, service, amount) VALUES ('$usernameeur','$servicename','$amount')";
    $result = mysqli_query($conect,$sql);

    $sql1 = "SELECT balance FROM accounteur WHERE usernameeur='$usernameeur'";
    $result1 = mysqli_query($conect,$sql1);
    $row = $result1->fetch_assoc();  
    $actualbalancesender=$row['balance'];
    $dif=$actualbalancesender-$amount;
    //echo $amount;
    echo $dif;
    $sql2= "UPDATE accounteur SET balance='$dif' WHERE usernameeur='$usernameeur'";
    $result2=  mysqli_query($conect,$sql2);
}


header("Location: ../transfereur.php");