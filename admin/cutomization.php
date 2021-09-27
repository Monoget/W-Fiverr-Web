<?php
            $dbuser = 'carcenti_carcentive_admin';
   			$dbpwd = 'atecco@123';
   			$dbname = 'carcenti_carcentive2';
   			$dbserver = 'localhost';
   		
   		    $db = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
   
   
   		    if ($db->connect_errno > 0){
   		        echo "Failed to connect to MySQL: " . $db->connect_error;
   		    }
   		  
   		  
   		    
   		    
   		   
   		   
   		   
   		   
            if(isset($_POST['MonTime'])){
                $stime = $_POST['otm'];
                $etime = $_POST['ctm'];
                
                
                $sql = "INSERT INTO `MondayTimming`(`StartTimming`, `EndTimming`) VALUES ('$stime','$etime')";
               
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wccontactus.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }  
            
            
             if(isset($_POST['TueTime'])){
                
                $stime = $_POST['ott'];
                $etime = $_POST['ctt'];
                $sql = "INSERT INTO `Tuesday Timming`(`StartTimming`, `EndTimming`) VALUES ('$stime','$etime')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wccontactus.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            } 
            
            if(isset($_POST['WedTime'])){
                
                $stime = $_POST['owt'];
                $etime = $_POST['cwt'];
                $sql = "INSERT INTO `WednesdayTimming`(`StartTimming`, `EndTimming`) VALUES ('$stime','$etime')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wccontactus.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            } 
            
            if(isset($_POST['ThuTime'])){
                
                $stime = $_POST['otht'];
                $etime = $_POST['ctht'];
                $sql = "INSERT INTO `ThursdayTImming`(`StartTimming`, `EndTimming`) VALUES ('$stime','$etime')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wccontactus.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            } 
            
            if(isset($_POST['FriTime'])){
                
                $stime = $_POST['oft'];
                $etime = $_POST['cft'];
                $sql = "INSERT INTO `FridayTImming`(`StartTimming`, `EndTimming`) VALUES ('$stime','$etime')";
                
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wccontactus.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            } 
            
            if(isset($_POST['SatTime'])){
                
                $stime = $_POST['ost'];
                $etime = $_POST['cst'];
                $sql = "INSERT INTO `SaturdayTimming`(`StartTimming`, `EndTimming`) VALUES ('$stime','$etime')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wccontactus.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            } 
            
            
            
            
            
            if(isset($_POST['email'])){
                
                $data = $_POST['data'];
                $sql = "INSERT INTO `email`(`data`) VALUES ('$data')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wccontactus.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            } 
            
            
            
            if(isset($_POST['address'])){
                
                $data = $_POST['data'];
                $sql = "INSERT INTO `address`(`data`) VALUES ('$data')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wccontactus.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            } 
            
            
            
            if(isset($_POST['phone'])){
                
                $data = $_POST['data'];
                $sql = "INSERT INTO `phone`(`data`) VALUES ('$data')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wccontactus.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            } 
            
            
            
            if(isset($_POST['fax'])){
                
                $data = $_POST['data'];
                $sql = "INSERT INTO `fax`(`data`) VALUES ('$data')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wccontactus.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            } 
            
            
            
             if(isset($_POST['OURSERVICESDESSUBMIT'])){
                
                $data = $_POST['data'];
                $change = str_replace("'","~",$data);
                $sql = "INSERT INTO `Services`( `Message`) VALUES ('$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcservice.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }    
            
            if(isset($_POST['sub1'])){
                
                $stime = $_POST['data'];
                $etime = $_POST['des'];
                $change = str_replace("'","~",$etime);
                $sql = "INSERT INTO `ServiceCard1`(`title`, `msg`) VALUES ('$stime','$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcservice.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            if(isset($_POST['sub2'])){
                
                $stime = $_POST['data'];
                $etime = $_POST['des'];
                $change = str_replace("'","~",$etime);
                $sql = "INSERT INTO `ServiceCard2`( `title`, `msg`) VALUES ('$stime','$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcservice.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            if(isset($_POST['sub3'])){
                
                $stime = $_POST['data'];
                $etime = $_POST['des'];
                $change = str_replace("'","~",$etime);
                $sql = "INSERT INTO `ServiceCard3`(`title`, `msg`) VALUES ('$stime','$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcservice.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            if(isset($_POST['sub4'])){
                
                $stime = $_POST['data'];
                $etime = $_POST['des'];
                $change = str_replace("'","~",$etime);
                $sql = "INSERT INTO `ServiceCard4`(`title`, `msg`) VALUES ('$stime','$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcservice.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            
            if(isset($_POST['sub5'])){
                
                $stime = $_POST['data'];
                $etime = $_POST['des'];
                $change = str_replace("'","~",$etime);
                $sql = "INSERT INTO `ServiceCard5`(`title`, `msg`) VALUES ('$stime','$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcservice.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            if(isset($_POST['sub6'])){
                
                $stime = $_POST['data'];
                $etime = $_POST['des'];
                $change = str_replace("'","~",$etime);
                $sql = "INSERT INTO `ServiceCard6`(`title`, `msg`) VALUES ('$stime','$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcservice.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            if(isset($_POST['sub7'])){
                
                $stime = $_POST['data'];
                $etime = $_POST['des'];
                $change = str_replace("'","~",$etime);
                $sql = "INSERT INTO `ServiceCard7`(`title`, `msg`) VALUES ('$stime','$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcservice.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            if(isset($_POST['carcard1'])){
                
                $stime = $_POST['title'];
                $etime = $_POST['data'];
                $change = str_replace("'","~",$etime);
                $sql = "INSERT INTO `carcard1`(`title`, `msg`) VALUES ('$stime','$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcservice.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            if(isset($_POST['carcard2'])){
                
                $stime = $_POST['title'];
                $etime = $_POST['data'];
                $change = str_replace("'","~",$etime);
                $sql = "INSERT INTO `carcard2`(`title`, `msg`) VALUES ('$stime','$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcservice.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            
            if(isset($_POST['carcard3'])){
                
                $stime = $_POST['title'];
                $etime = $_POST['data'];
                $change = str_replace("'","~",$etime);
                $sql = "INSERT INTO `carcard3`(`title`, `msg`) VALUES ('$stime','$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcservice.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            
           
             if(isset($_POST['wcaboutdescription'])){
                
                $stime = $_POST['title'];
                $ptime = $_POST['subline'];
                $etime = $_POST['des'];
                $change = str_replace("'","~",$etime);
                $sql = "INSERT INTO `about`(`title`, `subline`, `msg`) VALUES ('$stime','$ptime','$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcabout.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            
            if(isset($_POST['PRICENEGOTIATION'])){
               
                $stime = $_POST['mh'];
                $ptime = $_POST['sh'];
                $subline = str_replace("'","~",$ptime);
                $des = $_POST['des'];
                $str_replace = str_replace("'","~",$des);
                $sql = "INSERT INTO `homemain`(`title`, `subline`, `msg`) VALUES ('$stime','$subline','$str_replace')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wchome.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            if(isset($_POST['ourmessiondessubmit'])){
                
                
                $etime = $_POST['des'];
                $change = str_replace("'","~",$etime);
                $sql = "INSERT INTO `ourmission`(`des`) VALUES('$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcabout.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            
            if(isset($_POST['ceo'])){
                
                
                $etime = $_POST['des'];
                $change = str_replace("'","~",$etime);
                $sql = "INSERT INTO `ceo`(`des`) VALUES ('$change')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcabout.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            
             if(isset($_POST['AWARDSSUBMIT'])){
                
                
                $etime = $_POST['des'];
                $sql = "INSERT INTO `AWARDSSUBMIT`(`des`) VALUES ('$etime')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcabout.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            if(isset($_POST['VEHICLESINSTOCKSUBMIT'])){
                
                
                $etime = $_POST['des'];
                $sql = "INSERT INTO `VEHICLESINSTOCKSUBMIT`(`des`) VALUES  ('$etime')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcabout.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            if(isset($_POST['DEALERREVIEWSSUBMIT'])){
                
                
                $etime = $_POST['des'];
                $sql = "INSERT INTO `DEALERREVIEWSSUBMIT`(`des`) VALUES  ('$etime')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcabout.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            if(isset($_POST['HAPPYCUSTOMERSSUBMIT'])){
                
                
                $etime = $_POST['des'];
                $sql = "INSERT INTO `HAPPYCUSTOMERSSUBMIT`(`des`) VALUES ('$etime')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wcabout.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            if(isset($_POST['instalink'])){
                
                
                $etime = $_POST['insta'];
                $sql = "INSERT INTO `Instalink`(`link`) VALUES ('$etime')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wchome.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
             if(isset($_POST['twitterlink'])){
                
                
                $etime = $_POST['twitter'];
                $sql = "INSERT INTO `twiiterlink`(`link`) VALUES ('$etime')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wchome.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
             if(isset($_POST['fblink'])){
                
                
                $etime = $_POST['fb'];
                $sql = "INSERT INTO `fblink`(`link`) VALUES ('$etime')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wchome.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
            
            
            
if (isset($_POST['wcrequestconsultation'])) {
	

	            $data = $_POST['mh'];
                $data1 = $_POST['sh1'];
                $data2 = $_POST['sh2'];
                $data3 = $_POST['sh3'];
                $data4 = $_POST['sh4'];
                $message   = $db->real_escape_string($_POST['des']);
                $change = str_replace("'","~",$message);
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
            	      
            	      $sql = "INSERT INTO `RequestAConsultation`(`Main Heading`, `Sub H1`, `Sub H2`, `Sub H3`, `Sub H4`, `image`, `Message`)
            	      VALUES  ('$data','$data1','$data2','$data3','$data4','$final_file','$change')";
                
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/wcrequestconsultation.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                      
                   echo "<script>location='order.php?status=1'</script>";
                	}
                
                         echo "not submit";
                    
                }
                else{
                          
                 echo"file not upload";
        }
    
}







            
if (isset($_POST['PRICENEGOTIATIONSAVE'])) {
	

	       
                $message   = $db->real_escape_string($_POST['des']);
                $change = str_replace("'","~",$message);
    
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
            	      
            	      $sql = "INSERT INTO `ReferralProgram`(`Image`, `Message`) VALUES ('$final_file','$change')";
                
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/wcreferralprogram.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                      
                   echo "<script>location='order.php?status=1'</script>";
                	}
                
                         echo "not submit";
                    
                }
                else{
                          
                 echo"file not upload";
        }
    
}

                           
  
if (isset($_POST['carforsale'])) {
	

	            $data = $_POST['Mh'];
                $data1 = $_POST['sh1'];
                $data2 = $_POST['sh2'];
                $data3 = $_POST['sh3'];
                $message   = $db->real_escape_string($_POST['des']);
                $change = str_replace("'","~",$message);
                
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
            	      
            	      $sql = "INSERT INTO `CarForSale`(`Main Heading`, `Sub H1`, `Sub H2`, `Sub H3`, `Image`, `Message`) VALUES 
            	      ('$data','$data1','$data2','$data3','$final_file','$change')";
                
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/wccallforsale.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                      
                   echo "<script>location='order.php?status=1'</script>";
                	}
                
                         echo "not submit";
                    
                }
                else{
                          
                 echo"file not upload";
        }
    
}   



                   
  
if (isset($_POST['h2r'])) {
	

	            $data = $_POST['mh'];
                $data1 = $_POST['sh'];
                $message   = $db->real_escape_string($_POST['des']);
                
                $replace = str_replace("'","~",$message);
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
            	      
            	      $sql = "INSERT INTO `mainpagecar`(`mh`, `sh`, `image`, `msg`) VALUES  
            	      ('$data','$data1','$final_file','$replace')";
                
                            if ($db->query($sql) === TRUE) {
                              header('Location: https://www.carcentive.com/admin/wchome.php');
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                    
                      
                	}
                
                         echo "not submit";
                    
                }
                else{
                          
                 echo"file not upload";
        }
    
}            


 if(isset($_POST['PRICENEGOTIATIONSAVE1'])){
               
                $stime = $_POST['mh'];
                $ptime = $_POST['sh'];
                $replace = str_replace("'","~",$ptime);
                
                $sql = "INSERT INTO `maincard1`(`title`, `msg`) VALUES ('$stime','$replace')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wchome.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }

 if(isset($_POST['ACLEARANDTRANSPARENTPROCESSSAVE2'])){
               
                $stime = $_POST['mh'];
                $ptime = $_POST['sh'];
                $replace = str_replace("'","~",$ptime);
                $sql = "INSERT INTO `maincard2`(`title`, `msg`) VALUES('$stime','$replace')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wchome.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }

 if(isset($_POST['DEALERSHIPEXPERIENCESAVE3'])){
               
                $stime = $_POST['mh'];
                $ptime = $_POST['sh'];
                $replace = str_replace("'","~",$ptime);
                $sql = "INSERT INTO `maincard3`(`title`, `msg`) VALUES ('$stime','$replace')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wchome.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }

 if(isset($_POST['SERVINGCUSTOMERSNATIONWIDESAVE4'])){
               
                $stime = $_POST['mh'];
                $ptime = $_POST['sh'];
                $replace = str_replace("'","~",$ptime);
                
                $sql = "INSERT INTO `maincard4`(`title`, `msg`) VALUES ('$stime','$replace')";
                
                if ($db->query($sql) === TRUE) {
                  header('Location: https://www.carcentive.com/admin/wchome.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
            }
            
if(isset($_POST['TimeForDelarship'])){
    
    $from = $_POST['from'];

    $sql = "INSERT INTO `DealershipAvailablity`(`From_A`) VALUES ('$from')";
    
    if ($db->query($sql) === TRUE) {
     header('Location: https://www.carcentive.com/admin/SchedulingAppoinment.php?Dealership=');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
      
    }

            
if(isset($_POST['TimeForCon'])){
    
    $from = $_POST['from'];
   
    $sql = "INSERT INTO `consultationAvailablity`(`From_A`) VALUES ('$from')";
    
    if ($db->query($sql) === TRUE) {
      header('Location: https://www.carcentive.com/admin/SchedulingAppoinment.php?Consultation=');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
      
    }
    
    
    
    
if(isset($_GET['EmailClient'])){
                $user_email=$_GET['EmailClient'];
                $user_id=$_GET['id'];
                $subject="About Your Consultation Appointment";
                $body ="Hi, 
                Your Appointment time is approved kindly visite at your time ";
                $sender_mail = "FROM: Sales@carcentive.com";
                if(mail($user_email, $subject, $body, $sender_mail)){
                    $sql = "UPDATE `quote` SET `Responce`='RESPONCE SENDED' WHERE `id`='$user_id'";

                    if ($db->query($sql) === TRUE) {
                      header("Location: https://www.carcentive.com/admin/SchedulingAppoinment.php?Consultation=");
                    } else {
                      echo "Error updating record: " . $conn->error;
                    }
                                        
                    
                    
                    
                    
                }
    
}

if(isset($_GET['EmailClient1'])){
                $user_email=$_GET['EmailClient1'];
                $user_id=$_GET['id'];
                $subject="About Your Dealership Appointment";
                $body ="Hi, 
                Your Appointment time is approved kindly visite at your time ";
                $sender_mail = "FROM: Sales@carcentive.com";
                if(mail($user_email, $subject, $body, $sender_mail)){
                     $sql = "UPDATE `DealerAppo` SET `Responce`='RESPONCE SENDED' WHERE `id`='$user_id'";

                    if ($db->query($sql) === TRUE) {
                    header("Location: https://www.carcentive.com/admin/SchedulingAppoinment.php?Dealership=");
                    } else {
                      echo "Error updating record: " . $conn->error;
                    }
                           
                }
    
}



 
?>
