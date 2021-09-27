<?php


 $dbuser = 'carcenti_carcentive_admin';
   			$dbpwd = 'atecco@123';
   			$dbname = 'carcenti_carcentive2';
   			$dbserver = 'localhost';
   		
   		    $db = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
   
   
   		    if ($db->connect_errno > 0){
   		        echo "Failed to connect to MySQL: " . $db->connect_error;
   		    }
   		  







                  
  
if (isset($_POST['Customerdata'])) {
    
  
	

	            $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['Email'];
                $phone = $_POST['phone'];
                $Address = $_POST['Address'];
                $Birthday = $_POST['Birthday'];
                $Anivery = $_POST['Anivery'];
                $text =  $_POST['tect'];
                
                
                $dateeee = new DateTime("now", new DateTimeZone('America/New_York') );
                $createdate = $dateeee->format('m/d/Y h:i:s a');
                                
                
                
                if ($_FILES['file']['name'] != NULL) {
                $file          = rand(1000, 100000) . "-" . $_FILES['file']['name'];
            	$file_loc      = $_FILES['file']['tmp_name'];
            	$file_size     = $_FILES['file']['size'];
            	$file_type     = $_FILES['file']['type'];
            	$folder        = "../images/testimonial/";
            	$new_size      = $file_size / 1024;
            	$new_file_name = strtolower($file);
            	$final_filee    = str_replace(' ', '-', $new_file_name);
                $final_file ="images/testimonial/".$final_filee;
            	  if (move_uploaded_file($file_loc, $folder . $final_filee)) {
            	      
            	      $sql = "INSERT INTO `Customer_data`(`FirstName`, `LastName`, `Eamil`, `Phone`, `Image`, `Address`, `Birthday`, `AnniverseryDay`,`description`,`createdate`) VALUES  
            	      ('$fname','$lname','$email','$phone','$final_file','$Address','$Birthday','$Anivery','$text','$createdate')";
                
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/customer_data.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                      
                	}
                
                         echo "not submit";
                    
                }
                else{
                    
                     $sql = "INSERT INTO `Customer_data`(`FirstName`, `LastName`, `Eamil`, `Phone`, `Address`, `Birthday`, `AnniverseryDay`,`description`,`createdate`) VALUES  
            	      ('$fname','$lname','$email','$phone','$Address','$Birthday','$Anivery','$text','$createdate')";
                
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/customer_data.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                    
                    
                 
        }
    
}    





if (isset($_POST['edit_Customer'])) {
    
  

$id=$_POST['id'];
	           $fname = $_POST['fname'];
               $lname = $_POST['lname'];
               $email = $_POST['Email'];
                $phone = $_POST['phone'];
               $Address = $_POST['Address'];
               $Birthday = $_POST['Birthday'];
               $Anivery = $_POST['Anivery'];
               $text =  $_POST['tect'];
                
                
                
                
                if ($_FILES['file']['name'] != NULL) {
                $file          = rand(1000, 100000) . "-" . $_FILES['file']['name'];
            	$file_loc      = $_FILES['file']['tmp_name'];
            	$file_size     = $_FILES['file']['size'];
            	$file_type     = $_FILES['file']['type'];
            	$folder        = "../images/testimonial/";
            	$new_size      = $file_size / 1024;
            	$new_file_name = strtolower($file);
            	$final_filee    = str_replace(' ', '-', $new_file_name);
                $final_file ="images/testimonial/".$final_filee;
                
            	  if (move_uploaded_file($file_loc, $folder . $final_filee)) {
            	      
            	      $sql = "UPDATE `Customer_data` SET `FirstName`='$fname',`LastName`='$lname'
            	      ,`Eamil`='$email',`Phone`='$phone',`Image`='$final_file',`Address`='$Address',`Birthday`='$Birthday',`AnniverseryDay`='$Anivery', `description`='$text' WHERE `id`='$id'";
                
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/customer_data.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                      
                	}
                
                         echo "not submit";
                    
                }
                else{
                    $sql = " SELECT `Image` FROM `Customer_data` WHERE `id`='$id'";
                    $result = $db->query($sql);
                    
                    if ($result->num_rows > 0) {
                     $row = $result->fetch_assoc();
                   
                    $final_file=$row['Image'];
                    
                     $sql = "UPDATE `Customer_data` SET `FirstName`='$fname',`LastName`='$lname'
            	      ,`Eamil`='$email',`Phone`='$phone',`Image`='$final_file',`Address`='$Address',`Birthday`='$Birthday',`AnniverseryDay`='$Anivery', `description`='$text' WHERE `id`='$id'";
                
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/customer_data.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                    
                    
                    }
                    
                    
                    
                    
                          
                
        }
    
    
    
}    





