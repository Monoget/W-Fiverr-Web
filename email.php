<?php


   $dbuser = 'carcenti_carcentive_admin';
   			$dbpwd = 'atecco@123';
   			$dbname = 'carcenti_carcentive2';
   			$dbserver = 'localhost';
   		
   		    $db = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
   
   
   		    if ($db->connect_errno > 0){
   		        echo "Failed to connect to MySQL: " . $db->connect_error;
   		    }
if(isset($_POST['send'])){   
    
    $nameForm=$_POST['name'];
    $emailForm=$_POST['email'];
    $phoneForm=$_POST['phone'];
    $messageForm=$_POST['message'];  
    $send=$_POST['send'];
    $date = new DateTime("now", new DateTimeZone('America/New_York') );
    $cdate = $date->format('m/d/Y h:i:s a');
    
        
        $sql = "INSERT INTO `messagecontactus`(`name`, `email`, `phone`, `message`,`createdate`) VALUES  ('$nameForm', '$emailForm', '$phoneForm','$messageForm','$cdate')";
        
        $db->query($sql); 


    
    
    
 
    $message=file_get_contents("email.html");

    $variables= array(

        "{{name}}" => $nameForm,
        "{{email}}" => $emailForm,
        "{{phone}}" => $phoneForm,
        "{{message}}" => $messageForm

        );

    foreach($variables as $key => $value){
       $message= str_replace($key, $value, $message);
     }

    $to = "sales@carcentive.com";
    $subject = "New Query";

    $headers = NULL;
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    
    $email=mail($to,$subject,$message,$headers);

    if($email == true){
 
        $sep = explode(" ",$nameForm);
   
         $LOWER = strtolower($sep['0']); 
   
         $f = ucfirst($LOWER);
       
         
                       $email_to = $_POST['email'];
                            	$subject ='CARCENTIVE';
                            	
                            	
                            	$headers = "From: Car Centive <sales@carcentive.com>\r\n";
                            	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                            	
                            	$messege = "<html>
                            		<body style='background-color: #eee; font-size: 16px;'>
                            			<div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                            			
                            				<img src='https://www.carcentive.com/images/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            				
                            				<h3>Hi $f!</h3>
                            					
                            				<p style='text-align: center;color:black;font-weight:bold'>Thank you for contacting Carcentive. A qualified team member will contact you shortly.   </p><br>    
                            			
                            				You can also contact us at <a href='tel:+18772368483'>(877) 236-8483</a> or <a href='mailto:sales@carcentive.com'>sales@carcentive.com</a> 
                            					<br><br><br>
                            				We look forward to speaking with you!<br>                                                                  
                            				<b style='text-align: center;color:green;font-weight:bold' >Carcentive Team</b> 
                            			
                            
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
                   
                   
         
         
         
         
         
         
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }
    else{
         echo "<script>alert('Something Went Wrong!');</script>";
        echo "<script>location='index.php'</script>";
    }
}
?>