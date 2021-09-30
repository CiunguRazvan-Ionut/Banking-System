<?php

session_start();
require 'conect.php';

$user=$_SESSION['username'];

 $sql= "SELECT * FROM transferusd WHERE senderusername='$user'";
 $result = mysqli_query($conect, $sql);
 $row = $result->fetch_assoc(); 

 $_SESSION['historyusdid']=$row['id'];
 $_SESSION['senderusd']=$row['senderusername'];
 $_SESSION['receiverusd']=$row['receiverusername'];
 $_SESSION['amountusd']=$row['amount'];




header("Location: ../transactionhistoryusd.php");