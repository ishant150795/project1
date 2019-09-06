<?php
 require('mail/PHPMailerAutoload.php');
 $mail=new PHPMailer;
 $mail->isSMTP();
 $mail->Host='smtp.gmail.com';
 $mail->Port=587;
 $mail->SMTPAuth=true;
 $mail->Username='ishant.gumber98@gmail.com';
 $mail->Password='trueblood@1234';
 $mail->setFrom('ishant.gumber98@gmail.com','ishant gumber');
 $mail->addAddress('ishant.gumber97@gmail.com');
 $mail->isHTML(true);
 $mail->Subject='subject of mail';
 $mail->Body='hi there its my first email through PHP';

  if(!$mail->send())
  {
   echo "message could not be send";
  }
  else{
   echo "message sent successfully";
  }
  
?>
   
