<?php
include 'connect_code.php';
    if(isset($_POST['submit']))
    {
$id=$_POST['id'];
$emp_id=$_POST['emp_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$contact_number=$_POST['contact_number'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$dept=$_POST['dept'];


$sql="UPDATE employee SET 
name='$name',
emp_id='$emp_id',
email='$email',
contact_number='$contact_number',
address='$address',
gender='$gender',
dept='$dept' 
WHERE id='$id'";
echo $sql;
$result=mysqli_query($conn,$sql);


    if($result){
        header("Location:employee_update_form.php");
       
    }else{
        echo "not updated successfully";
    }
}