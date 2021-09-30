<?php

session_start();
require 'conect.php';

$user=$_SESSION['username'];

 $sql= "SELECT * FROM transfereur WHERE senderusername='$user'";
 $result = mysqli_query($conect, $sql);
 $row = $result->fetch_assoc(); 

 $_SESSION['historyeurid']=$row['id'];
 $_SESSION['sendereur']=$row['senderusername'];
 $_SESSION['receiverueur']=$row['receiverusername'];
 $_SESSION['amounteur']=$row['amount'];




header("Location: ../transactionhistoryeur.php");