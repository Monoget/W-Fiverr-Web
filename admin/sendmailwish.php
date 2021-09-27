<?php


            $dbuser = 'carcenti_carcentive_admin';
   			$dbpwd = 'atecco@123';
   			$dbname = 'carcenti_carcentive2';
   			$dbserver = 'localhost';
   		
   		    $db = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
   
   
   		    if ($db->connect_errno > 0){
   		        echo "Failed to connect to MySQL: " . $db->connect_error;
   		    }
   		    
   		    if(isset($_GET['event'])){
   		        
   		        
   		        $event = $_GET['event'];
   		        
   		        
   		        
   		        if($event == "Birthday"){
   		            
   		            
   		            
   		            
   		            
                           		            
                           		   $id=$_GET['id'];
                                    $sql = "SELECT * FROM `DealerAppo` WHERE `id`='$id'";
                                    $result = $db->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        
                                        
                                        $row = $result->fetch_assoc();
                                        $email=$row['email'];
                                        $id1 = $row['id'];
                                    
                                        $sender_mail = "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                        $subject="Happy Birthday From Carcentive";
                                      
                                        $sender_mail = "FROM: Sales@carcentive.com";
                                        $email_to = $row['email'];
                                    	$subject ='Email From Carcentive';
                                    	$userName = $row['name'];
                                    
                                    	$l = strtolower($userName);
                                     
                                        $u = ucfirst($l);
                                
                                    	$headers = "From: Car Centive <sales@carcentive.com>\r\n";
                                    	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                    	
                                    	$messege = "<html>
                                    		<body style='background-color: #eee; font-size: 16px;'>
                                    			<div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                                    			
                                    				<img src='https://www.carcentive.com/images/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                                    				
                                    				<h3>Hi $u!</h3>
                                    					
                                    				<p style='text-align: center;color:green;font-weight:bold'>Happy Birthday From Carcentive!</p><br>    
                                    			
                                    				<img src='https://carcentive.com/email_sender/pngarea.com_birthday-wishes-png-5936829.png' width='100%' height='auto' alt=''>
                                    				
                                    				</p>
                                    
                                    				<img src='https://carcentive.com/email_sender/keepTouch.jpg' width='100%' height='auto' alt=''>
                                    			</div>
                                    		</body>
                                    	</html>
                                    	";
                                    
                                    	if ( mail($email_to, $subject,$messege,$headers)){
                                    	         $sql1 = "UPDATE `DealerAppo` SET `wish status`='Send' WHERE `id`='$id1'";
                                                                        
                                                                        if ($db->query($sql1) === TRUE) {
                                                                          header("Location: https://carcentive.com/admin/wwishes.php");
                                                                        } else {
                                                                          echo "Error updating record: " . $db->error;
                                                                        }
                                    	}
                                    	else{
                                    		echo '<hr /><center> UNSUCCESSFUL... Your email was <b>NOT</b> sent. </center>';
                                    	}
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                                                                                                   
                                                                       
                                                                        
                                        
                                        
                                        
                                        
                                    }else{
                                        echo"No Email Found";
                                        
                                    }
                                    $conn->close();
                           		        
                           		            
   		            
   		            
   		            
   		            
   		      
   		            
   		        }elseif($event == "Anniversary"){
   		            
   		            
   		            
   		         	            
                           		   $id=$_GET['id'];
                                    $sql = "SELECT * FROM `DealerAppo` WHERE `id`='$id'";
                                    $result = $db->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        
                                        
                                        $row = $result->fetch_assoc();
                                        $email=$row['email'];
                                        
                                        $id1 = $row['id'];
                                        
                                       
                                            
                                            
                                            $email_to = $row['email'];
                                        	$subject ='Email From Carcentive';
                                        	$userName = $row['name'];
                                        	$l = strtolower($userName);
                                            $u = ucfirst($l);
                                        	
                                        	$headers = "From: Car Centive <sales@carcentive.com>\r\n";
                                        	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                        	
                                        	$messege = "<html>
                                        		<body style='background-color: #eee; font-size: 16px;'>
                                        			<div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                                        			
                                        				<img src='https://www.carcentive.com/images/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                                        				
                                        				<h3>Hi $u!</h3>
                                        					
                                        				<p style='text-align: center;color:green;font-weight:bold'>Happy  Anniversary From Carcentive!</p><br>    
                                        			
                                        				<img src='https://carcentive.com/email_sender/291205_happy-anniversary-png.png' width='100%' height='auto' alt=''>
                                        			
                                        				</p>
                                        
                                        				<img src='https://carcentive.com/email_sender/keepTouch.jpg' width='100%' height='auto' alt=''>
                                        			</div>
                                        		</body>
                                        	</html>
                                        	";
                                        
                                        	if ( mail($email_to, $subject,$messege,$headers)){
                                        		
                                        		                 $sql1 = "UPDATE `DealerAppo` SET `wish status`='Send' WHERE `id`='$id1'";
                                                                        
                                                                        if ($db->query($sql1) === TRUE) {
                                                                          header("Location: https://carcentive.com/admin/wwishes.php");
                                                                        } else {
                                                                          echo "Error updating record: " . $db->error;
                                                                        }
                                        	}
                                        	else{
                                        		echo '<hr /><center> UNSUCCESSFUL... Your email was <b>NOT</b> sent. </center>';
                                        	}
                                            
                                            
                                            
                                            
                                                                                                                    
                                                                       
                                                                        
                                                                                                                    
                                                                                                                    
                                                                                                                    
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                       
                                        
                                        
                                        
                                    }else{
                                        echo"No Email Found";
                                        
                                    }
                                    $conn->close();
                           		        
   		            
   		            
   		            
   		            
   		            
   		            
   		            
   		            
   		        }
   		        
   		      
   		        
          
   		        
   		        
   		        
   		    }
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	  if(isset($_GET['refferalevent'])){
   		        
   		        
   		        $event = $_GET['refferalevent'];
   		        
   		        
   		        
   		        if($event == "Birthday"){
   		            
   		            
   		            
   		            
   		            
                           		            
                           		   $id=$_GET['refferalid'];
                                    $sql = "SELECT * FROM `referral` WHERE `id`='$id'";
                                    $result = $db->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        
                                        
                                        $row = $result->fetch_assoc();
                                        $email=$row['email'];
                                        // var_dump($email);
                                        $id1 = $row['id'];
                                    
                                        $email_to = $row['email'];
                                    	$subject ='Email From Carcentive';
                                    	$userName = $row['name'];
                                    	$na = explode(" ",$userName);
                                        $aa = $na['0'];
                                    	$l = strtolower($aa);
                                           $u = ucfirst($l);
                                    	
                                    	$headers = "From: Car Centive <sales@carcentive.com>\r\n";
                                    	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                    	
                                    	$messege = "<html>
                                    		<body style='background-color: #eee; font-size: 16px;'>
                                    			<div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                                    			
                                    				<img src='https://www.carcentive.com/images/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                                    				
                                    				<h3>Hi $u!</h3>
                                    					
                                    				<p style='text-align: center;color:green;font-weight:bold'>Happy Birthday From Carcentive!</p><br>    
                                    			
                                    				<img src='https://carcentive.com/email_sender/pngarea.com_birthday-wishes-png-5936829.png' width='100%' height='auto' alt=''>
                                    			
                                    				<img src='https://carcentive.com/email_sender/keepTouch.jpg' width='100%' height='auto' alt=''>
                                    			</div>
                                    		</body>
                                    	</html>
                                    	";
                                    
                                    	if ( mail($email_to, $subject,$messege,$headers)){
                                    		                    $sql1 = "UPDATE `referral` SET `wish status`='Send' WHERE `id`='$id1'";
                                                                        
                                                                        if ($db->query($sql1) === TRUE) {
                                                                          header("Location: https://carcentive.com/admin/wwishes.php");
                                                                        } else {
                                                                          echo "Error updating record: " . $db->error;
                                                                        }
                                    	}
                                    	else{
                                    		echo '<hr /><center> UNSUCCESSFUL... Your email was <b>NOT</b> sent. </center>';
                                    	}
                                       
                                            
                                            
                                            
                                            
                                            
                                            
                                                                                                                   
                                                                       
                                                                        
                                   
                                        
                                        
                                        
                                    }else{
                                        echo"No Email Found";
                                        
                                    }
                                    $conn->close();
                           		        
                           		            
   		            
   		            
   		            
   		            
   		      
   		            
   		        }elseif($event == "Anniversary"){
   		            
   		            
   		            
   		         	            
                           		   $id=$_GET['refferalid'];
                                    $sql = "SELECT * FROM `referral` WHERE `id`='$id'";
                                    $result = $db->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        
                                        
                                        $row = $result->fetch_assoc();
                                        $email=$row['email'];
                                        
                                        $id1 = $row['id'];
                                        
                                        $email_to = $row['email'];
                                        	$subject ='Email From Carcentive';
                                        	$userName = $row['name'];
                                        	
                                        	$na = explode(" ",$userName);
                                        $aa = $na['0'];
                                        		$l = strtolower($aa);
                                        
                                           $u = ucfirst($l);
                                          
                                        	
                                        	$headers = "From: Car Centive <sales@carcentive.com>\r\n";
                                        	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                        	
                                        	$messege = "<html>
                                        		<body style='background-color: #eee; font-size: 16px;'>
                                        			<div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                                        			
                                        				<img src='https://www.carcentive.com/images/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                                        				
                                        				<h3>Hi $u!</h3>
                                        					
                                        				<p style='text-align: center;color:green;font-weight:bold'>Happy  Anniversary From Carcentive!</p><br>    
                                        			
                                        				<img src='https://carcentive.com/email_sender/291205_happy-anniversary-png.png' width='100%' height='auto' alt=''>
                                        			
                                        				</p>
                                        
                                        				<img src='https://carcentive.com/email_sender/keepTouch.jpg' width='100%' height='auto' alt=''>
                                        			</div>
                                        		</body>
                                        	</html>
                                        	";
                                        
                                        	if ( mail($email_to, $subject,$messege,$headers)){
                                        		
                                            
                                            
                                            
                                            
                                            
                                            
                                                                                                                    
                                                                        $sql1 = "UPDATE `referral` SET `wish status`='Send' WHERE `id`='$id1'";
                                                                        
                                                                        if ($db->query($sql1) === TRUE) {
                                                                          header("Location: https://carcentive.com/admin/wwishes.php");
                                                                        } else {
                                                                          echo "Error updating record: " . $db->error;
                                                                        }
                                                                        
                                        	}
                                    	else{
                                    		echo '<hr /><center> UNSUCCESSFUL... Your email was <b>NOT</b> sent. </center>';
                                    	}
                                       
                                                                                                                      
                                                                                                                    
                                                                                                                    
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                         
                                        
                                        
                                    }else{
                                        echo"No Email Found";
                                        
                                    }
                                    $conn->close();
                           		        
   		            
   		            
   		            
   		            
   		            
   		            
   		            
   		            
   		        }
   		        
   		      
   		        
          
   		        
   		        
   		        
   		    }
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   		
   	  if(isset($_GET['quotesevent'])){
   		        
   		        
   		        $event = $_GET['quotesevent'];
   		        
   		        
   		        
   		        if($event == "Birthday"){
   		            
   		            
   		            
   		            
   		            
                           		            
                           		   $id=$_GET['quotesid'];
                                    $sql = "SELECT * FROM `quote` WHERE `id`='$id'";
                                    $result = $db->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        
                                        
                                        $row = $result->fetch_assoc();
                                        $email=$row['email'];
                                        $id1 = $row['id'];
                                    
                                        
                                         $email_to = $row['email'];
                                    	$subject ='Email From Carcentive';
                                    	$userName = $row['name'];
                                    	$l = strtolower($userName);
                                           $u = ucfirst($l);
                                    	
                                    	$headers = "From: Car Centive <sales@carcentive.com>\r\n";
                                    	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                    	
                                    	$messege = "<html>
                                    		<body style='background-color: #eee; font-size: 16px;'>
                                    			<div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                                    			
                                    				<img src='https://www.carcentive.com/images/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                                    				
                                    				<h3>Hi $u!</h3>
                                    					
                                    				<p style='text-align: center;color:green;font-weight:bold'>Happy Birthday From Carcentive!</p><br>    
                                    			
                                    				<img src='https://carcentive.com/email_sender/pngarea.com_birthday-wishes-png-5936829.png' width='100%' height='auto' alt=''>
                                    			
                                    				<img src='https://carcentive.com/email_sender/keepTouch.jpg' width='100%' height='auto' alt=''>
                                    			</div>
                                    		</body>
                                    	</html>
                                    	";
                                    
                                    	if ( mail($email_to, $subject,$messege,$headers)){
                                            
                                            
                                            
                                            
                                            
                                            
                                                                                                                   
                                                                        $sql1 = "UPDATE `quote` SET `wish status`='Send' WHERE `id`='$id1'";
                                                                        
                                                                        if ($db->query($sql1) === TRUE) {
                                                                          header("Location: https://carcentive.com/admin/wwishes.php");
                                                                        } else {
                                                                          echo "Error updating record: " . $db->error;
                                                                        }
                                                                        
                                        }
                                        
                                        
                                        
                                    }else{
                                        echo"No Email Found";
                                        
                                    }
                                    $conn->close();
                           		        
                           		            
   		            
   		            
   		            
   		            
   		      
   		            
   		        }elseif($event == "Anniversary"){
   		            
   		            
   		            
   		         	            
                           		   $id=$_GET['quotesid'];
                                    $sql = "SELECT * FROM `quote` WHERE `id`='$id'";
                                    $result = $db->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        
                                        
                                        $row = $result->fetch_assoc();
                                        $email=$row['email'];
                                        
                                        $id1 = $row['id'];
                                        
                                          $email_to = $row['email'];
                                        	$subject ='Email From Carcentive';
                                        	$userName = $row['name'];
                                        	$l = strtolower($userName);
                                           $u = ucfirst($l);
                                        	
                                        	$headers = "From: Car Centive <sales@carcentive.com>\r\n";
                                        	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                        	
                                        	$messege = "<html>
                                        		<body style='background-color: #eee; font-size: 16px;'>
                                        			<div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                                        			
                                        				<img src='https://www.carcentive.com/images/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                                        				
                                        				<h3>Hi $u!</h3>
                                        					
                                        				<p style='text-align: center;color:green;font-weight:bold'>Happy  Anniversary From Carcentive!</p><br>    
                                        			
                                        				<img src='https://carcentive.com/email_sender/291205_happy-anniversary-png.png' width='100%' height='auto' alt=''>
                                        			
                                        				</p>
                                        
                                        				<img src='https://carcentive.com/email_sender/keepTouch.jpg' width='100%' height='auto' alt=''>
                                        			</div>
                                        		</body>
                                        	</html>
                                        	";
                                        
                                        	if ( mail($email_to, $subject,$messege,$headers)){
                                        		
                                            
                                            
                                            
                                            
                                            
                                            
                                                                                                                    
                                                                        $sql1 = "UPDATE `quote` SET `wish status`='Send' WHERE `id`='$id1'";
                                                                        
                                                                        if ($db->query($sql1) === TRUE) {
                                                                          header("Location: https://carcentive.com/admin/wwishes.php");
                                                                        } else {
                                                                          echo "Error updating record: " . $db->error;
                                                                        }
                                                                        
                                                                                                                    
                                                                                                                    
                                                                                                                    
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        }
                                        
                                        
                                        
                                    }else{
                                        echo"No Email Found";
                                        
                                    }
                                    $conn->close();
                           		        
   		            
   		            
   		            
   		            
   		            
   		            
   		            
   		            
   		        }
   		        
   		      
   		        
          
   		        
   		        
   		        
   		    }
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	//   if(isset($_GET['quotesevent'])){
   		        
   		        
   	// 	        $event = $_GET['quotesevent'];
   		        
   		        
   		        
   	// 	        if($event == "Birthday"){
   		            
   		            
   		            
   		            
   		            
                           		            
    //                       		   $id=$_GET['quotesid'];
    //                                 $sql = "SELECT * FROM `quote` WHERE `id`='$id'";
    //                                 $result = $db->query($sql);
                                    
    //                                 if ($result->num_rows > 0) {
                                        
                                        
    //                                     $row = $result->fetch_assoc();
    //                                     $email=$row['email'];
    //                                     $id1 = $row['id'];
                                    
                                        
    //                                     $subject="Happy Birthday From Carcentive";
    //                                     $body ="May the days ahead of you be filled with prosperity, great health and above all joy in its truest and purest form. Happy birthday!";
    //                                     $sender_mail = "FROM: Sales@carcentive.com";
    //                                     if(mail($email, $subject, $body, $sender_mail)){
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                                                                                                   
    //                                                                     $sql1 = "UPDATE `quote` SET `wish status`='Send' WHERE `id`='$id1'";
                                                                        
    //                                                                     if ($db->query($sql1) === TRUE) {
    //                                                                       header("Location: https://carcentive.com/admin/wwishes.php");
    //                                                                     } else {
    //                                                                       echo "Error updating record: " . $db->error;
    //                                                                     }
                                                                        
    //                                     }
                                        
                                        
                                        
    //                                 }else{
    //                                     echo"No Email Found";
                                        
    //                                 }
    //                                 $conn->close();
                           		        
                           		            
   		            
   		            
   		            
   		            
   		      
   		            
   	// 	        }elseif($event == "Anniversary"){
   		            
   		            
   		            
   		         	            
    //                       		   $id=$_GET['quotesid'];
    //                                 $sql = "SELECT * FROM `quote` WHERE `id`='$id'";
    //                                 $result = $db->query($sql);
                                    
    //                                 if ($result->num_rows > 0) {
                                        
                                        
    //                                     $row = $result->fetch_assoc();
    //                                     $email=$row['email'];
                                        
    //                                     $id1 = $row['id'];
                                        
    //                                     $subject="Happy Anniversery From Carcentive";
    //                                     $body ="May the days ahead of you be filled with prosperity, great health and above all joy in its truest and purest form. Happy Anniversery!";
    //                                     $sender_mail = "FROM: Sales@carcentive.com";
    //                                     if(mail($email, $subject, $body, $sender_mail)){
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                                                                                                    
    //                                                                     $sql1 = "UPDATE `quote` SET `wish status`='Send' WHERE `id`='$id1'";
                                                                        
    //                                                                     if ($db->query($sql1) === TRUE) {
    //                                                                       header("Location: https://carcentive.com/admin/wwishes.php");
    //                                                                     } else {
    //                                                                       echo "Error updating record: " . $db->error;
    //                                                                     }
                                                                        
                                                                                                                    
                                                                                                                    
                                                                                                                    
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
    //                                     }
                                        
                                        
                                        
    //                                 }else{
    //                                     echo"No Email Found";
                                        
    //                                 }
    //                                 $conn->close();
                           		        
   		            
   		            
   		            
   		            
   		            
   		            
   		            
   		            
   	// 	        }
   		        
   		      
   		        
          
   		        
   		        
   		        
   	// 	    }
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	  if(isset($_GET['cdevent'])){
   		        
   		        
   		        $event = $_GET['cdevent'];
   		        
   		       
   		        
   		        if($event == "Birthday"){
   		            
   		          
   		            
   		            
                           		            
                           		   $id=$_GET['cdid'];
                                    $sql = "SELECT * FROM `Customer_data` WHERE `id`='$id'";
                                    
                                    $result = $db->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                  
   		            
                                        
                                        $row = $result->fetch_assoc();
                                        $email=$row['Eamil'];
                                        $id1 = $row['id'];
                                    
                                        
                                          
                                         $email_to = $row['Eamil'];
                                    	$subject ='Email From Carcentive';
                                    	$userName = $row['FirstName'];
                                    	$l = strtolower($userName);
                                           $u = ucfirst($l);
                                    	
                                    	$headers = "From: Car Centive <sales@carcentive.com>\r\n";
                                    	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                    	
                                    	$messege = "<html>
                                    		<body style='background-color: #eee; font-size: 16px;'>
                                    			<div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                                    			
                                    				<img src='https://www.carcentive.com/images/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                                    				
                                    				<h3>Hi $u!</h3>
                                    					
                                    				<p style='text-align: center;color:green;font-weight:bold'>Happy Birthday From Carcentive!</p><br>    
                                    			
                                    				<img src='https://carcentive.com/email_sender/pngarea.com_birthday-wishes-png-5936829.png' width='100%' height='auto' alt=''>
                                    			
                                    				<img src='https://carcentive.com/email_sender/keepTouch.jpg' width='100%' height='auto' alt=''>
                                    			</div>
                                    		</body>
                                    	</html>
                                    	";
                                    
                                    	if ( mail($email_to, $subject,$messege,$headers)){
                                            
                                            
                                            
                                                                                                                   
                                                                        $sql1 = "UPDATE `Customer_data` SET `wish status`='Send' WHERE `id`='$id1'";
                                                                        
                                                                        if ($db->query($sql1) === TRUE) {
                                                                          header("Location: https://carcentive.com/admin/wwishes.php");
                                                                        } else {
                                                                          echo "Error updating record: " . $db->error;
                                                                        }
                                                                        
                                        }
                                        
                                        
                                        
                                    }else{
                                        echo"No Email Found";
                                        
                                    }
                                    $conn->close();
                           		        
                           		            
   		            
   		            
   		            
   		            
   		      
   		            
   		        }elseif($event == "Anniversary"){
   		            
   		            
   		            
   		         	            
                           		   $id=$_GET['cdid'];
                                    $sql = "SELECT * FROM `Customer_data` WHERE `id`='$id'";
                                    $result = $db->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        
                                        
                                        $row = $result->fetch_assoc();
                                        $email=$row['Eamil'];
                                        
                                        $id1 = $row['id'];
                                        
                                           $email_to = $row['Eamil'];
                                        	$subject ='Email From Carcentive';
                                        	$userName = $row['FirstName'];
                                        	$l = strtolower($userName);
                                           $u = ucfirst($l);
                                        	
                                        	$headers = "From: Car Centive <sales@carcentive.com>\r\n";
                                        	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                        	
                                        	$messege = "<html>
                                        		<body style='background-color: #eee; font-size: 16px;'>
                                        			<div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                                        			
                                        				<img src='https://www.carcentive.com/images/logo.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                                        				
                                        				<h3>Hi $u!</h3>
                                        					
                                        				<p style='text-align: center;color:green;font-weight:bold'>Happy  Anniversary From Carcentive!</p><br>    
                                        			
                                        				<img src='https://carcentive.com/email_sender/291205_happy-anniversary-png.png' width='100%' height='auto' alt=''>
                                        			
                                        				</p>
                                        
                                        				<img src='https://carcentive.com/email_sender/keepTouch.jpg' width='100%' height='auto' alt=''>
                                        			</div>
                                        		</body>
                                        	</html>
                                        	";
                                        
                                        	if ( mail($email_to, $subject,$messege,$headers)){
                                        		
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                                                                                                    
                                                                        $sql1 = "UPDATE `Customer_data` SET `wish status`='Send' WHERE `id`='$id1'";
                                                                        
                                                                        if ($db->query($sql1) === TRUE) {
                                                                          header("Location: https://carcentive.com/admin/wwishes.php");
                                                                        } else {
                                                                          echo "Error updating record: " . $db->error;
                                                                        }
                                                                        
                                                                                                                    
                                                                                                                    
                                                                                                                    
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        }
                                        
                                        
                                        
                                    }else{
                                        echo"No Email Found";
                                        
                                    }
                                    $conn->close();
                           		        
   		            
   		            
   		            
   		            
   		            
   		            
   		            
   		            
   		        }
   		        
   		      
   		        
          
   		        
   		        
   		        
   		    }
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	if(isset($_POST['Allmail'])){
   	    
   	    
   	    
   	    
   	       $sql = "SELECT * FROM `DealerAppo`";
           $result = $db->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                
                
                
                
                
                                        $email=$row['email'];
                                        
                                   
                                        
                                        $subject=$_POST['Subject'];
                                        $body =$_POST['message'];
                                        $sender_mail = "FROM: Sales@carcentive.com";
                                        mail($email, $subject, $body, $sender_mail);
                                            

                
            }}        
            
            
            
            
            
            
             
   	    
   	       $sql1 = "SELECT * FROM `quote`";
           $result1 = $db->query($sql1);
            if ($result1->num_rows > 0) {
            while($row1 = $result1->fetch_assoc()){
                
                
                
                
                
                                        $email=$row1['email'];
                                        
                                   
                                        
                                        $subject=$_POST['Subject'];
                                        $body =$_POST['message'];
                                        $sender_mail = "FROM: Sales@carcentive.com";
                                        mail($email, $subject, $body, $sender_mail);
                                            

                
            }}  
            
            
            
            
            
            
            
            
                
   	    
   	       $sql2 = "SELECT * FROM `referral`";
           $result2 = $db->query($sql1);
            if ($result2->num_rows > 0) {
            while($row2 = $result2->fetch_assoc()){
                
                
                
                
                
                                        $email=$row2['email'];
                                        
                                   
                                        
                                        $subject=$_POST['Subject'];
                                        $body =$_POST['message'];
                                        $sender_mail = "FROM: Sales@carcentive.com";
                                        mail($email, $subject, $body, $sender_mail);
                                            

                
            }}  
            
            
            
            
             header("Location: https://carcentive.com/admin/wwishes.php");
            
                                        
  
   	   
   	}


?>