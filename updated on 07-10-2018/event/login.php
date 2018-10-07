<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/responsive.css">
<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css" />

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>

</head>
<body>
<div class="login_bg">
<div  class="login">		 
    <div class="loginner1">	   
	     <img class="loginlogo" src="img/logo-alt.png" />
		 <div class="side_menu">
		 <li class="active">
		 <a href="#" id="login_a" class="menu_item" data-toggle="tab">Login</a>
		 </li>
		  <li>
		 <a href="#" id="reg_a" class="menu_item" data-toggle="tab">Registration</a>
		 </li>
		  <li>
		   <a href="#" id="forg_a" class="menu_item" data-toggle="tab">Forgot Password</a>
		 </li>
		 </div>	   
    </div>
	<div class="loginner2">
			<div class="smenu fadin"  id="login">
			<form action="loginConnection.php" method="post">
				  <div class="form-group">
					<span for="email">Email address:</span>
					<input type="email" name="email" class="form-control" id="email">
				  </div>
				  <div class="form-group">
					<span for="pwd">Password:</span>
					<input type="password" class="form-control" name="pwd" id="pwd">
				  </div>
				  <div class="form-group">
					<span><input type="checkbox"> Remember me</span>
				  </div>
				  <div class="pull-right">  
				  <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
				  </div>
			</form>	
			</div>
			<div class="smenu fade" id="reg">
			<form action="reg.php" method="post">
				  
				   <div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="email" id="email" required>
				  </div>
				  <div class="form-group">
	
					<input type="text" name="fname" class="form-control" placeholder="name" id="fname" required>
					</div>
					<div class="form-group">
					<input type="text" name="lname" class="form-control" placeholder="LastName" id="lname" required>
				  </div>
				  <div class="form-group">
					
					<input type="password" class="form-control" name="pwd" placeholder="Password" id="pwd" required>
				  </div>
				  <div class="form-group">
					
					<input type="password" class="form-control" name="cpwd" placeholder="confirm Password" id="pwd" required>
				  </div>	
				  <div class="form-group">
					<input type="text" name="phone" placeholder="Mobile No"class="form-control" required id="phone">
				  </div>
				  <div class="pull-right">  
				  <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
				  </div>
			</form>	
			</div>
			<div class="smenu fade" id="forgot">
			<form action="#" method="post">
				  <div class="form-group">
					<span for="email">Email address:</span>
					<input type="email" name="email" class="form-control" id="email" required>
				  </div>				   		
				  <div class="pull-right">  
				  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				  </div>
			</form>	
			</div>
   </div> 
</div>
</div> 
<script>
(function($){
$(".side_menu li").click(function(event){
		event.preventDefault();
		$(".side_menu li").removeClass("active");
		$(this).addClass("active");
	});
})(jQuery);
$(document).ready(function() {
 
});
	
$(".li").click(function(){
$(".li").removeClass("active");
$(this).addClass("active");
})
$("#login_a").click(function(){
$(".smenu").removeClass("fadein");
$(".smenu").addClass("fade");
$("#login").removeClass("fade");
$("#login").addClass("fadein");
});
$("#reg_a").click(function(){
$(".smenu").removeClass("fadein");
$(".smenu").addClass("fade");
$("#reg").removeClass("fade");
$("#reg").addClass("fadein");
});
$("#forg_a").click(function(){
$(".smenu").removeClass("fadein");
$(".smenu").addClass("fade");
$("#forgot").removeClass("fade");
$("#forgot").addClass("fadein");
});

</script>	


</body>
</html>
