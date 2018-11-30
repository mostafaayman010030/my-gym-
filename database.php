<?php
include ('constants.php');

class database
{
 private $Host=host;
 private $User=user;
 private $Pass=password;
 private $database=dbname;

 function __construct()
 {
  $this->pdo=new PDO("mysql:host=".$this->Host.";dbname=".$this->database,$this->User,$this->Pass);
 }

 function getRow($query,$params=array())
 {
  $stmt=$this->pdo->prepare($query);
  $stmt->execute($params);
  return $stmt->fetch();
 }

 function getRows($query,$params=array())
 {
  $stmt=$this->pdo->prepare($query);
  $stmt->execute($params);
  return $stmt->fetchAll();
 }

 function insertRow($query,$params)
 {
  $stmt=$this->pdo->prepare($query);
  $stmt->execute($params);
  return $stmt->rowCount();
 }

 function updateRow($query,$params)
 {
  return $this->insertRow($query,$params);
 }

 function deleteRow($query,$params)
 {
  return $this->insertRow($query,$params);
 }

 function myExec($query)
 {
  return $this->pdo->exec($query);
 }
}

$db=new database;
?>
