<!DOCTYPE html>
<html>
<head>
	<title>comments</title>
</head>
<body>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<?php
	include('header.php')
	?>
	<div class="bg">
		
<?php

session_start();
if(!(isset($_SESSION['name']))){

	header('location:admin_login.php');
}
 $conn= mysqli_connect("localhost","root","","sample");
		$sql="select * from feed";
		$retval=mysqli_query($conn,$sql);
		?>
		<div id="comment">
		<?php echo "Total comments ="." ".mysqli_num_rows($retval). "<br>";
		?>
	</div>
		<table class="table">
	<tr><th> ID
		<th> NAME </th>
		<th>EMAIL</th>
		<th>PHONE NO</th>
		<th>MESSAGE</th>
		<th colspan="2">action</th>
		
	</tr>

<?php
		if(mysqli_num_rows($retval)>0)
		{
		while($row=mysqli_fetch_array($retval))
			{    
     ?>
     <tr>
     	<td><?php echo $row[0]; ?></td>
     	<td><?php echo $row[1]; ?></td>
     	<td><?php echo $row[2]; ?></td>
     	<td><?php echo $row[3]; ?></td>
     	<td><?php echo $row[4]; ?></td>
     	<td><a onclick="del()" href="delete_comment.php?id=<?php  echo $row['id'];  ?>"><i class="fas fa-trash-alt fa-lg"></i></a></td>
     	<td><a class="btn btn-success" href="mail1.php?id=<?php echo $row['id']; ?>">SendMail</a></td>
     	
     </tr>

<?php
    
}
	}
?>

</table>
	</div>


</body>
</html>
<style>
	body{
		margin: 0;
	}
	
	
	.bg{
	 	  height:auto;
		  width: auto;
		  background: linear-gradient(rgba(255,255,255,.7), rgba(255,255,255,0.5)), url("img/bg1.jpg");
		  
		  
		  
		  
}
#comment{
	height: 30px;
	background-color: #ABB2B9;
	color: black;
	text-align: center;	
	left: 50px;
	font-weight: bold;
}
#sub
{
	        height: 30px;
			/*width: 500px;*/
			/*margin-top: 20px;
			margin-left: 50px;
		*/
			color: 	black;
			font-family: 'Rubik', sans-serif;			
			font-size: 15px;
			border:none;
			outline: none;
			border-radius: 15px;
		
			
}
#sub:hover{
	cursor: pointer;
	background-color:#5D6D7E  ;
	color: white;
}

</style>
<script>
	function del()
	{
		alert("do you really want to delete it?");
	}
</script>
