
<?php
if(isset($_POST['btn']))
{
		$msg=$_POST["name"];
		$stream=fopen("m_input.txt","w");
		$content=$msg;
		fwrite($stream,$content);
		echo $content;
		header('location:mail1.php');		
}


?>