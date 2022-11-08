<?php
include 'connect_code.php';

if(isset($_POST['departmentNameSubmit'])){
$dept_id=$_POST['dept_id'];
$dept_name=$_POST['dept_name'];

$check=mysqli_query($conn,"select * from department where dept_id='$dept_id' or dept_name='$dept_name'" );
$checkrows=mysqli_num_rows($check);

if($checkrows>0){
    echo "record exists";
}else {
$sql="INSERT INTO department(dept_id,dept_name) VALUES('$dept_id','$dept_name')";
$result=mysqli_query($conn,$sql);

if($result){
    header("Location:department_insert_display_form.php");
}else{
    echo "data not inserted";
}


}

}