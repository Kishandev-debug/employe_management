<?php
include 'connect.php';
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $sql="SELECT * FROM `user` WHERE email='$email'";
    $result=mysqli_query($con,$sql);


while($row=mysqli_fetch_assoc($result)){
    $user_email=$row['email'];
    $user_password=$row['password'];
    $id=$row['id'];
    $name=$row['name'];
    $password_verify=password_verify($password,$user_password);
    if($email==$user_email && $password_verify== $user_password){
     echo "logged in";
     $_SESSION['loggedin']=true;
     if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
header("location:employee_review.php?id=$id&name=$name");
exit();
    }
 
}
 else{
echo "password not match";
        session_destroy();
     header("location:index.html");   
    }

   
     
    }
}
?>