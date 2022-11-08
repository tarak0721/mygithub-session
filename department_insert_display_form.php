<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="department_insert_code.php" method="POST">
        <label for="dept_id">Dept_id</label>
        <input type="text" name="dept_id" id=""><br>
        <label for="dept_name">Department</label>
        <input type="depatment" name="dept_name"><br>
        <input type="submit" name="departmentNameSubmit">
    </form>
</body>
</html>


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
 
$sql='Select * from department';
$result = mysqli_query($conn,$sql);

echo "<table border='1'>

<tr>
 <th>dept_name</th>
 <th>dept_id</th>

 </tr>";

 

while($row = mysqli_fetch_assoc($result))

  {
  echo "<td>" . $row['dept_name'] . "</td>";
  echo "<td>" . $row['dept_id'] . "</td>";
  echo "<td><a href='department_delete_code.php?id=$row[id]'>Delete<a/></td>";
//   echo "<td><a href='update_form.php?id=$row[id]'>Update<a/></td>";
  


  echo "</tr>";

  }
