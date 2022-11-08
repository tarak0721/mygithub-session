
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="employee_insert_code.php" method="POST">
        <label>Emp_id:</label><input type="text" name="emp_id" id="" value=""><br>
        <label>Name:</label><input type="text" name="name" id="" value=""><br>
        <label>Email:</label><input type="email" name="email" value=""><br>
        <label>contact_number:</label><input type="text" name="contact_number" value=""><br>
        <label>Address:</label><input type="text" name="address" id="" value=""><br>
        <label>Gender:</label><input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female<br>
        <label for="dept">Choose your Dept:</label>
        <select name="dept" id="department" value="">
            <?php
            include 'connect_code.php';
            $sql="SELECT * from department ";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){
                echo '<option value="'.$row['dept_id'].'">'.$row['dept_name'].'</option>';
            }
        ?>
        </select>
        <button type="submit" name="submit" value="">Submit</button>
</body>
</html>
