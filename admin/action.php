<?php
session_start();
require_once ("database.php");

//***********************************************      Admin login section     ***********************************************//
// first check if login to database
if (isset($_POST['login']))
{
	$email    = $_POST['username'];
	$password = $_POST['password'];

	$query    = "SELECT * from login where username='$email' && password='$password' && AccountStatus ='Approve'";
	$rec      = db::getRecord($query);

   
    
	if ($rec != NULL)
	{
		$_SESSION["login1"] = $_POST['username'];
		echo "<script>location='dashboard.php'</script>";
	}
	else
	{
		echo "<script>location='index.php?status=1'</script>";
	}
}

//Logout
if (isset($_GET['logout']))
{
    session_start();
    session_unset();
	session_destroy();
	echo "<script>location='index.php?status=1'</script>";

}

//***********************************************       password section     ***********************************************//
// change password of the account
if (isset($_POST['change_pass'])) {
	
	$cpass            = $_POST['cpass'];

	$password         = $_POST['npass'];
	$confirm_password = $_POST['npass_confirm'];

	$query            = "SELECT * from login where username='admin' && password='$cpass'";
	$rec              = db::getRecord($query);

	    if ($rec != NULL) {
		if ($password == $confirm_password) {
			$query            = "UPDATE login SET password='$password' where username='admin'";

			$run              = db::query($query);

			echo "<script>location='change_pass.php?status=3'</script>";
		}
		else {
			echo "<script>location='change_pass.php?status=2'</script>";
		}
	}
	else {
		echo "<script>location='change_pass.php?status=1'</script>";
	}
}
//***********************************************       add  testimonial section   ****************************************//

if (isset($_POST['submit'])) {
	
	$db            = db::open();
	$name         = $_POST['name'];
	$make       = $_POST['make'];
	$model       = $_POST['model'];
	$year       = $_POST['year'];
    $message   = $db->real_escape_string($_POST['message']);
    
    if ($_FILES['file']['name'] != NULL) {
    $file          = rand(1000, 100000) . "-" . $_FILES['file']['name'];
	$file_loc      = $_FILES['file']['tmp_name'];
	$file_size     = $_FILES['file']['size'];
	$file_type     = $_FILES['file']['type'];
	$folder        = "images/testimonial/";
	$new_size      = $file_size / 1024;
	$new_file_name = strtolower($file);
	$final_file    = str_replace(' ', '-', $new_file_name);

	  if (move_uploaded_file($file_loc, $folder . $final_file)) {
    
        $query         = "INSERT into testimonial(name,make,model,year,message,image_name,image_type) VALUES('$name','$make','$model','$year','$message','$final_file','$file_type')";
		$insert        = db::query($query);
          
       echo "<script>location='order.php?status=1'</script>";
	}

         echo "<script>location='order.php?status=2'</script>";
    
  }
  else{
      
       $query         = "INSERT into testimonial(name,make,model,year,message) VALUES('$name','$make','$model','$year','$message')";
		$insert        = db::query($query);
          
       echo "<script>location='order.php?status=1'</script>";
  }
}
//***********************************************       edit  testimonial section   ****************************************//
if (isset($_POST['edit_testimonial'])) {
	
	$id          = $_POST['id'];
	$db          = db::open();
	$name       = $db->real_escape_string($_POST['name']);
    $make       = $_POST['make'];
	$model       = $_POST['model'];
	$year       = $_POST['year'];
	$message = $db->real_escape_string($_POST['message']);
    
    if ($_FILES['file']['name'] != NULL) {
		
		$file          = rand(1000, 100000) . "-" . $_FILES['file']['name'];
		$file_loc      = $_FILES['file']['tmp_name'];
		$file_size     = $_FILES['file']['size'];
		$file_type     = $_FILES['file']['type'];
		$folder        = "images/testimonial/";
		$new_size      = $file_size / 1024;
		$new_file_name = strtolower($file);
		$final_file    = str_replace(' ', '-', $new_file_name);

		if (move_uploaded_file($file_loc, $folder . $final_file)) {
			
			$query         = "UPDATE testimonial SET name='$name',make='$make',model='$model',year='$year',message='$message',image_name='$final_file',image_type='$file_type' where id='$id'";
			$run           = db::query($query);
			echo "<script>location='order.php?status=1'</script>";
		}
	}
    else
    {
	$query       = "UPDATE testimonial SET name='$name',make='$make',model='$model',year='$year',message='$message' where id='$id'";

	$run         = db::query($query);

	echo "<script>location='order.php?status=1'</script>";
    }
    
}
//***********************************************      Delete testimonial **************************************************//
if (isset($_POST['delete_home_testimonial'])) {
	
	$delete_id = $_POST['delete_id'];
   
	$query     = "SELECT * from testimonial where id='$delete_id'";
	$rec       = db::getRecord($query);

	$data      = $rec['image_name'];
	$dir       = "images/testimonial/";
	$dirHandle = opendir($dir);
	while ($file      = readdir($dirHandle)) {
		
		if ($file == $data) {
			
			unlink($dir . '/' . $file);
		}
	}

	closedir($dirHandle);

	$query = "DELETE from testimonial where id='$delete_id'";
	$del   = db::query($query);

	echo "<script>location='order.php?status=1'</script>";
}

