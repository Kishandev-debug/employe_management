<?php
$server="localhost";
$username="root";
$password="";
$db="ht";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
echo "not connected";
}

?>