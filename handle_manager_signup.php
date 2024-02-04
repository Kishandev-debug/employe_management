<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['pass'];
    $hash=password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO `admin`( `name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$hash')";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:manager_login.html");
    }
    
}

?>