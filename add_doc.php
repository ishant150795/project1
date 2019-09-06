<!DOCTYPE html>
<html>
<head>
	<title>add doctor</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
	<div>
		<?php


session_start();
if(!(isset($_SESSION['name']))){

	header('location:admin_login.php');
}
		include('header.php');
		?>
	</div>
	<div class="content">
	<form method="post" class="form-horizontal" enctype="multipart/form-data">
		
		<input type="text" name="name" placeholder=" first name" required class="all">  &nbsp; &nbsp;
		<input type="text" name="lname" placeholder="last name" required class="all"><br><br>
		<input type="text" name="qualification" placeholder="qualification" required class="all"><br><br>
		<input type="text" name="hospital" placeholder="hospital" required class="all"><br><br>
		<input type="text" name="practising" placeholder="practising since" required class="all"><br><br>
		<input type="text" name="discription" placeholder="discription" required class="all"><br><br>

		<input type="email" name="email" placeholder="email id" required class="all"><br><br>
		<input type="text" name="expertise" placeholder="expertise in" required class="all"> <br><br>

		<input type="text" name="address" placeholder="address" required class="all"><br><br>
		<input type="text" name="city" placeholder="city" required class="all"><br><br>
		<input type="text" name="pin" placeholder="pincode" required class="all"><br><br>
		country<select name="country">
			<option value='India'>INDIA</option>
			<option value='Other'>Other</option>
		</select><br><br>
		<input type="file" name="filename" ><br><br>
		
		<input type="submit" name="sub" value="add" class="btn btn-success" style="width: 40em;" onclick="add()">

	</form>
	</div>

</body>
</html>
<script>
	function add(){
		alert("details stored successfully !!")
	}
	
</script>
<style >
	body{
		margin: 0px;
		background-image: url('img/bg1.jpg');
		opacity: .5px;


	}
	.content{
		margin-left: 50px;
		margin-top: 50px;
	}
	.all{
		border-radius: 20px;
		text-indent: 8px;
		width: 30em;
		height: 3em;
		outline: none;
	}
</style>
<?php   
if(isset($_POST['sub']))
{	
	$conn=mysqli_connect('localhost','root','','sample');
	
	$name=$_FILES['filename']['name'];

	$destination = "images\web/".basename($name);

	$type=$_FILES['filename'].$name;

	$source=$_FILES['filename']['tmp_name'];

	move_uploaded_file($source, $destination);

	$sql = "INSERT INTO img (name,lname,qualification,hospital,practising,discription,email,expertise,address,city,pin,country,img,img_dir) VALUES ('".$_POST['name']."','".$_POST['lname']."','".$_POST['qualification']."','".$_POST['hospital']."','".$_POST['practising']."','".$_POST['discription']."','".$_POST['email']."','".$_POST['expertise']."','".$_POST['address']."','".$_POST['city']."','".$_POST['pin']."','".$_POST['country']."','$name', '$destination')";
	mysqli_query($conn, $sql);



}

?>
