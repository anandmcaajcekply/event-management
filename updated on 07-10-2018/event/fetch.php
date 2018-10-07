<?php
include('connection.php');
$albumid=$_REQUEST['id'];
$query = "SELECT * FROM tbl_image where album_id=$albumid ORDER BY image_id DESC";
//echo $query;
//$statement = $connect->prepare($query);
//$statement->execute();
$statement=mysqli_query($con,$query);
//$result = $statement->fetchAll();

//$number_of_rows = $statement->rowCount();
$number_of_rows = mysqli_num_rows($statement);
//echo $number_of_rows;
$output = '';
$output .= '
 <table class="table table-bordered table-striped">
  <tr>
   <th>Sl. No</th>
   <th>Image</th>
   <th>Name</th>
   <th>Delete</th>
  </tr>
';
if($number_of_rows > 0)
{
 $count = 0;
 while($result=mysqli_fetch_array($statement))
 {
  $count ++; 
  $output .= '
  <tr>
   <td>'.$count.'</td>
   <td><img src="'.$result["image_name"].'" class="img-thumbnail" width="100" height="100" /></td>
   <td>'.$result["image_name"].'</td>
   <td><button type="button" class="btn btn-danger btn-xs delete" id="'.$result["image_id"].'" data-image_name="'.$result["image_name"].'">Delete</button></td>
  </tr>
  ';
 }
}
else
{
 $output .= '
  <tr>
   <td colspan="6" align="center">No Data Found</td>
  </tr>
 ';
}
$output .= '</table>';
echo $output;
//echo $query;?>