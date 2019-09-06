<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Merienda|Alice|" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<body>
	
	<div>

		
			<div  class="bg">
				<h1><a href="sample.php"><i class="fas fa-hospital"> HEALTHCLUB </a></i></h1> 
		<div class="all">		
			<img src="img/admin_login.png" >
				
			<form style="margin-top: 60px;" method="post">
				<input type="text" name="email" placeholder="username" class="login" required>
				<input type="password" name="password" placeholder="password" class="login" required><br>
				<input type="submit" name="sub1" value="login" class="sub">
				
			</div>
			
			

	</div>
	
</div>
</body>
</html>
<style >
.all1{
	height: 450px;
		width: 300px;
		position: absolute;
		top: 120px;
		left: 800px;
		background-color:#E9EEED;
		border-radius: 10px;
		
}
.all1:hover{
		box-shadow: 4px 4px 3px #8F9594;
		/*transition: all .7s;*/	
}
body{
	margin: 0px;
}
	img{
		width: 250px;
	}
	.sub{
		height: 40px;
			width: 100px;
			margin-left: 20px;
		
			color: 	black;
			font-family: 'Rubik', sans-serif;			
			font-size: 15px;
			border:none;
			outline: none;
			border-radius: 5px;
			background-color:#1CA4A4;
			cursor: pointer;

	}
	.sub:hover{
		background-color: green  ;
		color: black;
	}
	
	.all{

		height: 400px;
		width: 400px;
		position: absolute;
		top: 120px;
		left: 500px;
		background-color:#E9EEED;
		border-radius: 10px;
		
		
	}
	.bg{ 
		  height:657px;
		  width: 1366px;
		  background: linear-gradient(rgba(255,255,255,.4), rgba(255,255,255,0.1)), url("img/bg8.jpg");
		  position: fixed;
		  background-repeat: no-repeat;
		  background-size: cover;
		  margin-bottom:100px ;

	}
	.login{

		
			height: 40px;
			width: 270px;
			margin-left: 20px;
			margin-bottom: 20px;
			color: 	#708090;
			font-family: 'Rubik', sans-serif;			
			font-size: 15px;
			border:none;
			outline: none;
			border-radius: 5px;
			text-indent: 2px; 
			background-color:#F5F5F5;

}
.all:hover{
	box-shadow: 4px 4px 3px #8F9594;
	/*transition: all .7s;*/
}
h1{
		margin-top: 10px;
		font-family: 'Merienda', cursive;
		letter-spacing: 1.5px;
		margin-left: 10px;
		color: white;
		float: left;
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
	}
		
</style>
<?php
if($_POST["email"]== "admin" && $_POST["password"]=="123")
{
	session_start();
	$_SESSION['name']=$_POST['email'];
	header('location:admin.php');
}
?>