<?php
//upload.php
include('connection.php');
$albumid=$_GET['id'];
if(count($_FILES["file"]["name"]) > 0)
{
 //$output = '';
 sleep(3);
 for($count=0; $count<count($_FILES["file"]["name"]); $count++)
 {
  $file_name = $_FILES["file"]["name"][$count];
  $tmp_name = $_FILES["file"]['tmp_name'][$count];
  $file_array = explode(".", $file_name);
  $file_extension = end($file_array);
  if(file_already_uploaded($file_name, $connect))
  {
   $file_name = $file_array[0] . '-'. rand() . '.' . $file_extension;
  }
  $location = 'files/' . $file_name;
  if(move_uploaded_file($tmp_name, $location))
  {
   $query = "
   INSERT INTO tbl_image (image_name,album_id,status) 
   VALUES ('".$location."','".$albumid."',1)
   ";
   
   //$statement = $connect->prepare($query);
   //$statement->execute();
   $statement=mysqli_query($con,$query);
  }
 }
}

function file_already_uploaded($file_name, $connect)
{
 
 $query = "SELECT * FROM tbl_image WHERE image_name = '".$file_name."'";
 //$statement = $connect->prepare($query);
 //$statement->execute();
 $statement=mysqli_query($con,$query);
 $number_of_rows = mysqli_num_rows($statement);
 if($number_of_rows > 0)
 {
  return true;
 }
 else
 {
  return false;
 }
}

?>