//***********************************************       add car section     **************************************************//
if (isset($_POST['add_product'])) {
    $db            = db::open();
	$vin        = $_POST['vin'];
    $car_condition        = $_POST['car_condition'];
    $cylinder            = $_POST['cylinder'];
    $drive               = $_POST['drive'];
    $fuel                = $_POST['fuel'];
    $paint_color         = $_POST['paint_color'];
    $title_status        = $_POST['title_status'];
    $transmission        = $_POST['transmission'];
    $price                = $_POST['price'];
    $make                = $_POST['make'];
    $model                = $_POST['model'];
    $year                = $_POST['year'];
    $body_style         = $_POST['body_style'];
    $vehicle_status      = $_POST['vehicle_status'];
    $mileage              = $_POST['mileage'];
    
    $description   = $db->real_escape_string($_POST['description']);
    $image_name = NULL;
    
    $query         = "INSERT into product(vin,car_condition,cylinder,drive,fuel,paint_color,title_status,transmission,price,make,model,year,body_style,vehicle_status,mileage,description) VALUES('$vin','$car_condition','$cylinder','$drive','$fuel','$paint_color','$title_status','$transmission','$price','$make','$model','$year','$body_style','$vehicle_status','$mileage','$description')";
    $insert        = db::query($query);
    
    if (!empty($_FILES['file'])) {
        foreach ($_FILES['file']['name'] as $i => $name) {
        $file          = rand(1000, 100000) . "-" . $_FILES['file']['name'][$i];
        $file_loc      = $_FILES['file']['tmp_name'][$i];
        $file_size     = $_FILES['file']['size'][$i];
        $file_type     = $_FILES['file']['type'][$i];
        $folder        = "images/product/";
        $new_size      = $file_size / 1024;
        $new_file_name = strtolower($file);
        $final_file    = str_replace(' ', '-', $new_file_name);

        if (move_uploaded_file($file_loc, $folder . $final_file)) {
          $image_name = $image_name . $final_file . ",";

              $query = "SELECT MAX(id) from product";
              $rec = db::getRecord($query);
              $id = $rec['MAX(id)'];

          $query  = "INSERT into product_image(product_id,image_name,image_type) VALUES ('$id','$final_file','$file_type')";
          $insert = db::query($query);
        }
      }
    }
    echo "<script>location='car_sell.php?status=1'</script>";
}
//***********************************************      Edit car section     *************************************************//
   if (isset($_POST['edit_product'])) {
	$db             = db::open();
	$description    = $db->real_escape_string($_POST['description']);
	$vin                  = $_POST['vin'];
    $car_condition        = $_POST['car_condition'];
    $cylinder            = $_POST['cylinder'];
    $drive               = $_POST['drive'];
    $fuel                = $_POST['fuel'];
    $paint_color         = $_POST['paint_color'];
    $title_status        = $_POST['title_status'];
    $transmission        = $_POST['transmission'];
    $price                = $_POST['price'];
    $make                = $_POST['make'];
    $model                = $_POST['model'];
    $year                = $_POST['year'];
    $body_style         = $_POST['body_style'];
    $vehicle_status      = $_POST['vehicle_status'];
    $mileage              = $_POST['mileage'];
	$id            = $_POST['id'];
    $image_name = NULL;
	
    $query  = "UPDATE product SET vin='$vin',car_condition='$car_condition',cylinder='$cylinder',drive='$drive',fuel='$fuel',paint_color='$paint_color',title_status='$title_status',transmission='$transmission',price='$price',make='$make',model='$model',year='$year',body_style='$body_style',vehicle_status='$vehicle_status',mileage='$mileage',description='$description' where id='$id'";
	$run    = db::query($query);
		
	if (!empty($_FILES['file']['name'][0])) {
	    $query				= "SELECT * from product_image  where product_id='$id' ";
    	$product_images		= db::getRecords($query);
    
    	    foreach($product_images as $product_image) {
    		$data      = $product_image['image_name'];
    		$dir       = "images/product/";
    		$dirHandle = opendir($dir);
    		while ($file      = readdir($dirHandle)) {
    			if ($file == $data) {
                unlink($dir . '/' . $file);
    			}
    		}
    		$query		= "DELETE from product_image where product_id='$id' ";
	        $del		= db::query($query);
    	}
    	closedir($dirHandle);
	
		foreach ($_FILES['file']['name'] as $i => $name) {
        $file = rand(1000, 100000) . "-" . $_FILES['file']['name'][$i];
        $file_loc = $_FILES['file']['tmp_name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_type = $_FILES['file']['type'][$i];
        $folder = "images/product/";
        $new_size = $file_size / 1024;
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
    
        if (move_uploaded_file($file_loc, $folder . $final_file)) {
          $image_name = $image_name . $final_file . ",";
    
          $query = "INSERT into product_image(product_id,image_name,image_type) VALUES ('$id','$final_file','$file_type')";
          $insert = db::query($query);
            
//          echo "<script>location='product.php?status=1'</script>";
        }
      }
	}
   echo "<script>location='car_sell.php?status=1'</script>";
}

//***********************************************      Delete car section     ************************************************//
if (isset($_POST['delete_product'])) {
	$delete_id = $_POST['id'];
    $query				= "SELECT * from product_image  where product_id='$delete_id' ";
    $product_images		= db::getRecords($query);
    foreach($product_images as $product_image) {
    $data      = $product_image['image_name'];
    $dir       = "images/product/";
    $dirHandle = opendir($dir);
    while ($file      = readdir($dirHandle)) {
        if ($file == $data) {
    		unlink($dir . '/' . $file);
    	    }
        }
        $query		= "DELETE from product_image where product_id='$delete_id' ";
	    $del		= db::query($query);
    }
    closedir($dirHandle);
    
    $query = "DELETE from product where id='$delete_id'";
	$del   = db::query($query);
    
  echo "<script>location='car_sell.php?status=1'</script>";
}
//add home team
if (isset($_POST['add_team'])) {
	
	$db            = db::open();
	$name         = $_POST['name'];
	$author        = $_POST['author'];

	$file          = rand(1000, 100000) . "-" . $_FILES['file']['name'];
	$file_loc      = $_FILES['file']['tmp_name'];
	$file_size     = $_FILES['file']['size'];
	$file_type     = $_FILES['file']['type'];
	$folder        = "images/team/";
	$new_size      = $file_size / 1024;
	$new_file_name = strtolower($file);
	$final_file    = str_replace(' ', '-', $new_file_name);

	if (move_uploaded_file($file_loc, $folder . $final_file)) {
		
		$query         = "INSERT into team(name,author,image_name,image_type) VALUES('$name','$author','$final_file','$file_type')";

		$insert        = db::query($query);

		echo "<script>location='team.php?status=1'</script>";
	}

	echo "<script>location='team.php?status=2'</script>";
}

//edit team
if (isset($_POST['edit_team'])) {
	
	$db            = db::open();
	$name         = $_POST['name'];
	$author        = $_POST['author'];
	$id            = $_POST['id'];

	if ($_FILES['file']['name'] != NULL) {
		
		$file          = rand(1000, 100000) . "-" . $_FILES['file']['name'];
		$file_loc      = $_FILES['file']['tmp_name'];
		$file_size     = $_FILES['file']['size'];
		$file_type     = $_FILES['file']['type'];
		$folder        = "images/team/";
		$new_size      = $file_size / 1024;
		$new_file_name = strtolower($file);
		$final_file    = str_replace(' ', '-', $new_file_name);

		if (move_uploaded_file($file_loc, $folder . $final_file)) {
			
			$query         = "UPDATE team SET name='$name',author='$author',image_name='$final_file',image_type='$file_type' where id='$id'";
			$run           = db::query($query);
			echo "<script>location='team.php?status=1'</script>";
		}
	}
	else {
		
		$query = "UPDATE team SET name='$name',author='$author' where id='$id'";
		$run   = db::query($query);
		echo "<script>location='team.php?status=1'</script>";
	}

}

//delete team
if (isset($_POST['delete_team'])) {
	
	$delete_id = $_POST['delete_id'];
   
	$query     = "SELECT * from team where id='$delete_id'";
	$rec       = db::getRecord($query);

	$data      = $rec['image_name'];
	$dir       = "images/team/";
	$dirHandle = opendir($dir);
	while ($file      = readdir($dirHandle)) {
		
		if ($file == $data) {
			
			unlink($dir . '/' . $file);
		}
	}

	closedir($dirHandle);

	$query = "DELETE from team where id='$delete_id'";
	$del   = db::query($query);

	echo "<script>location='team.php?status=1'</script>";
}
//***********************************************      User car section     ************************************************//
if (isset($_POST['submit_detail'])) {
    
    
    
    if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['phone']) AND !empty($_POST['make']) AND !empty($_POST['model']) 
    AND !empty($_POST['body_type']) AND !empty($_POST['vehicle_status']) 
    AND !empty($_POST['mileage'])AND !empty($_POST['vin'])
    AND !empty($_POST['car_condition'])AND !empty($_POST['cylinder'])
    AND !empty($_POST['drive'])AND !empty($_POST['fuel'])
    AND !empty($_POST['paint_color'])AND !empty($_POST['transmission'])
    AND !empty($_POST['amount']))
    {
    
    $db            = db::open();
    $name            = $db->real_escape_string($_POST['name']);
    $email            = $db->real_escape_string($_POST['email']);
    $phone            = $db->real_escape_string($_POST['phone']);
    $make            = $db->real_escape_string($_POST['make']);
    $model           = $db->real_escape_string($_POST['model']);
    $body_type       = $db->real_escape_string($_POST['body_type']);
    $vehicle_status  = $db->real_escape_string($_POST['vehicle_status']);
    $mileage     = $db->real_escape_string($_POST['mileage']);
    $vin         = $db->real_escape_string($_POST['vin']);
    $car_condition   = $db->real_escape_string($_POST['car_condition']);
    $cylinder     = $db->real_escape_string($_POST['cylinder']);
    $drive        = $db->real_escape_string($_POST['drive']);
    $fuel         = $db->real_escape_string($_POST['fuel']);
    $paint_color  = $db->real_escape_string($_POST['paint_color']);
    $transmission = $db->real_escape_string($_POST['transmission']);
    $amount       = $db->real_escape_string($_POST['amount']);
    $image_name = NULL;
   
    $query         = "INSERT into car_sell(name,email,phone,make,model,body_type,vehicle_status,mileage,vin,car_condition,cylinder,drive,fuel,paint_color,transmission,amount) VALUES('$name','$email','$phone','$make','$model','$body_type','$vehicle_status','$mileage','$vin','$car_condition','$cylinder','$drive','$fuel','$paint_color','$transmission','$amount')";
    $insert        = db::query($query);
    
    if (!empty($_FILES['file'])) {
        foreach ($_FILES['file']['name'] as $i => $name) {
        $file          = rand(1000, 100000) . "-" . $_FILES['file']['name'][$i];
        $file_loc      = $_FILES['file']['tmp_name'][$i];
        $file_size     = $_FILES['file']['size'][$i];
        $file_type     = $_FILES['file']['type'][$i];
        $folder        = "../images/user/";
        $new_size      = $file_size / 1024;
        $new_file_name = strtolower($file);
        $final_file    = str_replace(' ', '-', $new_file_name);
    
        if(move_uploaded_file($file_loc, $folder . $final_file)) {
          $image_name = $image_name . $final_file . ",";

              $query = "SELECT MAX(id) from car_sell";
              $rec = db::getRecord($query);
              $id = $rec['MAX(id)'];

          $query  = "INSERT into product_images(product_id,image_name,image_type) VALUES ('$id','$final_file','$file_type')";
          $insert = db::query($query);
        }
      }
        
           $Time = date("h:i a");
                                        $currentdate = date("Y-m-d");
                                        $subject="Car For Sale";
                                        $body ="    Hi,
                                        
    Thank You For Applaying For Car For Sale !
                                        
    Keep In Touch:
                                        
    phone: 1-(877)-236-8483
                                        
    Email: Sales@carcentive.com
                                        
    Address: 364 Springfield Ave 
    No. 454 Berkeley Heights NJ 
    07922
                                        
    Time: $Time;
    Date: $currentdate ";
                                        $sender_mail = "FROM: Sales@carcentive.com";
                                        if(mail($email, $subject, $body, $sender_mail)){
                                            
                                        
                                                header("Location: https://www.carcentive.com/messagescreen.php");
                                                                        
                                        }else{
                                            echo "Not Send";
                                        }
    }
    echo "<script>alert('Your Car Information Not Sent!');</script>";
    echo "<script>location='../request.php?status=2'</script>";
    }else{
         echo "<script>alert('Fill All Form Field!');</script>";
         echo "<script>location='../request.php?status=1'</script>";
    }
        
    }
