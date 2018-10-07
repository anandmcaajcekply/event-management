<!DOCTYPE html>
<?php
	include('connection.php');
	if(!(isset($_SESSION['user_name'])))
	{
	header('location:adminhome.php');
	}
?>
<html>
<head>
<style>
div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>

<h2>Image Gallery</h2>
<div>
	<form action="#" method="post">
		Add Album:<input type="text" name="album_name" placeholder="Album Name" enctype="multipart/form-data">
		
		<input type="submit" value="create" name="add_album">
	</form>
	
	<?php
		if(isset($_POST["add_album"])){
            $album_name= htmlspecialchars($_POST['album_name']);
			
			$sql1="insert into album1 (album_name,status)"
                    . "values('$album_name',1);";

                if (mysqli_query($con,$sql1) > 0){

                    echo "<script> alert('Added'); </script>";
                }

                else{
                    echo "<script> alert ('Failed !'); </script>";
                }
            }	
	?>
	
	
</div>
<br/>
<br/>
<?php
	$sql2 =mysqli_query($con,"SELECT `album_id`, `album_name`, `date`, `status` FROM `album1` WHERE status=1 order by date desc;");
		 while (($row=mysqli_fetch_array($sql2))){
?>
<div class="responsive">
  <div class="gallery">
    <a target="_parent" href="index1.php?id=<?php echo $row['album_id']; ?>">
      <img src="folder.png" alt="<?php echo $row['album_name']; ?>" width="300px" height="200px">
    </a>
    <div class="desc"><?php echo $row['album_name']; ?></div>
	<div class="desc"><?php echo $row['date']; ?></div>
  </div>
</div>
<?php
		 }
?>

<div class="clearfix"></div>


</body>
</html>
