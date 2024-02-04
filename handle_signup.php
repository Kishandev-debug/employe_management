<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $pass=$_POST['pass'];
    $hash=password_hash($pass,PASSWORD_DEFAULT);
    $sql="INSERT INTO `user`( `name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$hash')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "record insert succesfully";
        header("Location:login.html");
    }
    

}
?>