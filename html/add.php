<?php
include ('database.php');


 $first=$_POST['first'];
 $last=$_POST['last'];
 $password=$_POST['password'];
 $email=$_POST['email'];
$phone = $_POST['phone'];
 $int=$db->insertRow("INSERT INTO user(first,password,phone,last,email) VALUES(?,?,?,?)",array($phone,$last,$first,$password,$email));
 if($int>0)
 {
   header("Location:../home.php");
 }
 else
 {
  echo "Error";
  header("Location:regist.php");
 }
