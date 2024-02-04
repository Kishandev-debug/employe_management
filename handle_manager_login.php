<?php
include 'connect.php';
if(isset($_POST['mlogin'])){
    $email=$_POST['email'];
     
    $pass=$_POST['pass'];
    $sql="SELECT * FROM `admin` WHERE email='$email'";
    $result=mysqli_query($con,$sql);
// echo $result;
    while($row=mysqli_fetch_assoc($result)){
        $manager_email=$row['email'];
        echo  $manager_email;
        $id=$row['manager_id'];
    $name=$row['name'];
        $manager_password=$row['password'];
        $pass_v=password_verify($pass,$manager_password);
        // echo $manager_password;
        // echo $pass_v;
        if($email==$manager_email &&$manager_password==$pass_v){
            echo "Logged in";
            header("location:review_table.php");
        }
        else{
            echo "not Logged in";
            header("location:manager_login.html");
        }
    }
}

?>