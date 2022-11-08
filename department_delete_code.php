<?php
include 'connect_code.php';
$id=$_GET['id'];
$sql="DELETE FROM department WHERE id='$id'";
$result=mysqli_query($conn,$sql);

if($result){
    header("Location: department_insert_display_form.php");
}else{
    echo "record not deleted";
}
