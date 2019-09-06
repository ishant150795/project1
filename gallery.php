<!DOCTYPE html>
<html>
<head>
	<title>Hospitals</title>
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<?php
include('header.php');

?>

<body>
	<img src="img/hos1.jpg" class="allimages" onclick="big(0)" >
	<img src="img/hos2.jpg" class="allimages" onclick="big(1)" >
	<img src="img/hos3.jpg" class="allimages" onclick="big(2)" >
	<img src="img/hos4.jpg" class="allimages" onclick="big(3)" >
	<img src="img/hos5.jpg" class="allimages" onclick="big(4)" >
	<img src="img/hos6.jpg" class="allimages" onclick="big(5)" >



	
	

	<div id="container">
		<i class="fas fa-times-circle fa-2x" id="cross"  onclick="closeit()"></i>
		<img src="" id="bg">
		<!-- <div class="con">
		<p id="1" >hi there i am 2 </p>
		<p id="2">hi there i am 3 </p>
		<p id="3">hi there i am 4 </p>
		<p id="4">hi there i am 5 </p>
	</div> -->
		<i class="fas fa-chevron-circle-right fa-2x " id="next" onclick="next()"></i>
		<i class="fas fa-chevron-circle-left fa-2x" id="previous" onclick="previous()"></i>	
		
		

	</div>


</body>
</html>
<script>
	el=document.getElementsByClassName('allimages');
	// ed=document.getElementsByClassName('con');
	index =0;

	function closeit() 

	{
		
		document.getElementById('container').style.visibility='hidden';
		document.getElementById('demo').style.visibility='hidden';
}

	function big(i)

{		index=i;
		document.getElementById('container').style.visibility='visible';
		document.getElementById('bg').src=el[index].src;
		document.getElementById('demo').style.visibility='visible';
}
	// function con(i)
	// {
	// 	index=i;
	// 	document.getElementById('container').style.visibility='visible';
	// 	document.getElemnetById('con')=ed[index];
	// 	document.getElementById('demo').style.visibility='visible';


	// }

	function next()
	{
		if(index<el.length-1)
		{
			index++;
			big(index);
		}
		
	}
	function previous()
	{
		if(index>1)
		{
			index--;
			big(index);
		}
	}
</script>
<style>
body{
	margin=0;
		  background: linear-gradient(rgba(255,255,255,.4), rgba(255,255,255,0.1)), url("img/gallery.jpg");
		  height: 100%;
		  width: 90%;
		  background-repeat: no-repeat;

}
	#demo{
		visibility: hidden;
		position: absolute;
		left: 750px;
		top: 0px;
		color: black;
		font-family: 'Merienda', cursive;
		

	}
	.allimages	{
		height: 200px;
		width: 300px;
		padding: 10px;
		margin: 30px;
		margin-top: 65px;
		cursor: pointer;
		border-radius: 10%;

	}
	.allimages:hover{
		opacity: .5;
		transition: all .5s ease;

	}
	#container{
		height: 650px;
		width: 95%;
		background-color: white;
		position: fixed;
		top: 0px;
		bottom: 0px;
		border-radius: 10px;
		visibility: hidden;

	}
	#cross{
		color:black ;
		position: absolute;
		left:1300px;
		cursor: pointer;
		opacity: .5;
	}
	#cross:hover{
		opacity: 1;
	}
	#next{

		color: black;
		position: absolute;
		top: 328px;
    	left:1264px;
    	cursor: pointer;
    	opacity: .5;
    	
	}
	#next:hover{
		opacity: 1;

	}
	#previous
	{
		color: black;
		position: absolute;
		cursor: pointer;
		top: 328px;
		left: 0px;
		opacity: .5;
	}
	#previous:hover{
		opacity: 1;
	}
	#bg{

		height: 550px;
		width:600px;
		margin-left: 70px;
		margin-top: 60px;
		border-radius: 10px;
	}
	h1{
		margin-top: 10px;
		font-family: 'Merienda', cursive;
		letter-spacing: 1.5px;
		margin-left: 10px;
		position: fixed;
		top: 0;
		left: 0;
		right: 0px;
	}
	.con{

	}
</style>