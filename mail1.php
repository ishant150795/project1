<?php

	include('header.php');

require('mail/PHPMailerAutoload.php');
 $conn= mysqli_connect("localhost","root","","sample");
 $sql="select * from feed where id='".$_GET['id']."'";
 $retval=mysqli_query($conn,$sql);		
 $row=mysqli_fetch_array($retval);


if(isset($_POST['btn']))
{


		
 $to= $row[2];
 $mail=new PHPMailer;
 $mail->isSMTP();
 $mail->Host='smtp.gmail.com';
 $mail->Port=587;
 $mail->SMTPAuth=true;
 $mail->Username='healthclubsxr@gmail.com';
 $mail->Password='ishant@123';
 $mail->setFrom('healthclubsxr@gmail.com','HealthClub');
 $mail->addAddress($to);
 $mail->isHTML(true);
 $mail->Subject='mail from HealthClub';
 $msg=$_POST["name"];
 $mail->Body=$msg;

  if(!$mail->send())
  {
   echo "Message could not be send,please check your internet connection!!!";
  }
  else{
   echo "message sent successfully";
  }
 } 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
</head>
<body>
	<div class="box">
	<form method="POST" >
		<input type="text" name="email" id="all" value="<?php echo $row[2] ?>" ><br><br>
		<textarea type="text" name="name" placeholder="enter your message..." id="all"></textarea> <br>
		<input type="submit" id="sub" name="btn" value="send mail">
	</div>
		<?php
		if(isset($_POST['btn']))
{

		$msg=$_POST["name"];
		$stream=fopen("m_input.txt","w");
		fwrite($stream,$msg);
	}
		?>
		
		
	</form>

</body>
</html>
<style>
	body{
		margin: 0px;
		background-image: url('img/13977.jpg');
		background-repeat: no-repeat;
		background-size: 1370px 1000px;
	}
	.box{
		position: absolute;
		top: 250px;
		left: 400px;
	}
	#all{
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
/*.box1{
	position: absolute;
	top: 100px;
	left: 400px;
}*/
</style>