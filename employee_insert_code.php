<?php
include 'connect_code.php';
    $emp_id=$_POST['emp_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact_number=$_POST['contact_number'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $dept=$_POST['dept'];

    $sql="INSERT INTO employee(emp_id,name,email,contact_number,address,gender,dept) VALUES
    ('$emp_id','$name','$email','$contact_number','$address','$gender','$dept')";
    $result=mysqli_query($conn,$sql);

    if($result){
        header("Location:employee_display.php");
}else{
    echo "data not inserted";
}

?>