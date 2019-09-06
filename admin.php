<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
	<?php
	include('header.php')
	?>
	<div class="bg">
		<div>
		<ul>
			<li><a href="comments.php"><i class="fas fa-sign-out-alt">View comments </a></i></li>
			<br>
			<br>
	 		<li><a href="users.php"><i class="fas fa-sign-in-alt">View users </a></i></li>
	 		<br>
			<br>
			<li><a href="add_doc.php"><i class="fas fa-phone-square">Add Doctor</a></i></li>
			<br>
			<br>
			
			<li><a href="view_doc.php"><i class="fas fa-camera-retro"> View Doctor</a></i></li>
			<br>
			<br>
			<li><a href="doc.php"><i class="fas fa-user-md">Find a doctor</a></i></li>	
			<br>
			<br>
			<li><a href="quotes.php"><i class="fas fa-user-md">add quotes</a></i></li>
			<br><br>
			<li><a href="logout.php"><i class="fas fa-sign-out-alt">Logout</a></i></li>	
			
			

</ul>
</div>
	</div>

</body>
<style>
	body{
		margin:0; 
	}
	
	

.bg{
	 	  height:657px;
		  width: 1366px;
		  background: linear-gradient(rgba(255,255,255,.4), rgba(255,255,255,0.1)), url("img/admin.jpg");
		  position: fixed;
		  background-repeat: no-repeat;
		  background-size: cover;
		  margin-bottom:100px ;
}
ul{
	list-style-type: none;
	

}
ul>li{
	font-size: 20px;

}


</style>
</html>
<?php

session_start();
if(!(isset($_SESSION['name']))){

	header('location:admin_login.php');
}


?>