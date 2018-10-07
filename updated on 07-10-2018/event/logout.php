<?php
include 'connection.php';
//echo"hello";
$id=$_SESSION['loginid'];

//echo $id;
//die();
$sql="UPDATE `login` SET `status`='0' WHERE `loginId`= $id";

$result=mysqli_query($con,$sql);
session_destroy();
header('location:login.php');
?>