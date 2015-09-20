<?php
/*
 * Created on 20.03.2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 
 $subject = $_POST['subject'];

 $message = "<h3>".$subject."</h3> <br><br> <table style=\"font-size:12px;\">";


 foreach ($_POST['data'] as $key => $value) 
 {
    $message = $message."<tr><td><strong>".$key.
			":</strong></td><td width=\"20px\"></td><td>".$value."</td></tr>";
 }
 
 $message = $message."</table>";	

 $to = "info@autoneff.ch"; 
  
 $header_basic = "MIME-Version: 1.0" . "\r\n";
 $header_basic .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
 $header_1 = $header_basic . "From: ". "AutoNeff.ch" . "\r\n";

  
 $send = mail($to, $subject, $message, $header_1);
 

?>
