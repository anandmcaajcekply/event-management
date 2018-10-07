<!DOCTYPE html>
<?php
include'connection.php';
//if(!(isset($_SESSION['user_name'])))
//{
//header('location:login.php');
//}


	//if(isset($_GET['id'])){
	//$albumid=$_REQUEST['id'];
	//echo $albumid;
	//DIE();
	//}
?>

<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Freebie: 4 Bootstrap Gallery Templates</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="fluid-gallery.css">


</head>
<body>

<div class="container gallery-container">

    <h1>Bootstrap 3 Gallery</h1>

    <p class="page-description text-center">Fluid Layout With Overlay Effect</p>
    
    <div class="tz-gallery">

        <div class="row">

			<?php
			//$sql="SELECT * FROM `tbl_image` WHERE `album_id`=$albumid";
			//print($sql);
			//$result=mysqli_query($con,$sql);
			//print_r($result);
		//	die();
			//while($row=mysqli_fetch_array($result))
			//	{
			?>
            <div class="col-sm-6 col-md-4">
                
            <!--        <img src="<?php echo $row['image_name']?>" width=35 height=35 >  -->
               
            </div>
			<?php
			//}
			?>
           

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>