<!DOCTYPE html>
<html>
<head>
	<title>Doctors</title>
</head>
<body>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<?php
	include('header.php');

	?>

</body>
</html>
<style>
	body{
		margin: 0px;
		background: linear-gradient(rgba(255,255,255,.4), rgba(255,255,255,0.1)), url("img/admin.jpg");
	}
	.pic{
		border-radius: 30px;
	}

</style>
<?php
$conn=mysqli_connect('localhost','root','','sample');
$result=mysqli_query($conn,'SELECT * FROM img');
?>
<table class="table  table-dark table-borderless table-hover ">
	<tr>
		<th> Name </th>
		<th>Qualification</th>
		<th>Hospital</th>
		<th>Practising Since</th>
		<th>Distcription</th>
		<th>Email id</th>
		<th>Expertise in </th>
		<th>Address</th>
		<th>Photoraph</th>
			
	</tr>

<?php
	while($r=mysqli_fetch_array($result))
	{	
		?>
		 <tr>
		<td><?php echo "Dr.". $r[1]." ".$r[2]; ?></td>
		
		<td><?php echo $r[3]; ?></td>
		<td><?php echo $r[4]; ?></td>
		<td><?php echo $r[5]; ?></td>
		<td><?php echo $r[6]; ?></td>
		<td><?php echo $r[7]; ?></td>
		<td><?php echo $r[8]; ?></td>
		<td><?php echo $r[9]." ".$r[10]." ".$r[11]." ".$r[12]; ?></td>

		<td><?php echo "<img style='border-radius:400px; height:200px; width:200px;' src='images\web/".$r[13]."' >"; ?></td>
		<?php
	}
	?>
	</table>