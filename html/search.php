<?php
include ('database.php');
if(isset($_POST['submit']))
{
 $s=$_POST['search'];
$rows=$db->getRows("SELECT * FROM user WHERE name LIKE '%$s%'",array());
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title></title>
</head>

<body>

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
<a href="index.php">go to home</a>

</body>

</html>
