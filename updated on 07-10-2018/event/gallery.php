<!DOCTYPE html>
<?php
	include('connection.php');
	if(!(isset($_SESSION['user_name'])))
	{
	header('location:login.php');
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
    width: 70%;
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

<title>HashTag Productions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
<h3><strong>Gallery <strong></h3>
</div>
<?php
	$sql2 =mysqli_query($con,"SELECT `album_id`, `album_name`, `date`, `status` FROM `album1` WHERE status=1 order by date desc;");
		 while (($row=mysqli_fetch_array($sql2))){
?>
<div class="responsive">
  <div class="gallery">
    <a target="_parent" href="eventalbum.php?id=<?php echo $row['album_id']; ?>">
      <img src="Folder Photo.png" alt="<?php echo $row['album_name']; ?>" width="300px" height="200px">
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
