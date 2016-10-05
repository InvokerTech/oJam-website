<?php
include 'conf.php'; 
$from_email = "ojamapp@gmail.com";
		   $body='<br>
		            <p>Hi Jammer,</p>
		            <p>A couple of months back I met a friend for a jamming session, thats when oJAM was born. At oJAM we are creating the easiest way to create music together. Glad to have you onboard Jammer. Can’t wait to see what you create on oJAM. Now back to building oJAM.<br/><br/><br/>Peace,<br/>Akshay Jammer, oJAM</p>
		            <hr />
		            <p> Do you know a friend who loves music? Here’s your custom oJAM invite link:</p>
		            <strong><a href="'.$link.$uniq_id.'">'.$link.$uniq_id.'</a></strong> 
		            <br>';
		         $mail = new PHPMailer();
		         $mail->IsMail();
		         $mail->From = $from_email;
		         $mail->FromName = "oJam Team";
		         $mail->AddAddress($referred_email);
		         $mail->WordWrap = 50;    
		         $mail->IsHTML(true);
		         $mail->Subject = "Hi Jammers!";
		         $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; 
		         $mail->MsgHTML($body);
		         $mail->send();
?>