<!DOCTYPE html>
<html>
<head>
	<title>users</title>
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
 $conn= new mysqli("localhost","root","","sample");
		$sql="select * from signup";
		$retval=mysqli_query($conn,$sql);
		?>
		<div id='user'>  <?php  echo "Total users ="." ".mysqli_num_rows($retval). "<br>" ;
		?>
		</div>
		
		
		<table class="table">
	<tr>
		<th> id </th>
		<th>name</th>
		<th>last name</th>
		<th>email</th>
		<th>phone</th>
		<th>address</th>
		<th colspan="3">action</th>
		
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
     	<td><?php echo $row[5]; ?></td>
     	<td><a onclick="del()" href="delete_users.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash-alt fa-lg"></i></a></td>
     	
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
		  background: linear-gradient(rgba(255,255,255,.4), rgba(255,255,255,0.5)), url("img/bg6.png");
		  
		  background-repeat: no-repeat;
		  background-size: cover;
		  margin-bottom:100px ;
}
#user{

	height: 30px;
	background-color: #ABB2B9;
	color: black;
	text-align: center;	
	left: 50px;
	font-weight: bold;
}
</style>
<script >
	function del()
	{
		alert("do you really want to delete?")
	}
</script>