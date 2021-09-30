<?php

require 'conect.php';
session_start();

if(isset($_POST['servicename']) && !empty($_POST ['servicename']) && isset($_POST['amount']) && !empty($_POST ['amount'])){
    $servicename=$_POST['servicename'];
    $amount=$_POST['amount'];
    $usernameusd=$_SESSION['username'];


    $sql = "INSERT INTO paymentusd (senderusername, service, amount) VALUES ('$usernameusd','$servicename','$amount')";
    $result = mysqli_query($conect,$sql);

    $sql1 = "SELECT balance FROM accountusd WHERE usernameusd='$usernameusd'";
    $result1 = mysqli_query($conect,$sql1);
    $row = $result1->fetch_assoc();  
    $actualbalancesender=$row['balance'];
    $dif=$actualbalancesender-$amount;
    //echo $amount;
    echo $dif;
    $sql2= "UPDATE accountusdr SET balance='$dif' WHERE usernameusd='$usernameusd'";
    $result2=  mysqli_query($conect,$sql2);
    
}


header("Location: ../transferusd.php");