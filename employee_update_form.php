<?php
include 'connect_code.php';
$id=$_GET['id'];
$sql="Select * from employee where id=$id";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="employee_update_code.php" method="get">
            <input type="hidden" name="id" value="<?php echo $row['id'];  ?>">
        <label>Emp_id:</label><input type="text" name="emp_id" id="" value="<?php echo $row['emp_id'];  ?>"><br>
        <label>Name:</label><input type="text" name="name" id="" value="<?php echo $row['name'];  ?>"><br>
        <label>Email:</label><input type="email" name="email" value="<?php echo $row['email'];  ?>"><br>
        <label>contact_number:</label><input type="text" name="contact_number" value="<?php echo $row['contact_number'];  ?>"><br>
        <label>Address:</label><input type="text" name="address" id="" value="<?php echo $row['address'];  ?>"><br>
        <label>Gender:</label>
        <input type="text" value="<?php echo $row['gender'];  ?>" name="gender">
        <br>

        <label for="dept">Choose your Dept:</label>
        <select name="dept" id="department" value="<?php echo $row['dept'];  ?>">
            <option value="IT">IT</option>
            <option value="IT admin">IT admin</option>
            <option value="CSR">CSR</option>
            <option value="HR">HR</option>
            <option value="Management">Management</option>
        </select><br>
        <button type="submit" name="submit" value="">Submit</button>
</body>
</html>