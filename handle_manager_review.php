<?php
include 'connect.php';
if(isset($_POST['review'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
      $task=$_POST['task'];
        $desc=$_POST['desc'];
    $option=$_POST['opt'];
    $feed=$_POST['feed'];
    $sql="INSERT INTO `review`(`employee_id`, `name`, `task`, `employee_description`, `review`, `feedback`) VALUES ('$id','$name','$task','$desc','$option','$feed')";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:manager_review.php");
    }
}

?>