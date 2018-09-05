<!doctype html>
<?php
include 'connection.php';
//if(!(isset($_SESSION['username'])))
//{
//header('location:index.php');
//}



	if(isset($_POST['submit']))
    {   
	//front album details
	
		
		$path= "upload/".$_FILES['fileupload']['name'];
		echo($path);
        copy($_FILES['fileupload']['tmp_name'], $path);
		
		$sql="INSERT INTO `album`(`album`) VALUES('$path')";
		$result=mysqli_query($con,$sql);
	}
	?>
<html>
<head>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
<h3><strong>Admin <strong></h3>
<p>Add Album</p>
</div>



<form name="album" id="msform" method="post" action="#" enctype="multipart/form-data">
<div class="container">
  <div class="row">
  <div class="col-sm-4">
  </div>
   <div class="col-sm-4">
  <center><h3><label for="example-search-input" class="col-2 col-form-label"><b><i>Album</i></b></label></h3><center>
 
  <div class="col-sm-12">
    <input class="form-control" type="file" name="fileupload" accept="image/*" size="70" id="image">
	<br>
	<center><input type="submit" name="submit" class="btn btn-danger" value="Add Album" /> </center>
  </div>
 </div>
</div>
</div>
</form>
</body>
</html>