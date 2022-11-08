<?php
include 'connect_code.php';

$id=$_GET['id'];

$sql="DELETE FROM employee WHERE id='$id'";
$result=mysqli_query($conn,$sql);

if($result){
    header("Location:employee_display.php");
}else{
    echo "record not deleted";
}