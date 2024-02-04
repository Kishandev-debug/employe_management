<?php
include 'connect.php';
if(isset($_POST['review'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $task=$_POST['task'];
    $desc=$_POST['desc'];
    $st_time=$_POST['st_time'];
    $ed_time=$_POST['ed_time'];
    $sql="INSERT INTO `employee_detail`(`id`, `name`, `task`, `description`, `st_time`, `ed_time`) VALUES ('$id','$name','$task','$desc','$st_time','$ed_time')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "record insert succsefully";
        header("Location:show_employee_detail.php?id=$id");
    }
}
?>