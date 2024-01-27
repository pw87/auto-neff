<?php
/*
 * Created on 20.03.2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 namespace MyProject;
 use PHPMailer\PHPMailer\PHPMailer;
 require 'PHPMailer-6.9.1/src/PHPMailer.php';


 $subject = $_POST['subject'];
 $message = "<h3>".$subject."</h3> <table style=\"font-size:14px;\">";

 foreach ($_POST['data'] as $key => $value) 
 {
    $message = $message."<tr><td><strong>".$key.
			":</strong></td><td width=\"20px\"></td><td>".$value."</td></tr>";
 }
 $message = $message."</table>";

 $to = "info@autoneff.ch";

 $mail = new PHPMailer;

 $mail->From = 'phpMailer@autoneff.ch';
 $mail->FromName = 'AutoNeff.ch';
 $mail->addAddress($to);
 $mail->addReplyTo("noReply@autoneff.ch", "Reply");

 $mail->isHTML(true);
 $mail->Subject = $subject;
 $mail->Body = $message;

 if (!$mail->send()) {
     echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
     echo "Message has been sent successfully";
 }

?>
