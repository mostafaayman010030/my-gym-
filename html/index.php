<?php
include ('database.php');
if(isset($_POST['search']))
{
 $s=$_POST['name'];
 $rows=$db->getRows("SELECT * FROM user WHERE name LIKE '%$s%'");
}
else

 $rows=$db->getRows("SELECT * FROM user",array());
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title></title>
</head>

<body>

<form action="index.php" method="post">
<input type="text" name="name"><input type="submit" name="search" value="search">
</form>

<a href="add.html">Add New Data</a>
<form>
<table border="1px">
<tr>
<th>Update</th>
<th>Name</th>
<th>Country</th>
<th>Region</th>
<th>Email</th>
</tr>
<?php
foreach($rows as $row)
{
  $id=$row['id'];
  echo "<tr>";
  echo "<td><a href='edit.php?id=$id'>update</a>|<a href='delete.php?id=$id'>delete</a></td>"
       ."<td>".$row['name']."</td>"."<td>".$row['country']."</td>"."<td>".$row['region']."</td>"."<td>".$row['email']."</td>";
  echo "</tr>";
}
?>
</table>
</form>

</body>

</html>
