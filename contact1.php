
<!DOCTYPE html>
<html>
<head>
	<title> Contact Us</title>
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<body>
	<div class="bg1">
		<?php
include('header.php');
?>
		
	</div>
	<div class='form'>
		<h2 style="text-align: center;"><i class="fas fa-id-card"> Contact Us</i></h2>
		<h3>We Love To Hear From You</h3>
		
		<form method="POST">
			<input type="text" name="name" placeholder="Name" class="all" required>
			<input type="email" name="email" placeholder="Email" class="all" required>
			<input type="text" name="phone" placeholder="Phone No." class="all" required><br>
			<input style="height: 150px;" type="text" placeholder="type ypur message" name="msg" class="all" required> <br>
			<input type="submit" name="sub" id="sub" onclick="feed()">
		</form>
		
	</div>

</body>
</html>	

	<style>
	body{
		margin: 0px;
	}
	.bg1{ 
		  height:657px;
		  width: 1349px;
		  background: linear-gradient(rgba(255,255,255,.4), rgba(255,255,255,0.1)), url("img/map.png");
		  position: fixed;
		  background-repeat: no-repeat;
		  background-size: cover;
		  
		 
	}
	.form{
		position: absolute;
		top: 90px;
		left: 400px;
		height: 650px;
		width: 600px;
		 background-color: rgba(1, 151, 290, 0.3); 

		border-radius: 20px;
	}
	.all{

			height: 50px;
			width: 500px;
			margin-top: 20px;
			margin-left: 50px;
			color: 	black;
			font-family: 'Rubik', sans-serif;			
			font-size: 15px;
			border:none;
			outline: none;
			border-radius: 10px;
			text-indent: 20px; 
			background-color:#FFFFFF;

}
h3{
	text-align: center;
	font-family: 'Rubik', sans-serif;	
}
#sub
{
	        height: 50px;
			width: 500px;
			margin-top: 20px;
			margin-left: 50px;
		
			color: 	black;
			font-family: 'Rubik', sans-serif;			
			font-size: 15px;
			border:none;
			outline: none;
			border-radius: 15px;
		
			
}
#sub:hover{
	cursor: pointer;
	background-color: #8E44AD ;
}
</style>

	<?php
	if(isset($_POST['sub']))
	{
		$conn=mysqli_connect('localhost','root','','sample');
		mysqli_query($conn,"INSERT INTO feed(name,email,phone,msg) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['msg']."')");
	}
	?>
	<script>
		function feed(){
		alert("thank you for your feedback we will contact as soon!!");
	}
	</script>