if (isset($_POST['delete_home_testimonial'])) {
    
  

$id=$_POST['delete_id'];
	          
            	      
            	      $sql = "DELETE FROM `Customer_data` WHERE id ='$id'";
            	     
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/customer_data.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                   
    
    
}    


if (isset($_GET['Deleteid'])) {
    
  

 $id=$_GET['Deleteid'];
	          
            	      
            	      $sql = "DELETE FROM `DealerAppo` WHERE id ='$id'";
            	     
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/customer_data.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                   
    
    
}  


if (isset($_GET['conDeleteid'])) {
    
  

 $id=$_GET['conDeleteid'];
	          
            	      
            	      $sql = "DELETE FROM `quote` WHERE id ='$id'";
            	     
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/customer_data.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                   
    
    
}   





if (isset($_GET['Deleterefferal'])) {
    
  

 $id=$_GET['Deleterefferal'];
	          
            	      
            	      $sql = "DELETE FROM `referral` WHERE id ='$id'";
            	     
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/ref.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                   
    
    
}  


if (isset($_POST['updateddelearship'])) {
    
  

 $id =  $_POST['id'];
 $fname =  $_POST['name'];
 $lname =  $_POST['lname'];
 $email =  $_POST['email'];
 $phone =  $_POST['phone'];
 $des =  $_POST['reason'];
 $date = $_POST['datetime'];
 
 $TSEP = explode("T",$date);
 $dtewithoutt = $TSEP['0']." ".$TSEP['1'];
$newDateTime = date('d-m-Y h:i A', strtotime($dtewithoutt));
 
 
  $bdy =  $_POST['bdy'];
  $BIRTHDAY = str_replace("T"," ",$bdy);
 
 $Ani =  $_POST['Aniversry'];
	          $ANIVERSERY = str_replace("T"," ",$Ani);
            	      
            	      $sql = "UPDATE `DealerAppo` SET `name`='$fname',`lname`='$lname',`email`='$email',
            	      `phone`='$phone',`birthday`='$BIRTHDAY',`Aniversery`='$ANIVERSERY',`Reason`='$des',`client`='$newDateTime'
            	       WHERE id ='$id'";
            	     
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/customer_data.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                   
    
    
}    










if (isset($_POST['conupdatedata'])) {
    
  

 $id =  $_GET['id'];
 $fname =  $_POST['name'];
 $lname =  $_POST['lname'];
 $dealership =  $_POST['dealership'];
 $email =  $_POST['email'];
 $phone =  $_POST['phone'];
 $time =  $_POST['time'];

 $date = explode("T",$time);
 
 $currentDateTime = $date['0']." ".$date['1'];
$newDateTime = date('d-m-Y h:i A', strtotime($currentDateTime));
 
 
 
 
 
 
 $amount =  $_POST['amount'];
 $budget =  $_POST['budget'];
  $bdy =  $_POST['birthday'];
  $notes = $_POST['note'];
  $BIRTHDAY = str_replace("T"," ",$bdy);
 
 $Ani =  $_POST['Aniversry'];

	          $ANIVERSERY = str_replace("T"," ",$Ani);
            	      
            	      $sql = "UPDATE `quote` SET `name`='$fname',`lname`='$lname',`email`='$email',`phone`='$phone',`time`='$newDateTime',
            	      `budget`='$budget',`amount`='$amount',`dealership`='$dealership'
            	      ,`birthday`='$BIRTHDAY',`aniversery`='$Ani',`notes`='$notes'
            	       WHERE id ='$id'";
            	    
            	     
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/customer_data.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                   
    
    
}    







