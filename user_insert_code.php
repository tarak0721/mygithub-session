<?php

include 'connect_code.php';
$username=$_POST['username'];
$password=$_POST['password'];
$emp_id=$_POST['emp_id'];
$employee=mysqli_query($conn,"select * from employee where emp_id='$emp_id'");
$check_employee=mysqli_num_rows($employee);
if($check_employee=0){
    echo "employee does not exist";
}else{
$check=mysqli_query($conn,"select * from users where username='$username' or password='$password'" );
$checkrows=mysqli_num_rows($check);

if($checkrows>0){
    echo "record exists";
}else {
$sql="INSERT INTO users(username,password) VALUES('$username','$password')";
$result=mysqli_query($conn,$sql);

if($result){
    header("Location:user_display.php");
}else{
    echo "data not inserted";
}


}


}