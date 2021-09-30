<?php

session_start();
require 'conect.php';

$user=$_SESSION['username'];

 $sql= "SELECT * FROM transferron WHERE senderusername='$user'";
 $result = mysqli_query($conect, $sql);
 $row = $result->fetch_assoc(); 

 $_SESSION['historyronid']=$row['id'];
 $_SESSION['senderron']=$row['senderusername'];
 $_SESSION['receiverron']=$row['receiverusername'];
 $_SESSION['amountron']=$row['amount'];




header("Location: ../transactionhistoryron.php");