if (isset($_POST['Updaterefferal'])) {
    
  

 $id =  $_GET['Updaterefferal'];
 
 $ref_name=  $_POST['ref_name'];
 $ref_email =  $_POST['ref_email'];
 $ref_phone =  $_POST['ref_phone'];
 
 $pr_name =  $_POST['pr_name'];
 $pr_email =  $_POST['pr_email'];
 $pr_phone =  $_POST['pr_phone'];

 
 $message =  $_POST['message'];
  $bdy =  $_POST['birthday'];
  $BIRTHDAY = str_replace("T"," ",$bdy);
 
 $Ani =  $_POST['Aniversery'];
	          $ANIVERSERY = str_replace("T"," ",$Ani);
            	      
            	      $sql = "UPDATE `referral` SET `ref_name`='$ref_name',`ref_email`='$ref_email',`ref_phone`='$ref_phone',
            	      `name`='$pr_name',`email`='$pr_email',`phone`='$pr_phone',`message`='$message',`birthday`='$BIRTHDAY',
            	      `Aniversery`='$ANIVERSERY' WHERE `id`='$id'";
            	    
            	     
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/ref.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                   
    
    
}  










if (isset($_POST['add_Sell_Product'])) {
    

    
  
	            $name = $_POST['name'];
                $email = $_POST['email'];
                $vin = $_POST['vin'];
                $car_condition = $_POST['car_condition'];
                $cylinder = $_POST['cylinder'];
                $drive = $_POST['drive'];
                $fuel = $_POST['fuel'];
                $paint_color = $_POST['paint_color'];
                $title_status = $_POST['title_status'];
                $transmission = $_POST['transmission'];
                $make = $_POST['make'];
                $model = $_POST['model'];
                $year = $_POST['year'];
                $body_type = $_POST['body_type'];
                $vehicle_status = $_POST['vehicle_status'];
                $mileage = $_POST['mileage'];
                $Amount = $_POST['Amount'];
                $phone = $_POST['phone'];
                
              
            	      
            	      $sql = "INSERT INTO `car_sell`(`year`, `name`, `email`, `phone`, `make`, `model`, `body_type`, `vehicle_status`,
            	      `mileage`, `vin`, `car_condition`, `cylinder`, `drive`, `fuel`, `paint_color`, `transmission`, `amount`) VALUES (
            	          '$year','$name','$email','$phone','$make','$model','$body_type','$vehicle_status','$mileage','$vin'
            	          ,'$car_condition','$cylinder','$drive','$fuel','$paint_color','$transmission','$Amount')";
                
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/car_information.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                 
                    
               
        }
    






if (isset($_POST['Update_Sell_Product'])) {
    

    
                $id = $_POST['id'];
	            $name = $_POST['name'];
                $email = $_POST['email'];
                $vin = $_POST['vin'];
                $car_condition = $_POST['car_condition'];
                $cylinder = $_POST['cylinder'];
                $drive = $_POST['drive'];
                $fuel = $_POST['fuel'];
                $paint_color = $_POST['paint_color'];
                $title_status = $_POST['title_status'];
                $transmission = $_POST['transmission'];
                $make = $_POST['make'];
                $model = $_POST['model'];
                $year = $_POST['year'];
                $body_type = $_POST['body_type'];
                $vehicle_status = $_POST['vehicle_status'];
                $mileage = $_POST['mileage'];
                $Amount = $_POST['Amount'];
                $phone = $_POST['phone'];
                
              
            	      
            	      $sql = "UPDATE `car_sell` SET `year`='$year',`name`='$name',`email`='$email',`phone`='$phone',`make`='$make',`model`='$model',
            	      `body_type`='$body_type',`vehicle_status`='$vehicle_status',`mileage`='$mileage',`vin`='$vin',`car_condition`='$car_condition',
            	      `cylinder`='$cylinder',`drive`='$drive',`fuel`='$fuel',`paint_color`='$paint_color',`transmission`='$transmission',`amount`='$Amount' WHERE id='$id'";
                
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/car_information.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                 
                    
               
        }
    




?>