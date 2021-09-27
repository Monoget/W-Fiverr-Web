<?php

	$headers = "From:Car Centive <sales@carcentive.com>";

	$to = "hamzadeveloper35@gmail.com";
	$subject = "sending emails with php";
	
	$message = "Sending emails using php\n\n";
	$message .= "Even send custom multi line emails? Tell me more!";

	if ( mail($to, $subject, $message, $headers) )
		echo 'Success!';
	else
		echo 'UNSUCCESSFUL...';

?>