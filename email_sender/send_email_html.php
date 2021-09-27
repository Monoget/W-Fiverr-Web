<?php

	$email_to = "hamzadeveloper35@gmail.com";
	$subject ='Email From Carcentive';
	$userName = 'Ali Hamza';
	
	$headers = "From: Car Centive <sales@carcentive.com>\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$messege = "<html>
		<body style='background-color: #eee; font-size: 16px;'>
			<div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
			
				<img src='https://www.carcentive.com/images/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
				
				<h3>Hi!</h3>
					
				<p style='text-align: center;color:green;font-weight:bold'>Happy Birthday From Carcentive!</p><br>    
			
				<img src='https://carcentive.com/email_sender/pngarea.com_birthday-wishes-png-5936829.png' width='100%' height='auto' alt=''>
				<b style='text-align: center;color:green;font-weight:bold' >Carcentive Team</b> 
				</p>

				<img src='https://carcentive.com/email_sender/keepTouch.jpg' width='100%' height='auto' alt=''>
			</div>
		</body>
	</html>
	";

	if ( mail($email_to, $subject,$messege,$headers)){
		header('Location: https://carcentive.com/messagescreen.php');
	}
	else{
		echo '<hr /><center> UNSUCCESSFUL... Your email was <b>NOT</b> sent. </center>';
	}
?>
