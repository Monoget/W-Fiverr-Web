<?php

            $dbuser = 'carcenti_carcentive_admin';
   			$dbpwd = 'atecco@123';
   			$dbname = 'carcenti_carcentive2';
   			$dbserver = 'localhost';
   		
   		    $db = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
   
   
   		    if ($db->connect_errno > 0){
   		        echo "Failed to connect to MySQL: " . $db->connect_error;
   		    }
   		  

if(isset($_POST['Consultation1'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $time = $_POST['Avt'];
    $reason = $_POST['reason'];
    $change = str_replace("'","~",$reason);
    $sql = "INSERT INTO `ConAppo`(`name`, `email`, `Avt`, `Reason`) VALUES  ('$name','$email','$time','$change')";
    
    if ($db->query($sql) === TRUE) {
                $subject="REQUEST FOR CONSULTATION";
                $cemail="Sales@carcentive.com";
                $body ="Hi, 
                $reason";
                $sender_mail = "FROM: ".$email;
                if(mail($cemail, $subject, $body, $sender_mail)){
                   
                    header('Location: https://www.carcentive.com/contact.php?AppoinmentForConsultation=');
                }else{
                    echo"mail not send";
                }
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}


if(isset($_POST['Dealership123'])){
    
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $time = $_POST['Avt'];
    $reason = $_POST['reason'];
    $dateTime = $_POST['dateTime'];
    $seprate = str_replace("T"," ",$dateTime);
    
    $phone = $_POST['phone'];
    $change = str_replace("'","~",$reason);
    
       $seprate = explode("T",$dateTime);
                   $dateeeeee = $seprate['0']." ".$seprate['1'];
                   
                 
                    $date=date_create($dateeeeee);
                    $datewithAm = date_format($date,"m/d/Y g:i A");
                    
                    $datetime = explode(" ",$datewithAm);
                     $Time = $datetime['1']." ".$datetime['2'];
                     $currentdate =  $datetime['0'];
                                                     
                    // $date=date_create($currentdate);
                    // $formate = date_format($date,"d-m-y");
                    
                    $prperdate = $datetime['0']." ".$datetime['1']." ".$datetime['2'];
                    
                    
                    
                    
                    
                    $datecreate = new DateTime("now", new DateTimeZone('America/New_York') );
                    $americandate = $datecreate->format('m/d/Y h:i:s a');
                 

                                                     
   
    $sql = "INSERT INTO `DealerAppo`(`name`, `lname`, `email`, `phone`, `Reason`,`createdate`,`client`) VALUES  ('$name','$lname','$email','$phone','$change','$americandate','$prperdate')";
    
    if ($db->query($sql) === TRUE) {
              
                  
                
              
                   
                   
                   
                   
                   
                   
                 
                                
                               


                                 
                       $email_to = $_POST['email'];
                            	$subject ='CARCENTIVE';
                            	$userName = $_POST['name'];
                            	
                               $y= ucwords($userName);
                            	
                            	$headers = "From: Car Centive <sales@carcentive.com>\r\n";
                            	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                            	
                            	$messege = "<html>
                            		<body style='background-color: #eee; font-size: 16px;'>
                            			<div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                            			
                            				<img src='https://www.carcentive.com/images/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            				
                            				<h3>Hi $y!</h3>
                            					
                            				<p style='text-align: center;color:green;font-weight:bold'>Thank you for reaching out to us for a Dealership!</p><br>    
                            				<p> 
                            				Our team is excited to join you on your journey to getting your next car!
                            					<br>
                            				We look forward to speaking with you on $currentdate at $Time about the next steps we need to take to get you your next car.
                            					<br>
                            				If there are any changes to your contact information or availability, please let us know by
                            					<br>
                            				reaching us at <a href='tel:+18772368483'>(877) 236-8483</a> or <a href='mailto:sales@carcentive.com'>sales@carcentive.com</a> 
                            					<br><br><br>
                            				We look forward to speaking with you!<br>                                                                  
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
                   
                   
                   
                   
                   
                   
               
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}





?>