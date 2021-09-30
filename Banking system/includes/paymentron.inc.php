<?php

require 'conect.php';
session_start();

if(isset($_POST['servicename']) && !empty($_POST ['servicename']) && isset($_POST['amount']) && !empty($_POST ['amount'])){
    $servicename=$_POST['servicename'];
    $amount=$_POST['amount'];
    $usernameron=$_SESSION['username'];


    $sql = "INSERT INTO paymentron (senderusername, service, amount) VALUES ('$usernameron','$servicename','$amount')";
    $result = mysqli_query($conect,$sql);

    $sql1 = "SELECT balance FROM accountron WHERE usernameron='$usernameron'";
    $result1 = mysqli_query($conect,$sql1);
    $row = $result1->fetch_assoc();  
    $actualbalancesender=$row['balance'];
    $dif=$actualbalancesender-$amount;
    //echo $amount;
    echo $dif;
    $sql2= "UPDATE accountron SET balance='$dif' WHERE usernameron='$usernameron'";
    $result2=  mysqli_query($conect,$sql2);
}
    


header("Location: ../transferron.php");