<?php
include 'connection.php';
if(isset($_POST['submit']))
{  
    $a=$_POST["email"];
	$b=$_POST["pwd"];	
	}
	function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
	}	
	$sql="SELECT * FROM `login`where UserName='$a'";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result))
		{
	//echo($row['username']);
	//echo($row['password']);
		$i=$row['loginId'];
		
		
		
   // $rid=$row['username'];
   //$sql1="SELECT `type_id` FROM `registration` WHERE `reg_id`='$rid'";
   // $result1=mysqli_query($con,$sql1);
   // $row1 = $result1->fetch_assoc();
   // $tpe=$row1["type_id"];   
 //  SELECT `lid`, `username`, `password`, `status`, `role` FROM `login` WHERE 1
	
	//user
	$sq="SELECT * FROM userdetails WHERE userdetails.lid=$i";
	$res=mysqli_query($con,$sq);
	$ar1=mysqli_fetch_array($res);
		$mid1=$ar1['name'];
		//echo $mid1;
	
	
	$pw=decryptIt( $row['Password'] );
	
	//$sql="SELECT * FROM `login` WHERE `UserName`='$a' AND `Password`='$encrypted' and `role`='A'";
	
	//$result=mysqli_query($con,$sql);
	//$r=mysqli_fetch_array($result);	
	
	//$pw=decryptIt( $row['password'] );
	if($a== $row['UserName']&&$b==$pw&&$row['role']=='A')
         {
	
			$_SESSION['user_name']=$a;
			$_SESSION['passsword']=$b;
			$_SESSION['name']=$mid1;
			$_SESSION['loginid']=$i;
			$sql5="UPDATE `login` SET `status`='1' WHERE loginId=$i";
			$result=mysqli_query($con,$sql5);
	 ?>
	 <script>
	window.location.href="adminhome.php";
	 </script>
	<?php
	//}
	}
	elseif($a== $row['UserName']&&$b==$pw&&$row['role']=='U')
	{
		$_SESSION['user_name']=$a;
		$_SESSION['name']=$mid1;
		//	$_SESSION['passsword']=$b;
			$_SESSION['loginid']=$i;
			$sql1="UPDATE `login` SET `status`='1' WHERE loginId=$i";
			$result=mysqli_query($con,$sql1);
			?>
	 <script>
	window.location.href="index.php";
	 </script>
	<?php
			
	}
	else{
	 
	?>
	<script>
	window.location.href="login.php";
	</script>
	<?php
	}
}
?>