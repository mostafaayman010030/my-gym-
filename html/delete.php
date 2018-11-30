<?php
include ('database.php');

if(isset($_GET['id']))
{
 $id=$_GET['id'];

 $db->deleteRow("DELETE FROM user WHERE id=$id",array());
 header("Location:index.php");
}