//***********************************************      Delete usercar section     ************************************************//
if (isset($_POST['delete_car'])) {
	$delete_id = $_POST['id'];
    $query				= "SELECT * from product_images  where product_id='$delete_id' ";
    $product_images		= db::getRecords($query);
    foreach($product_images as $product_image) {
    $data      = $product_image['image_name'];
    $dir       = "../images/user/";
    $dirHandle = opendir($dir);
    while ($file      = readdir($dirHandle)) {
        if ($file == $data) {
    		unlink($dir . '/' . $file);
    	    }
        }
        $query		= "DELETE from product_images where product_id='$delete_id' ";
	    $del		= db::query($query);
    }
    closedir($dirHandle);
    
    $query = "DELETE from car_sell where id='$delete_id'";
	$del   = db::query($query);
    
  echo "<script>location='car_information.php?status=1'</script>";
}
//***********************************************      referral usercar section     *******************************************//
if (isset($_POST['submit_referral'])) {
	
	if(!empty($_POST['ref_name']) AND !empty($_POST['ref_email']) AND !empty($_POST['ref_phone']) AND !empty($_POST['pr_name']) AND !empty($_POST['pr_email']) AND !empty($_POST['pr_phone']) AND !empty($_POST['message']))
    {
	$db            = db::open();
	$ref_name         = $db->real_escape_string($_POST['ref_name']);
	$ref_email       = $db->real_escape_string($_POST['ref_email']);
    $ref_phone       = $db->real_escape_string($_POST['ref_phone']);
    $name       = $db->real_escape_string($_POST['pr_name']);
    $email       =$db->real_escape_string($_POST['pr_email']);
    $phone      = $db->real_escape_string($_POST['pr_phone']);
    $message   = $db->real_escape_string($_POST['message']);
    
        $query         = "INSERT into referral(ref_name,ref_email,ref_phone,name,email,phone,message) VALUES('$ref_name','$ref_email','$ref_phone','$name','$email','$phone','$message')";
		$insert        = db::query($query);
		
		                                $Time = date("h:i a");
                                        $currentdate = date("Y-m-d");
                                        $subject="Your Referral Program Request is Accepted";
                                        $body ="    Hi,
                                        
    Thank You For Applaying in Referral Program !
                                        
    Keep In Touch:
                                        
    phone: 1-(877)-236-8483
                                        
    Email: Sales@carcentive.com
                                        
    Address: 364 Springfield Ave 
    No. 454 Berkeley Heights NJ 
    07922
                                        
    Time: $Time;
    Date: $currentdate ";
                                        $sender_mail = "FROM: Sales@carcentive.com";
                                        if(mail($email, $subject, $body, $sender_mail)){
                                            
                                        
                                                header("Location: https://www.carcentive.com/messagescreen.php");
                                                                        
                                        }else{
                                            echo "Not Send";
                                        }
        
    }
    else{
        echo "<script>alert('Fill All Form Field!');</script>";
        echo "<script>location='../referral.php?status=1'</script>";
    }
}
if (isset($_POST['delete_ref'])) {
	
	$delete_id = $_POST['id'];

	$query     = "SELECT * from referral where id='$delete_id'";
	$rec       = db::getRecord($query);


	$query = "DELETE from referral where id='$delete_id'";
	$del   = db::query($query);

	echo "<script>location='ref.php?status=1'</script>";
}
if (isset($_POST['send'])) {
    



	if(!empty($_POST['name']) AND !empty($_POST['lname']) AND !empty($_POST['email']) AND !empty($_POST['phone']) AND !empty($_POST['time']) AND !empty($_POST['budget']) AND !empty($_POST['amount']) AND !empty($_POST['dealership']))
    {
        
        $dbuser = 'carcenti_carcentive_admin';
   			$dbpwd = 'atecco@123';
   			$dbname = 'carcenti_carcentive2';
   			$dbserver = 'localhost';
   			$db = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
            $name       = $db->real_escape_string($_POST['name']);
            $lname       = $db->real_escape_string($_POST['lname']);
            $email       = $db-> real_escape_string($_POST['email']);
            $phone      = $db-> real_escape_string($_POST['phone']);
            $time      = $db-> real_escape_string($_POST['time']);
            $budget      = $db-> real_escape_string($_POST['budget']);
            $amount      = $db-> real_escape_string($_POST['amount']);
            $dealership      = $db-> real_escape_string($_POST['dealership']);
            
            
            
                                  $datetima = explode("T",$time);
                                 
                                 $dateeee = $datetima['0']." ".$datetima['1'];
                                 
                                
                                $date=date_create($dateeee);
                                $datewithAm = date_format($date,"m/d/Y g:i A");
                                
                                $alagdate = explode(" ",$datewithAm);
        
                                $Time = $alagdate['1']." ".$alagdate['2'];
                                $currentdate = $alagdate['0'];
                                
                                //  $date=date_create($currentdate);
                                //  $formate = date_format($date,"d-m-y");
                                 
                                 $proper = $alagdate['0']." ".$alagdate['1']." ".$alagdate['2'];
                                 
                                 
                                   $datecreate = new DateTime("now", new DateTimeZone('America/New_York') );
                                   $americandate = $datecreate->format('m/d/Y h:i:s a');
                                 
   
                $query         = "INSERT into quote(name,lname,email,phone,time,budget,amount,dealership,createdate) VALUES('$name','$lname','$email','$phone','$proper','$budget','$amount','$dealership','$americandate')";
        	
        		$insert        = db::query($query);
         
         
                                
                                
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
                            					
                            				<p style='text-align: center;color:green;font-weight:bold'>Thank you for reaching out to us for a Consultation!</p><br>    
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
                   
                   
             
            
       
    

    
    }else{
    
   echo "<script>alert('Fill All Form Field!');</script>";
   echo "<script>location='../quote.php?status=1'</script>";
}
}
if (isset($_POST['delete_quote'])) {
	
	$delete_id = $_POST['id'];

	$query     = "SELECT * from quote where id='$delete_id'";
	$rec       = db::getRecord($query);


	$query = "DELETE from quote where id='$delete_id'";
	$del   = db::query($query);

	echo "<script>location='get.php?status=1'</script>";
}
if (isset($_POST['send_feedback'])) {
	
	$db            = db::open();
	$name         = $_POST['name'];
	$make       = $_POST['make'];
	$model       = $_POST['model'];
	$year       = $_POST['year'];
    $message   = $db->real_escape_string($_POST['message']);
    
    if ($_FILES['file']['name'] != NULL) { 	
    $file          = rand(1000, 100000) . "-" . $_FILES['file']['name'];
	$file_loc      = $_FILES['file']['tmp_name'];
	$file_size     = $_FILES['file']['size'];
	$file_type     = $_FILES['file']['type'];
	$folder        = "images/feedback/";
	$new_size      = $file_size / 1024;
	$new_file_name = strtolower($file);
	$final_file    = str_replace(' ', '-', $new_file_name);

	if (move_uploaded_file($file_loc, $folder . $final_file)) {
		
		$query         = "INSERT into feedback(name,make,model,year,message,image_name,image_type) VALUES('$name','$make','$model','$year','$message','$final_file','$file_type')";

		$insert        = db::query($query);

		
          echo "<script>alert('Feedback Sent Successfully!');</script>";
        echo "<script>location='../feedback.php?status=1'</script>";
        
	}

	echo "<script>location='../feedback.php?status=2'</script>";
 }
 
else{
    
    	$query         = "INSERT into feedback(name,make,model,year,message) VALUES('$name','$make','$model','$year','$message')";
		$insert        = db::query($query);

		
        echo "<script>alert('Feedback Sent Successfully!');</script>";
        echo "<script>location='../feedback.php?status=1'</script>";
  }
}
if (isset($_POST['delete_feedback'])) {
	
	$delete_id = $_POST['delete_id'];
   
	$query     = "SELECT * from feedback where id='$delete_id'";
	$rec       = db::getRecord($query);

	$data      = $rec['image_name'];
	$dir       = "images/feedback/";
	$dirHandle = opendir($dir);
	while ($file      = readdir($dirHandle)) {
		
		if ($file == $data) {
			
			unlink($dir . '/' . $file);
		}
	}

	closedir($dirHandle);

	$query = "DELETE from feedback where id='$delete_id'";
	$del   = db::query($query);

	echo "<script>location='feedback.php?status=1'</script>";
}

