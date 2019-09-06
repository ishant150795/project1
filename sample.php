<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Merienda|Alice|" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


	<style >
		
		body
		{
			margin:0;
			font-family: Calibri ,sana-serif;
		}
		.background-video{
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
		}
		.video{
			position: absolute;
			top: 0;
			left: 0;

		}
		.content{
			position: absolute;
			width: 100%;
			height: 100%;
			z-index: -1000px;
			background-color: rgb(0,0,0,0.7);
			margin-left: 0px;
		}
		.content h2{
			text-align:center;
			font-size: 45px;
			text-transform: uppercase;
			font-weight: 300;
			color: #fff;
			padding-top: 20%;
			margin: 40px;


			

		}
	
	h2 a{
		text-decoration: none;
		color:  #f2f2f2;
		font-family: 'Amiri', serif;
	}
	h2 a:hover{
		border-radius:8px;
	color: black;
	background-color: #f0c1c1;
	padding: 15px;
	transition: .5s;
	opacity: .5;
}
ul{
	position: fixed;
	top: 0px;
	left: 0px;
	right: 0px;
	margin-top: 0px;
} 
ul>li{
		float: right;
		list-style-type: none;
		display: inline-block;
		margin-top: 20px;
		margin-left: 40px;
	}
	ul>li>a
{   
	display: inline-block;
    color: white;
    text-align: center;
    padding: 10px 0px;
    text-decoration: none;
    font-family: 'Amiri', serif;
    border-radius: 10px;
    font-size: 20px;
    margin-top: 20px;
}
ul>li>a:hover{
	border-radius:10px;
	color: black;
	background-color: #f0c1c1;
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

	}
	</style>
<div class="background-video">
	<video autoplay muted loop class="video">
			<source src="video/vid3.mp4" type="video/mp4">
			</video>
</div>
<div class="content">

	<h2><a href="signin.php">PREDICT YOUR DISEASE</a></h2>
	<h1><a href="sample.php"><i class="fas fa-hospital"> HEALTHCLUB </a></i></h1> 
		<ul>
			<li><a href="sign_up.php"><i class="fas fa-sign-out-alt">Sign up </a></i></li>
	 		<li><a href="signin.php"><i class="fas fa-sign-in-alt">Sign in </a></i></li>
			<li><a href="contact1.php"><i class="fas fa-phone-square">Contact us</a></i></li>
			<li><a href="gallery.php"><i class="fas fa-camera-retro">Gallery</a></i></li>
			<li><a href="doc.php"><i class="fas fa-user-md">Find a <br> doctor</a></i></li>
			<li><a href="news.php"><i class="fas fa-newspaper">News&Research</a></i></li>	
<!-- 			<li><a href="sample.php"><i class="fas fa-home">Home</a></i></li>
 -->

</ul>
	
	
</body>
</html>
