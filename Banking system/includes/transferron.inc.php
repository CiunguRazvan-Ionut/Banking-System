<?php

require 'conect.php';
session_start();

if(isset($_POST['receiverid']) && !empty($_POST ['receiverid']) && isset($_POST['amount']) && !empty($_POST ['amount'])){
    $receiverid=$_POST['receiverid'];
    $amount=$_POST['amount'];
    $usernameron=$_SESSION['username'];


    $sql = "INSERT INTO transferron (senderusername, receiverusername, amount) VALUES ('$usernameron','$receiverid','$amount')";
    $result = mysqli_query($conect,$sql);

    $sql1 = "SELECT balance FROM accountron WHERE usernameron='$usernameron'";
    $result1 = mysqli_query($conect,$sql1);
    $row = $result1->fetch_assoc();  
    $sql4 = "SELECT balance FROM accountron WHERE usernameron='$receiverid'";
    $result4=  mysqli_query($conect,$sql4);
    $row2 = $result4->fetch_assoc();
    $actualbalancesender=$row['balance'];
    $actualbalancereceiver=$row2['balance'];
    $dif=$actualbalancesender-$amount;
    $sum=$actualbalancereceiver+$amount;
    //echo $amount;
    echo $dif;
    $sql2= "UPDATE accountron SET balance='$dif' WHERE usernameron='$usernameron'";
    $result2=  mysqli_query($conect,$sql2);
    $sql3= "UPDATE accountron SET balance='$sum' WHERE usernameron='$receiverid'";
    $result3=  mysqli_query($conect,$sql3);
    
}




header("Location: ../transferron.php");