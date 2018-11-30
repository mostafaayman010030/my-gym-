<?php
include ('database.php');

if(isset($_POST['update']))
{
 $id=$_POST['id'];
 $name=$_POST['name'];
 $count=$_POST['country'];
 $reg=$_POST['reg'];
 $email=$_POST['email'];

 $int=$db->updateRow("UPDATE user SET name=?,country=?,region=?,email=? WHERE id=?",array($name,$count,$reg,$email,$id));
 header("Location:index.php");

}
?>
<?php
if(isset($_GET['id']))
{
   $id=$_GET['id'];
   $row=$db->getRow("SELECT * FROM user WHERE id=$id",array());
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title></title>
</head>

<body>

<form action="edit.php" method="post">
Name:<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
Country:<input type="text" name="country" value="<?php echo $row['country']; ?>" ><br><br>
region:<input type="text" name="reg" value="<?php echo $row['region']; ?>"><br><br>
email:<input type="text" name="email" value="<?php echo $row['email']; ?>" ><br><br>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<input type="submit" name="update" value="add" ><br><br>
</form>

</body>

</html>
