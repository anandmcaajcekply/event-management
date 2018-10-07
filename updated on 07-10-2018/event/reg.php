<?php
include'connection.php';
if(isset($_POST['submit']))
    {  
	$n=$_POST["fname"];
	$m=$_POST["lname"];
	$a=$_POST["email"];
	$b=$_POST["pwd"];
	$c=$_POST["cpwd"];
	$d=$_POST["phone"];
	function encryptIt($q){
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
	}
	$encrypted = encryptIt($c);
if($b==$c)
	{
$sql="INSERT INTO `login`(`UserName`, `Password`, `status`,`role`) VALUES ('$a','$encrypted','0','U')";
//secho($sql);
//die();
$result=mysqli_query($con,$sql);
$sql2="select max(loginId) as id from login";
$res=mysqli_query($con,$sql2);
		$ar=mysqli_fetch_array($res);
		$mid=$ar['id'];
		//echo $mid;
$sql3="INSERT INTO `userdetails`(`name`, `lastname`, `mobile`, `lid`) VALUES('$n','$m','$d','$mid')";
$res=mysqli_query($con,$sql3);
//alert("success");
?>
<script>
     echo'alert("successfully registered")';
	window.location.href="login.php";
	
</script>

<?php
	}
	else
	{
		?>
		<script>
		echo'alert("error")';
	window.location.href="login.php";
	
</script>
		<?php
	}
}
?>
