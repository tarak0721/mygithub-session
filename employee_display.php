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
$sql="SELECT employee.id,employee.emp_id,employee.name,employee.email,employee.contact_number,employee.address,employee.gender,department.dept_name  FROM employee INNER JOIN department on employee.dept = department.dept_id";
$result=mysqli_query($conn,$sql);



echo "<table border='1'>

<tr>

 <th>id</th>
 <th>emp_id</th>
 <th>name</th>
 <th>email</th>
 <th>contact_number</th>
 <th>address</th>
 <th>gender</th>
 <th>dept_name</th>


 </tr>";

 

while($row = mysqli_fetch_assoc($result))

  {

  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['emp_id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['contact_number'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['dept_name'] . "</td>";
  echo "<td><a href='employee_delete_code.php?id=$row[id]'>Delete<a/></td>";
  echo "<td><a href='employee_update_form.php?id=$row[id]'>Update<a/></td>";
  


  echo "</tr>";

  }

echo "</table>";