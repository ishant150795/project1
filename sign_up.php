<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Merienda|Alice|" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<div class="bg">
		<div class="header">
			<h1><a href="sample.php"><i class="fas fa-hospital"> HEALTHCLUB </a></i></h1>
			<div class="form">
				
				<form method="post">
					<input type="text" name="name" placeholder="first name" class="all" required><br>
					<input type="text" name="lastname" placeholder="last name" class="all" required><br>

					<input type="email" name="email" placeholder="Email" class="all" required><br>

					<input type="text" name="phone" placeholder="Phone no." class="all" required><br>

					<input type="text" name="address" placeholder="Address" class="all" required><br>

					<input type="password" name="password" placeholder="Password" class="all" required><br>
					<input type="submit" name="btn" value="submit"  id="sub" onclick="feed()"><br>
					
				</form>
<p style="margin-top: 20px;  margin-left: 200px;"> Already have account?
	<a  href="signin.php" style="text-decoration: none;">Sign in</a> </p>
				
			</div>

			
		</div>

		
	</div>

	<style >
	body
	{
		margin: 0;
		

}
.all{

			height: 50px;
			width: 500px;
			margin-top: 20px;
			margin-left: 50px;
			color: 	#708090;
			font-family: 'Rubik', sans-serif;			
			font-size: 15px;
			border:none;
			outline: none;
			border-radius: 10px;
			text-indent: 20px; 
			background-color:#F5F5F5;

}
 #sub
{
	        height: 50px;
			width: 500px;
			margin-top: 20px;
			margin-left: 50px;
		
			color: 	#708090;
			font-family: 'Rubik', sans-serif;			
			font-size: 15px;
			border:none;
			outline: none;
			border-radius: 15px;
		
			
}
#sub:hover{
	cursor: pointer;
	background-color: #B0C4DE
}
.bg{
          height:657px;
		  width: 1366px;
		  background: linear-gradient(rgba(255,255,255,.3), rgba(255,255,255,.3)), url("img/bg5.jpg");
		  background-repeat: no-repeat;
		  background-size: cover;
}
h1
{

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
	.form{
		height: 500px;
		width: 500px;
		position: absolute;
		top: 80px;
		left: 400px;
	}
</style>
</body>
</html>

<?php
if(isset($_POST['btn']))
{
	$conn=mysqli_connect('localhost','root','','sample');

	mysqli_query($conn,"insert into signup(name,lastname,email,phone,address,password) values('".$_POST['name']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['address']."','".$_POST['password']."')");

}
?>
<script>
		function feed(){
		alert("your details are stored");
	}
	</script>
