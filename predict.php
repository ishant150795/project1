
<!DOCTYPE html>
<html>
<head>
	<title>Predict your diasease</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
	<?php
include('header.php');
session_start();
if(!(isset($_SESSION['email'])))
{
	header('location:signin.php');
}

?>

<div class="box">
	<h2><i class="fas fa-user-edit">PLEASE ENTER THE DETAILS</i></h2>
	<form method="POST">
		<input type="text" name="pregnencies" placeholder="pregnencies" required class="all"><br>
		<input type="text" name="glucose" placeholder="glucose" required class="all"><br>
		<input type="text" name="bp" placeholder="blood pressure" required class="all"><br>
		<input type="text" name="skin_thickness" placeholder="skin thickness" required class="all"><br>
		<input type="text" name="insulin" placeholder="insulin" required class="all"><br>
		<input type="text" name="bmi" placeholder="BMI" required class="all"><br>
		<input type="text" name="dpf" placeholder="DiabetesPedigreeFunction" required class="all"><br>
		<input type="text" name="age" placeholder="age" required class="all"><br>
		<input type="submit" name="sub" value="predict" id="sub"> 

	</form>
	
</div>
<div>
	<a href="logout1.php" type="button" class="btn btn-light" id="btn">Logout</a>
</div>
	


</body>
</html>
<style >
	body{
		margin: 0;
		background-image: url('img/bg10.png');
		background-repeat: no-repeat;
		background-size: 1370px 1000px;
	}
	.box{
		height: 740px;
		width: 600px;
		z-index: -1000px;
		position: absolute;
		left: 720px;
		background: rgba(1, 151, 290, 0.3); 
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
	#btn{
		position: absolute;
		top: 12px;
		left: 90%;

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
	background-color: #8E44AD  ;
}
h2{
	text-align: center;
	font-family: 'Kanit', sans-serif;
	font-size: 30px;

}
.box1{
    position: absolute;
    top: 400px; 
    left: 20%;
    transform: translate(-50%,-50%);
    width: 400px;
    height: 400px;
    background:#001e2d;
    box-sizing: border-box;
    box-shadow: 0 20px 50px rgba(0,0,0,.5);
    border:2px solid rgba(0,0,0,.5);
    font-size: 30px;
    text-align: justify;
    color: white;
}
.box1 .content{
    position: absolute;
    top: 15px;
    left: 15px;
    bottom: 15px;
    right: 15px;
    border:2px solid #ffeb3b;
    padding: 30px;
    box-shadow: 0 5px 10px rgba(0,0,0,.5);
    text-align: center;
}
.box1 .content h1{
    color: #fff;
    font-size: 30px;
    margin: 0 0 10px;
    padding: 0;
}
.box1 .content p{
    color: #fff;
}
.box1 svg,
.box1 svg rect{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    fill: transparent;
}
.box1 svg rect{
    stroke: #009fff;
    stroke-width:4;
    stroke-dasharray: 397;
    animation: ani 3s linear infinite;
}
@keyframes ani{
    0%{
        stroke-dashoffset: 800;
    }
    100%{
        stroke-dashoffset: 0;
    }
}
	
</style>
<?php


 
if(isset($_POST['sub']))
{
		$pregnencies=$_POST["pregnencies"];
		$glucose=$_POST["glucose"];
		$bp=$_POST["bp"];
		$skin_thickness=$_POST["skin_thickness"];
		$insulin=$_POST["insulin"];
		$bmi=$_POST["bmi"];
		$dpf=$_POST["dpf"];
		$age=$_POST["age"];
		$stream=fopen("d_input.txt","w");
		$content=$pregnencies." ".$glucose." ".$bp." ".$skin_thickness." ".$insulin." ".$bmi." ".$dpf." ".$age;
		fwrite($stream,$content);

exec('(python diabetes.py) 2>&1',$output,$return_val);
 
for($i=1;$i<count($output);$i++) {
	echo " <span class='box1'> <svg><rect></rect></svg> <span class='content'>". $output[$i]."<br/>";
}

}
?>