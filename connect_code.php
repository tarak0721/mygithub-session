<?php
$servername="localhost";
$username="root";
$password="";
$database="dbtarak";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    // echo " not connected";
}else{
    // echo"connection failed";
}


