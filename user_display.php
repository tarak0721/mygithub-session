<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'connect_code.php';
$sql="SELECT * from users";
$result=mysqli_query($conn,$sql);



echo "<table border='1'>

<tr>

 <th>id</th>
 <th>employee_id</th>
 <th>type</th>
 <th>username</th>
 <th>password</th>


 </tr>";

 

while($row = mysqli_fetch_assoc($result))

  {

  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['employee_id'] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
//   echo "<td><a href='employee_delete_code.php?id=$row[id]'>Delete<a/></td>";
//   echo "<td><a href='employee_update_form.php?id=$row[id]'>Update<a/></td>";
  


  echo "</tr>";

  }

echo "</table>";