//Approved and Un-Apprved Button
if(isset($_GET['idAp'])){
    $id=$_GET['idAp'];
    $sql = "UPDATE `testimonial` SET `Status`='Approved' WHERE `id`={$id}";
    $run   = db::query($sql);
    if ($run  === TRUE) {
     echo "<script>alert('Status Approved!');</script>";
     header("Location: order.php");
    } else {
      echo "Error updating record: " . $conn->error;
    }

$conn->close();
}

if(isset($_GET['idUn'])){
    $id=$_GET['idUn'];
    $sql = "UPDATE `testimonial` SET `Status`='Un-Approved' WHERE `id`={$id}";
    $run   = db::query($sql);
    if ($run  === TRUE) {
     echo "<script>alert('Status Un-Approved!');</script>";
     header("Location: order.php");
    } else {
      echo "Error updating record: " . $conn->error;
    }

$conn->close();
}


//CREATE USER

if(isset($_POST['create_user'])){
 $user_name=$_POST['un'];
 $email =$_POST['email'];
 $status=$_POST['status'];
 $password=$_POST['pass'];
 $Account_status = "Approve";
 
    $sql = "INSERT INTO `login`(`username`, `email`, `password`, `Status`, `AccountStatus`) VALUES ('$user_name','$email','$password','$status','$Account_status')";
    $insert  = db::query($sql);

if ($insert === TRUE) {
  
  header("Location: updateuser.php");
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    

}

//Update User

if(isset($_GET['update_user'])){
    $id=$_GET['id'];
    $USername = $_GET['un'];
    $email = $_GET['email'];
    $status = $_GET['status'];
    $password = $_GET['pass'];
    $sql = "UPDATE `login` SET `username`='$USername',`email`='$email',`password`='$password' , `Status`='$status' WHERE id={$id}";
    $run   = db::query($sql);
    if ($run  === TRUE) {
     header("Location: updateuser.php");
    } else {
      echo "Error updating record: " . $conn->error;
    }

$conn->close();
}

//Deletet user

if(isset($_GET['idUserdel'])){
    $id=$_GET['idUserdel'];
    $sql = "DELETE FROM `login` WHERE id={$id}";
    $del   = db::query($sql);
    if ($del === TRUE) {
        header("Location: updateuser.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

$conn->close();
	    
    
}


if(isset($_GET['AccountStatus'])){
    $id=$_GET['AccountStatus'];
   $sql = "UPDATE `login` SET `AccountStatus`='Approve' WHERE `id`='$id'";
    $run   = db::query($sql);
    if ($run  === TRUE) {
     header("Location: updateuser.php");
    } else {
      echo "Error updating record: " . $conn->error;
    }
}
?>