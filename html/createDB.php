<?php
include ('constants.php');

function createdb($name)
{
 try
 {
  $db=new PDO("mysql:host=".host,user,password);
  $db->exec("CREATE DATABASE IF NOT EXISTS $name");
 }
 catch(PDOException $e)
 {
  die("ERROR:".$e->getMessage());
 }

}
createdb(dbname);
