<!DOCTYPE html>
<?php
include'connection.php';
if(!(isset($_SESSION['user_name'])))
{
header('location:login.php');
}


	if(isset($_GET['id'])){
	$albumid=$_REQUEST['id'];
	//echo $albumid;
	//DIE();
	}
?>

<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Event Gallery</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="fluid-gallery.css">


</head>
<body>

<div class="container gallery-container">

    <h1>Event Gallery</h1>

    <p class="page-description text-center"></p>
    
   <div class="tz-gallery">
	<?php
			$sql="SELECT * FROM `tbl_image` WHERE `album_id`=$albumid";
			
			$result=mysqli_query($con,$sql);
			//print_r($result);
		//	die();
			while($row=mysqli_fetch_array($result))
				{
					
					?>
       
			
            <div class="col-sm-6 col-md-4">
                 <a class="lightbox" href="<?php echo $row['image_name']?>">
                    <img src="<?php echo $row['image_name']?>">  
               	</a>	
			

          </div>  
		 
           <?php
			}
			?>
        
 
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>