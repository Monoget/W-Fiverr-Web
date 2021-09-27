<?php
   include("sessions.php");
   include("header.php");
   include("sidebar.php");
   
   $query = "SELECT * from testimonial ";
   $rec = db::getRecords($query);
    
                                                               		  


?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Setting</a></li>
					</ol>
                </div>
                <!-- row -->
                
                				    	<?php
                				    	                                $dbuser = 'carcenti_carcentive_admin';
                                                               			$dbpwd = 'atecco@123';
                                                               			$dbname = 'carcenti_carcentive2';
                                                               			$dbserver = 'localhost';
                                                               		
                                                               		    $db = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
                                                               
                                                               
                                                               		    if ($db->connect_errno > 0){
                                                               		        echo "Failed to connect to MySQL: " . $db->connect_error;
                                                               		    }
                				    	                               
                				    	    if(isset($_GET['Conid'])){
                				    	        
                				    	                            $id = $_GET['Conid'];
                                                                    $sql = "SELECT * FROM `quote` WHERE `id`='$id' ORDER BY `id` DESC";
                                                                    
                                                                    $result = $db->query($sql);
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $date = $row['createdate'];
                				    	                        
                				    	                              $DT = explode(" ",$date);
                				    	                              
                                				    $lastname=$row['lname']; 
                                				   $fname = $row['name'];
                                				    $fulname = "          ".$fname." ".$lastname;
                				    	?>
                				    	
                				    	<div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-10">
                                    <h4 class="card-title">Scheduling Appoinments</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/admin/SchedulingAppoinment.php?Consultation="><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">Back</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                         <div class="card-body">
                				        	<div class="row">
                        				    	    <div class="col-md-6">
                        				    	        <div class="row">
                        				    	            <h4><b>NAME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $fulname ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>PHONE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['phone']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>AMOUNT:</b>   </h4>
                        				    	            <h4 class="pl-3">$<?= $row['amount']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	       
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>BIRTHDAY DATE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php $d = $row['birthday']; 
                        				    	            $date=date_create($d);
                                                                echo date_format($date,"m/d/Y");
                        				    	            
                        				    	            
                        				    	            ?></h4>
                        				    	        
                        				    	        </div>
                        				    	          <div class="row mt-2">
                        				    	            <h4><b>APPOINTMENT TIME :</b>   </h4>
                        				    	            <h4 class="pl-3"><?php $date = $row['time']; 
                        				    	                                    $seprate =explode(" ",$date);
                        				    	                                    echo $seprate['1']." ".$seprate['2'];
                        				    	            ?></h4>
                        				    	        
                        				    	        </div>
                        				    	       
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>SUBMISSION TIME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php 
                        				    	            
                        				    	            $x= explode(":",$DT['1']);
                        				    	            
                        				    	            echo $x['0'].":".$x['1']." ".$DT['2']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	   </div>
                        				    	   <div class="col-md-6">
                        				    	        <div class="row">
                        				    	            <h4><b>EMAIL:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['email']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>BUDGET:</b>   </h4>
                        				    	            <h4 class="pl-3">$<?= $row['budget']; ?></h4>
                        				    	        	
                        				    	        </div>
                        				    	          <div class="row mt-2">
                        				    	            <h4><b>DEALERSHIP:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['dealership']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	       
                        				    	         <div class="row mt-2">
                        				    	            <h4><b>ANIVERSERY:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php
                        				    	             $d = $row['aniversery']; 
                        				    	            $date=date_create($d);
                                                                echo date_format($date,"m/d/Y");?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>APPOINTMENT DATE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php $date = $row['time']; 
                        				    	                                    $seprate =explode(" ",$date);
                        				    	                                    $d = $seprate['0'];
                        				    	                                    $date=date_create($d);
echo date_format($date,"m/d/Y");
                        				    	            ?></h4>
                        				    	        
                        				    	        </div>
                        				    	      
                        				    	       
                        				    	         <div class="row mt-2">
                        				    	            <h4><b>SUBMISSION DATE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $DT['0']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        
                        				    	     
                        				    	   </div>
                				    	   </div>
                				    	   
                				    	   	</div>
                				    	
                				    
                				    	
                			
					
    					
                                </div>
                        </div>
					</div>
					
					
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            	<?php
                				    	                                $dbuser = 'carcenti_carcentive_admin';
                                                               			$dbpwd = 'atecco@123';
                                                               			$dbname = 'carcenti_carcentive2';
                                                               			$dbserver = 'localhost';
                                                               		
                                                               		    $db = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
                                                               
                                                               
                                                               		    if ($db->connect_errno > 0){
                                                               		        echo "Failed to connect to MySQL: " . $db->connect_error;
                                                               		    }
                				    	                               
                				    	    if(isset($_GET['Conid1'])){
                				    	        
                				    	                            $id = $_GET['Conid1'];
                                                                    $sql = "SELECT * FROM `quote` WHERE `id`='$id' ORDER BY `id` DESC";
                                                                    
                                                                    $result = $db->query($sql);
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $date = $row['createdate'];
                				    	                              $datee=date_create($date);
                                                                      $t = date_format($datee,"Y/m/d g:i A");
                                                                                    				    	                              
                				    	                              
                				    	                              
                				    	                              
                				    	                              $DT = explode(" ",$t);
                				    	                              
                                				    $lastname=$row['lname']; 
                                				   $fname = $row['name'];
                                				    $fulname = "          ".$fname." ".$lastname;
                				    	?>
                				    	
                				    	<div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-10">
                                    <h4 class="card-title">Scheduling Appoinments</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/admin/customer_data.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">Back</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                         <div class="card-body">
                				        	<div class="row">
                        				    	    <div class="col-md-6">
                        				    	        <div class="row">
                        				    	            <h4><b>NAME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $fulname ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>PHONE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['phone']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>AMOUNT:</b>   </h4>
                        				    	            <h4 class="pl-3">$<?= $row['amount']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	       
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>BIRTHDAY DATE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php 
                        				    	            
                        				    	            $d = $row['birthday'];
                                                            $date=date_create($d);
                                                            echo date_format($date,"m/d/Y");
                        				    	            ?></h4>
                        				    	        
                        				    	        </div>

                        				    	         <div class="row mt-2">
                        				    	            <h4><b>APPOINTMENT TIME :</b>   </h4>
                        				    	            <h4 class="pl-3"><?php $date = $row['time']; 
                        				    	                                    $seprate =explode(" ",$date);
                        				    	                                    echo $seprate['1']." ".$seprate['2'];
                        				    	            ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>SUBMISSION TIME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php $times = $DT['1']; 
                        				    	                                    $time = explode(":",$times);
                        				    	                                    echo $time['0'].":".$time['1']." ".$DT['2'];
                        				    	            
                        				    	            ?></h4>
                        				    	        
                        				    	        </div>
                        				    	   </div>
                        				    	   <div class="col-md-6">
                        				    	        <div class="row">
                        				    	            <h4><b>EMAIL:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['email']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>BUDGET:</b>   </h4>
                        				    	            <h4 class="pl-3">$<?= $row['budget']; ?></h4>
                        				    	        	
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>DEALERSHIP:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['dealership']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	       
                        				    	         <div class="row mt-2">
                        				    	            <h4><b>ANIVERSERY:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php 
                        				    	            
                        				    	              $d = $row['aniversery'];
                                                            $date=date_create($d);
                                                            echo date_format($date,"m/d/Y");
                        				    	            
                        				    	            ?></h4>
                        				    	        
                        				    	        </div>
                        				    	       <div class="row mt-2">
                        				    	            <h4><b>APPOINTMENT DATE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php $date = $row['time']; 
                        				    	                                    $seprate =explode(" ",$date);
                        				    	                                   
                        				    	                                    $d = $seprate['0'];
                        				    	                                    $date=date_create($d);
echo date_format($date,"m/d/Y");
                        				    	            ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>SUBMISSION DATE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php
                        				    	            
                        				    	           
                        				    	              $d = $DT['0'];
                                                            $date=date_create($d);
                                                            echo date_format($date,"m/d/Y");
                        				    	            
                        				    	            ?></h4>
                        				    	        
                        				    	        </div>
                        				    	      
                        				    	     
                        				    	   </div>
                        				    	   <div class="col-md-12">
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>Customer Notes:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['notes']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	       
                        				    	   </div>
                				    	   </div>
                				    	   
                				    	   	</div>
                				    	
                				    
                				    	
                			
					
    					
                                </div>
                        </div>
					</div>
					
					
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        <?    
                                            
                                            
                                            	                               
                				    	    if(isset($_GET['Deleterefferal'])){
                				    	        
                				    	                            $id = $_GET['Deleterefferal'];
                                                                    $sql = "SELECT * FROM `referral` WHERE `id`='$id' ORDER BY `id` DESC";
                                                                    
                                                                    $result = $db->query($sql);
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $dateaw = $row['createdate'];
                				    	                              $date=date_create($dateaw);
                                                                        $d = date_format($date,"m/d/Y g:i A");
                				    	                              
                				    	                              $DT = explode(" ",$d);
                				    	                              
                                				    $lastname=$row['lname']; 
                                				   $fname = $row['name'];
                                				    $fulname = "          ".$fname." ".$lastname;
                				    	?>
                				    	
                				    	<div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-10">
                                    <h4 class="card-title">REFERRAL PROGRAM</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/admin/ref.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">Back</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                         <div class="card-body">
                				        	<div class="row">
                        				    	    <div class="col-md-6">
                        				    	        <div class="row">
                        				    	            <h4><b>REFERRER'S NAME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['ref_name']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>REFERRER'S EMAIL:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['ref_email']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>REFERRER'S PHONE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['ref_phone']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>BIRTHDAY DATE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php $d = $row['birthday']; 
                        				    	            $date=date_create($d);
                                                            echo date_format($date,"m/d/Y");
                        				    	            
                        				    	            
                        				    	            
                        				    	            ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>SUBMISSION Date:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $DT['0']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	   </div>
                        				    	   <div class="col-md-6">
                        				    	        <div class="row">
                        				    	            <h4><b>PURCHASER’S NAME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['name']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>PURCHASER’S EMAIL:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['email']; ?></h4>
                        				    	        	
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>PURCHASER’S PHONE :</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['phone']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>ANIVERSERY:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php $d = $row['Aniversery']; 
                        				    	            $date=date_create($d);
                                                            echo date_format($date,"m/d/Y");
                        				    	           ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>SUBMISSION TIME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $DT['1']." ".$DT['2']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	     
                        				    	   </div>
                				    	   </div>
                				    	   <div class="row">
                				    	       <div class="col-md-12">
                				    	           <div class="row mt-2">
                        				    	            <h4><b>DESCRIPTION:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['message']; ?></h4>
                        				    	        
                        				    	        </div>
                				    	       </div>
                				    	   </div>
                				    	   
                				    	   	</div>
                				    	
                				    
                				    	
                			
					
    					
                                </div>
                        </div>
					</div>
					
					
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                              
                                            
                                            	<?php
                				    	                            
                				    	    if(isset($_GET['Delid1'])){
                				    	        
                				    	                            $id = $_GET['Delid1'];
                                                                    $sql = "SELECT * FROM `DealerAppo` WHERE `id`='$id' ORDER BY `id` DESC";
                                                                    
                                                                    $result = $db->query($sql);
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $date = $row['createdate'];
                				    	                           //   $DT = explode(" ",$date);
                				    	                              
                				    	                              
                				    	                              $datee=date_create($date);
                                                                    $y= date_format($datee,"m/d/Y g:i A");
                				    	                              $x = explode(" ",$y);
                				    	                              $userdate = $row['client'];
                				    	                            
                				    	                              
                				    	                              $user = explode(" ",$userdate);
                				    	                              
                                				    $lastname=$row['lname']; 
                                				   $fname = $row['name'];
                                				    $fulname = "          ".$fname." ".$lastname;
                				    	?>
                				    	
                				    	<div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="col-md-10">
                                                            <h4 class="card-title">Scheduling Appoinments</h4>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="text-right">
                                                               <a href="https://www.carcentive.com/admin/customer_data.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">Back</button></a> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                                 <div class="card-body">
                                        				        	<div class="row text-center">
                                                				    	    <div class="col-md-6">
                                                				    	        <div class="row">
                                                				    	            <h4><b>NAME:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?= $fulname ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	       
                                                				    	       <div class="row mt-2">
                                                				    	            <h4><b>BIRTHDAY:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?php
                                                				    	               $date = $row['birthday'];
                                                				    	               $datee=date_create($date);
                                                                                       $y= date_format($datee,"m/d/Y");
                                                                                       echo $y;
                                                				    	            ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	         <div class="row mt-2">
                                                				    	            <h4><b>Appointment Date:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?php $d = $user['0']; 
                                                				    	            $date=date_create($d);
                                                                                    echo date_format($date,"m/d/Y");
                                                				    	            
                                                				    	            
                                                				    	            
                                                				    	            
                                                				    	            ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	        <div class="row mt-2">
                                                				    	            <h4><b>SUBMISSION Date:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?= $x['0']; ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	         <div class="row mt-2">
                                                				    	            <h4><b>PHONE:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?= $row['phone']; ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	   </div>
                                                				    	   <div class="col-md-6">
                                                				    	        <div class="row">
                                                				    	            <h4><b>EMAIL:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?= $row['email']; ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	
                                                				    	        <div class="row mt-2">
                                                				    	            <h4><b>Aniversery Date</b>   </h4>
                                                				    	            <h4 class="pl-3"><?php 
                                                				    	              $date = $row['Aniversery'];
                                                				    	               $datee=date_create($date);
                                                                                       $y= date_format($datee,"m/d/Y");
                                                                                       echo $y;
                                                				    	            
                                                				    	            ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	         <div class="row mt-2">
                                                				    	            <h4><b>Appointment Time:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?= $user['1']." ".$user['2']; ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	       
                                                				    	        <div class="row mt-2">
                                                				    	            <h4><b>SUBMISSION Time:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?= $x['1']." ".$x['2']
                                                				    	            ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	     
                                                				    	   </div>
                                        				    	   </div>
                                        				    	   <div class="row">
                                        				    	       <div class="col-md-12 mt-2">
                                        				    	           <div class="row">
                                        				    	           <h4><b>REASON:</b>   </h4>
                                                				    	   <h4 class="pl-3"><?= $row['Reason']; ?></h4>
                                        				    	       </div>
                                        				    	       </div>
                                        				    	   </div>
                                        				    	   
                                        				    	   	</div>
                                        				    	
                                        				    
                                        				    	
                                        			
                        					
                            					
                                                        </div>
                                                </div>
                        					</div>
                        					
					
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                                            
                				    
					
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            	<?php
                				    	                            
                				    	    if(isset($_GET['Delid'])){
                				    	        
                				    	                            $id = $_GET['Delid'];
                                                                    $sql = "SELECT * FROM `DealerAppo` WHERE `id`='$id' ORDER BY `id` DESC";
                                                                    
                                                                    $result = $db->query($sql);
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $date = $row['createdate'];
                				    	                               $dateee=date_create($date);
$de = date_format($dateee,"m/d/Y g:i A");

                				    	                              $DT = explode(" ",$de);
                				    	                              
                				    	                              $userdate = $row['client'];
                				    	                              $datee=date_create($userdate);
$d = date_format($datee,"m/d/Y g:i A");


                				    	                              
                				    	                              $user = explode(" ",$d);
                				    	                              
                                				    $lastname=$row['lname']; 
                                				   $fname = $row['name'];
                                				    $fulname = "          ".$fname." ".$lastname;
                				    	?>
                				    	
                				    	<div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="col-md-10">
                                                            <h4 class="card-title">Scheduling Appoinments</h4>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="text-right">
                                                               <a href="https://www.carcentive.com/admin/SchedulingAppoinment.php?Dealership="><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">Back</button></a> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                                 <div class="card-body">
                                        				        	<div class="row text-center">
                                                				    	    <div class="col-md-6">
                                                				    	        <div class="row">
                                                				    	            <h4><b>NAME:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?= $fulname ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	        <div class="row mt-2">
                                                				    	            <h4><b>PHONE:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?= $row['phone']; ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	       <div class="row mt-2">
                                                				    	            <h4><b>BIRTHDAY:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?php $d = $row['birthday']; 
                                                				    	            
                                                				    	            $date=date_create($d);
echo date_format($date,"m/d/Y");
                                                				    	             ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	         <div class="row mt-2">
                                                				    	            <h4><b>APPOINTMENT DATE:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?= $user['0']; ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	        <div class="row mt-2">
                                                				    	            <h4><b>SUBMISSION Date:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?= $DT['0']; ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	   </div>
                                                				    	   <div class="col-md-6">
                                                				    	        <div class="row">
                                                				    	            <h4><b>EMAIL:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?= $row['email']; ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	     
                                                				    	        <div class="row mt-2">
                                                				    	            <h4><b>ANIVERSERY DATE</b>   </h4>
                                                				    	            <h4 class="pl-3"><?php $d = $row['Aniversery']; 
                                                				    	            
                                                				    	            $date=date_create($d);
echo date_format($date,"m/d/Y");
                                                				    	            
                                                				    	            ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	         <div class="row mt-2">
                                                				    	            <h4><b>APPOINTMENT TIME:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?= $user['1']." ".$user['2']; ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	       
                                                				    	        <div class="row mt-2">
                                                				    	            <h4><b>SUBMISSION TIME:</b>   </h4>
                                                				    	            <h4 class="pl-3"><?= $DT['1']." ".$DT['2']; ?></h4>
                                                				    	        
                                                				    	        </div>
                                                				    	     
                                                				    	   </div>
                                        				    	   </div>
                                        				    	   <div class="row">
                                        				    	       <div class="col-md-12 mt-2">
                                        				    	           <div class="row">
                                        				    	           <h4><b>REASON:</b>   </h4>
                                                				    	   <h4 class="pl-3"><?= $row['Reason']; ?></h4>
                                        				    	       </div>
                                        				    	       </div>
                                        				    	   </div>
                                        				    	   
                                        				    	   	</div>
                                        				    	
                                        				    
                                        				    	
                                        			
                        					
                            					
                                                        </div>
                                                </div>
                        					</div>
                        					
					
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                                            
                				    
					
					
					
					
					
					
					
					
					
					
					
					
					<?php
					
					
					   if(isset($_GET['viewid'])){
                				    	        
                				    	                            $id = $_GET['viewid'];
                                                                    $sql = "SELECT * FROM `testimonial` WHERE `id`='$id'";
                                                                    
                                                                    $result = $db->query($sql);
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $datee = $row['createdate'];
                				    	                              $date=date_create($datee);
                                                                        $d = date_format($date,"m/d/Y g:i A");
                				    	                              $DT = explode(" ",$d);
                				    	                              
                                				    $lastname=$row['lname']; 
                                				   $fname = $row['name'];
                                				    $fulname = "          ".$fname." ".$lastname;
                				    	?>
                				    	
                				    	<div class="row">
                                           <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-10">
                                    <h4 class="card-title">Scheduling Appoinments</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/admin/order.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">Back</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                         <div class="card-body">
                				        	<div class="row">
                        				    	    <div class="col-md-4">
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>NAME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $fulname ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>Make:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['make']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>SUBMISSION Date:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $DT['0']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	   </div>
                        				    	   <div class="col-md-4">
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>Model:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['model']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>Year:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['year']; ?></h4>
                        				    	        	
                        				    	        </div>
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>SUBMISSION TIME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $DT['1']." ".$DT['2']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	     
                        				    	   </div>
                        				    	   
                        				    	   
                        				    	   
                        				    	   <div class="col-md-4">
                        				    	        <div class="row">
                        				    	              <img class="pl-5" src="<?php echo "images/testimonial/".$row['image_name']; ?>" alt="" >
                        				    	        
                        				    	    
                        				    	   </div>
                				    	   </div>
                				    	
                				    	   
                				    	   	</div>
                				    	   	<div class="row">
                				    	       <div class="col-md-12 mt-2">
                				    	           <div class="row">
                				    	           <h4><b>Description:</b>   </h4>
                        				    	   <h4 class="pl-3"><?= $row['message']; ?></h4>
                				    	       </div>
                				    	       </div>
                				    	   </div>
                				    	
                				    
                				    	
                			
					
    					
                                      </div>
                        </div>
					</div>
					
					</div>
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                                            
                                            
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                            
                                         <?php   
                                            
                                            
                                            	   if(isset($_GET['customerid'])){
                				    	        
                				    	                            $id = $_GET['customerid'];
                                                                    $sql = "SELECT * FROM `Customer_data` WHERE `id`='$id'";
                                                                    
                                                                    $result = $db->query($sql);
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $date = $row['createdate'];
                				    	                              $DT = explode(" ",$date);
                				    	                              
                                				    $lastname=$row['FirstName']; 
                                				   $fname = $row['LastName'];
                                				    $fulname = "          ".$lastname." ".$fname;
                				    	?>
                				    	
                				    	<div class="row">
                                           <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-10">
                                    <h4 class="card-title">User Data</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/admin/customer_data.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">Back</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                         <div class="card-body">
                				        	<div class="row">
                        				    	    <div class="col-md-4">
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>NAME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $fulname ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>Email:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['Eamil']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	         <div class="row mt-4">
                        				    	            <h4><b>BirthDay Date:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php 
                        				    	            $D = $row['Birthday'];
                        				    	            $date=date_create($D);
                                                            echo date_format($date,"m/d/Y");
                        				    	            
                        				    	            ?></h4>
                        				    	        	
                        				    	        </div>
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>SUBMISSION Date:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php  
                        				    	            
                        				    	            $D = $DT['0'];
                        				    	            $date=date_create($D);
                                                            echo date_format($date,"m/d/Y");
                        				    	            
                        				    	            ?></h4>
                        				    	        
                        				    	        </div>
                        				    	   </div>
                        				    	   <div class="col-md-4">
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>Phone:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['Phone']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	       
                        				    	         <div class="row mt-4">
                        				    	            <h4><b>Aniversery Date:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php
                        				    	            
                        				    	             $D = $row['AnniverseryDay'];
                        				    	            $date=date_create($D);
                                                            echo date_format($date,"m/d/Y");
                        				    	            
                        				    	            
                        				    	            ?></h4>
                        				    	        	
                        				    	        </div>
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>SUBMISSION Time:</b>   </h4>
                        				    	            <h4 class="pl-3"><?php
                        				    	            $D = $DT['1'];
                        				    	            $date=date_create($D);
                                                            echo date_format($date,"g:i A");
                        				    	            
                        				    	            
                        				    	            
                        				    	            ?></h4>
                        				    	        
                        				    	        </div>
                        				    	         
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>Address:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['Address']; ?></h4>
                        				    	        	
                        				    	        </div>
                        				    	       
                        				    	     
                        				    	   </div>
                        				    	  
                        				    	   <div class="col-md-4">
                        				    	        <div class="row">
                        				    	              <img class="pl-5" src="<?php echo "images/testimonial/".$row['Image']; ?>" alt="" >
                        				    	        
                        				    	    
                        				    	   </div>
                				    	   </div>
                				    	   </div>
                				    	 
                				    	      <div class="row mt-4">
                        				    	          <div class="col-md-12">
                        				    	              <div class="row">
                            				    	            <h4><b>Customer Notes:</b></h4>
                            				    	            <h4 class="pl-3"><?= $row['description']; ?></h4>
                            				    	            </div>
                        				    	           </div>	
                        				    	        </div>
                        				    	   
                				    	
                				    	   
                				    	   
                				    	
                				    
                				    	
                			
					
    					
                                      </div>
                        </div>
					</div>
					
					</div>
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                                            
					
					
					
					
					
					
					
					
					
					        
                                         <?php   
                                            
                                            
                                            	   if(isset($_GET['updateid'])){
                				    	        
                				    	                            $id = $_GET['updateid'];
                                                                    $sql = "SELECT * FROM `DealerAppo` WHERE `id`='$id'";
                                                                    
                                                                    $result = $db->query($sql);
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $date = $row['createdate'];
                				    	                              $DT = explode(" ",$date);
                				    	                              
                                                    				  
                				    	?>
                				    	
                				    	<div class="row">
                                           <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-10">
                                    <h4 class="card-title">Update Appointment For Dealership</h4>
                                </div>
                             
                            </div>
                            
                            
                            
                                         <div class="card-body">
                				        	<div class="row">
                        				    	    <div class="col-md-12 mt-3">
                				    	                
                				    	                <p style="text-align:center;"> 
                				    	                    <h2 style="text-align:center;"></h2>
                				    	                    
                                                            <form class="mt-5" action="clientdata.php" method="POST">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                    <label class="form-label">First Name:</label>
                                                                        <input type="text" class="form-control" placeholder="Enter Your Firt Name" name="name"  value="<?= $row['name']?>" required>
                                                                      </div>
                                                                      </div>
                                                                    <div class="col-md-4">  
                                                                      <div class="form-group">
                                                                          <label class="form-label">Last Name:</label>
                                                                        <input type="text" class="form-control" placeholder="Enter Your Last Name" name="lname" value="<?= $row['lname']?>"  required>
                                                                      </div>
                                                                      </div>
                                                                      <div class="col-md-4">
                                                                          <div class="form-group">
                                                                              <label class="form-label">Email:</label>
                                                                            <input type="email" class="form-control" placeholder="Enter Your Email" name="email" value="<?= $row['email']?>"  required>
                                                                          </div>
                                                                      </div>
                                                                      
                                                                </div>
                                                                <div class="row">
                                                                     <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Phone Number:</label>
                                                                        <input type="tel" class="form-control" placeholder="Enter Your Phone Number" name="phone" value="<?=  $row['phone']?>" required>
                                                                      </div>
                                                                        
                                                                      </div>
                                                                      
                                                                       <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Appointment Time</label>
                                                                        <input type="datetime-local" class="form-control"  name="datetime" value="<?php
                                                                                  
                                                                                  $datew = $row['client'];
                                                                                  
                                                                                  $date=date_create($datew);
                                                                                    $datewithoutt = date_format($date,"Y-m-d h:i A");
                                                                                    $sep = explode(" ",$datewithoutt);
                                                                                    
                                                                                  $fix = $sep['0']."T".$sep['1'];
                                                                                  
                                                                                  echo $fix;
                                                                                  
                                                                                  
                                                                                  
                                                                                  ?>" required>
                                                                      </div>
                                                                        
                                                                      </div>
                                                                 
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Comment:</label>
                                                                        <textarea class="form-control"  rows="1" name="reason" placeholder="Description"><?= $row['Reason']?></textarea>
                                                                      </div>
                                                                    </div>
                                                                   
                                                                                  
                                                                                  
                                                                                  
                                                                    </div>
                                                             <div class="row">
                                                                 <div class="col-md-4">
                                                                      <div class="form-group">
                                                                          <label class="form-label">Birthday Date:</label>
                                                                        <input type="date" class="form-control"  name="bdy"  value="<?=  $row['birthday']?>" required>
                                                                      </div>
                                                                     
                                                                 </div>
                                                                  <div class="col-md-4">
                                                                       <div class="form-group">
                                                                          <label class="form-label">Aniversery Date:</label>
                                                                        <input type="date" class="form-control"  name="Aniversry"   value="<?=  $row['Aniversery']?>" required>
                                                                      </div>
                                                                     
                                                                 </div>
                                                                  <div class="col-md-4">
                                                                       <div class="form-group">
                                                                            <input type="text" class="form-control"  name="id" value="<?= $row['id']?>" hidden>
                                                                          </div>
                                                                      </div>
                                                                     
                                                                 </div>
                                                             </div>
                                                              
                                                              
                                                               <div class="row">
                                                                 <div class="col-md-4">
                                                                    <button type="submit" class="btn btn-primary ml-3" name="updateddelearship">Submit</button>
                                                                </div>
                                                              </div>
                                                            </form>
                                                            
                                                            
                                                            
                                                         </p>
                                                    </div>
                				    	
                				    	   
                				    	   	</div>
                				    	   	
                				    	
                				    
                				    	
                			
					
    					
                                      </div>
                        </div>
					</div>
					
					</div>
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                                            
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
                                         <?php   
                                            
                                            
                                            	   if(isset($_GET['conupdateid'])){
                				    	        
                				    	                            $id = $_GET['conupdateid'];
                                                                    $sql = "SELECT * FROM `quote` WHERE `id`='$id'";
                                                                    
                                                                    $result = $db->query($sql);
                                                                     $sql1 = "SELECT * FROM `consultationAvailablity`";
                                                                    
                                                                    $consultationAvailablity = $db->query($sql1);
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $date = $row['createdate'];
                				    	                              $DT = explode(" ",$date);
                				    	                              
                                                    				  
                				    	?>
                				    	
                				    	<div class="row">
                                           <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-10">
                                    <h4 class="card-title">Update Appointment For Consultation</h4>
                                </div>
                               
                            </div>
                            
                            
                            
                                         <div class="card-body">
                				        	<div class="row">
                        				    	    <div class="col-md-12">
                				    	                   <p style="text-align:center;"> 
                				    	                   
                                                             <div class="row">
                                                                <div class="col-md-12">
                                                                <form class="form-horizontal " role="form" method="post" action="clientdata.php?id=<?= $row['id']?>"> 
                                                                  <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label  class="form-label" class="ml-2">First Name:</label>
                                                                              <input type="text" placeholder="Enter First Name*" class="form-control" name="name" value="<?= $row['name'] ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label  class="form-label" class="ml-2">Last Name:</label>
                                                                              <input type="text" placeholder="Enter Last Name*" class="form-control" name="lname" value="<?= $row['lname'] ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        
                                                                        <div class="col-md-4">
                                                                            <div class="selected-box">
                                                                             <label  class="form-label" class="ml-2">Type of Purchase:</label>
                                                                                <select class="form-control" name="dealership" required>
                                                                                    <option value="">Choose Type of Purchase</option>
                                                                                    <option value="Dealership Purchase" <?php  if($row['dealership']=="Dealership Purchase"){
                                                                                    echo "selected";
                                                                                    }?>>Dealership Purchase  </option>
                                                                                    <option value="Private Purchase" <?php  if($row['dealership']=="Private Purchase"){
                                                                                    echo "selected";
                                                                                    }?>>Private Purchase </option>
                                                                                    <option value="Lease a Car" <?php  if($row['dealership']=="Lease a Car"){
                                                                                    echo "selected";
                                                                                    }?>>Lease a Car </option>
                                                                                    <option value="Lease Buyout" <?php  if($row['dealership']=="Lease Buyout"){
                                                                                    echo "selected";
                                                                                    }?>>Lease Buyout  </option>
                                                                                    <option value="Lease Transfer" <?php  if($row['dealership']=="Lease Transfer"){
                                                                                    echo "selected";
                                                                                    }?>>Lease Transfer  </option>
                                                                                    <option value="Sell a Car" <?php  if($row['dealership']=="Sell a Car"){
                                                                                    echo "selected";
                                                                                    }?>>Sell a Car </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                        <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label  class="form-label" class="ml-2">Email:</label>
                                                                                  <input type="email" placeholder="Enter Email Address*" class="form-control" name="email" value="<?= $row['email'] ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label  class="form-label" class="ml-2">Phone:</label>
                                                                                <input type="text" placeholder="Phone Number*" class="form-control" name="phone"  value="<?= $row['phone'] ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-4">
                                                                            
                                                                            
                                                                            <div class="form-group">
                                                                                <label  class="form-label" class="ml-2">Appointment Time:</label>
                                                                                  <input type="datetime-local" placeholder="Best Time To Reach You*" class="form-control" value="<?php
                                                                                  
                                                                                  $datew = $row['time'];
                                                                                  
                                                                                  $date=date_create($datew);
                                                                                    $datewithoutt = date_format($date,"Y-m-d h:i A");
                                                                                    $sep = explode(" ",$datewithoutt);
                                                                                    
                                                                                  $fix = $sep['0']."T".$sep['1'];
                                                                                  
                                                                                  echo $fix;
                                                                                  
                                                                                  
                                                                                  
                                                                                  ?>" name="time" required>
                                                                                </div>
                                                                        </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label  class="form-label" class="ml-2">Monthly Budget:</label>
                                                                                      <input type="text" placeholder="Monthly Budget *" class="form-control" name="budget" value="<?= $row['budget'] ?>" required>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label  class="form-label" class="ml-2">Down Payment Amount:</label>
                                                                                     <input type="text" placeholder="Down Payment Amount*" class="form-control" name="amount" value="<?= $row['amount'] ?>" required>
                                                                                </div>
                                                                            </div>
                                                                             
                                                                     
                                                                        </div>
                                                                        
                                                                         <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label  class="form-label" class="ml-2">Birthday:</label>
                                                                                          <input type="date" placeholder="Monthly Budget *" class="form-control" name="birthday" value="<?= $row['birthday'] ?>" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label  class="form-label" class="ml-2">Aniversery Day:</label>
                                                                                         <input type="date" placeholder="Down Payment Amount*" class="form-control" name="Aniversry" value="<?= $row['aniversery'] ?>" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                     <div class="form-group">
                                                                                        <label for="exampleFormControlTextarea1">Customer Notes:</label>
                                                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="note"><?= $row['notes'] ?></textarea>
                                                                                      </div>
                                                                                                                                                        
                                                                                    </div>                                                                    
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                         <input type="date" placeholder="Down Payment Amount*" class="form-control" name="id" value="<?= $id ?>" hidden>
                                                                                    </div>
                                                                                </div>
                                                                     
                                                                        </div>
                                                                        
                                                                        <div class="col-md-12" style="    padding-top: 10px;">
                                                                            <button class="btn btn-primary"  type="submit" name="conupdatedata">Update</button>
                                                                        </div>
                                                                      
                                                                      
                                                                  </div>
                                                                </div>
                                                        </form> 
                                                                
                                                                 
                                                              </div>
                                                            </div>
                                                            
                                                            
                                                            
                                                         </p>
                				    	               
                				    	               
                				    	               
                				    	               
                                                    </div>
                				    	
                				    	   
                				    	   	</div>
                				    	   	
                				    	
                				    
                				    	
                			
					
    					
                                      </div>
                        </div>
					</div>
					
					</div>
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                                            
					
					
			
			
			
			
			
			
			
                                         <?php   
                                            
                                            
                                            	   if(isset($_GET['Updaterefferal'])){
                				    	        
                				    	                            $id = $_GET['Updaterefferal'];
                                                                    $sql = "SELECT * FROM `referral` WHERE `id`='$id'";
                                                                    
                                                                    $result = $db->query($sql);
                                                                    
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $date = $row['createdate'];
                				    	                              $DT = explode(" ",$date);
                				    	                              
                                                    				  
                				    	?>
                				    	
                				    	<div class="row">
                                           <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-10">
                                    <h4 class="card-title">Update REFFERES</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/admin/customer_data.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">Back</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                         <div class="card-body">
                                             <form action="clientdata.php?Updaterefferal=<?= $row['id'] ?>" method="POST">
                				        	<div class="row">
                                                    <div class="col-md-4">
                                                         <div class="form-group">
                                                             <input type="text" placeholder="Referrer's Name" class="form-control" name="ref_name" value="<?= $row['ref_name'] ?>" required>
                                                             </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                         <div class="form-group">
                                                                <input type="email" placeholder="Referrer's Email Address:" class="form-control" name="ref_email" value="<?= $row['ref_email'] ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                                <input type="text" placeholder="Referrer's Phone Number" class="form-control" name="ref_phone" value="<?= $row['ref_phone'] ?>" required>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <input type="text" placeholder="Purchaser’s Name" class="form-control" name="pr_name" value="<?= $row['name'] ?>" required>
                                                                    </div>
                                                                </div>
                                                                 <div class="col-md-4">
                                                                         <div class="form-group">
                                                                                <input type="email" placeholder="Purchaser’s Email Address" class="form-control" name="pr_email"  value="<?= $row['email'] ?>" required>
                                                                        </div>
                                                                 </div>
                                                                 <div class="col-md-4">
                                                                         <div class="form-group">
                                                                             <input type="text" placeholder="Purchaser’s Phone Number" class="form-control" name="pr_phone" value="<?= $row['phone'] ?>" required>
                                                                        </div>
                                                                 </div>
                                            </div>
                                            <div class="row">
                                                          <div class="col-md-4">
                                                                         <div class="form-group">
                                                                             <label class="form-label">Birthday Date:</label>
                                                                             <input type="date" class="form-control" name="birthday" value="<?= $row['birthday'] ?>" required>
                                                                        </div>
                                                          </div>
                                                          <div class="col-md-4">
                                                                         <div class="form-group">
                                                                             <label class="form-label">Aniversery Date:</label>
                                                                             <input type="date" class="form-control" name="Aniversery" value="<?= $row['Aniversery'] ?>" required>
                                                                        </div>
                                                          </div>
                                                          <div class="col-md-4">
                                                                <div class="form-group">
                                                                       <label class="form-label">Description:</label>
                                                                       <textarea name="message"  class="form-control" tabindex="55" placeholder="Your Answer" aria-invalid="false" rows="1" cols="112" required><?= $row['message'] ?></textarea>
                                                                      
                                                                </div>
                                                          </div>
                                             </div>
                                            
                                                 <center><button class="btn btn-outline-primary" type="submit" name="Updaterefferal">Update</button></center>
                                            </form>    				    	
                				    	   
                				    	 </div>
                				    	   	
                				    	
                				    
                				    	
                			
					
    					
                                      </div>
                        </div>
					</div>
					
					</div>
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                                            
			
			
			
			
			
			
			
			
			
			<?php
			                               
                				    	    if(isset($_GET['carforsellshowid'])){
                				    	        
                				    	                            $id = $_GET['carforsellshowid'];
                                                                    $sql = "SELECT * FROM `product` WHERE `id`='$id' ORDER BY `id` DESC";
                                                                    
                                                                    $result = $db->query($sql);
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $date = $row['createdate'];
                				    	                              $DT = explode(" ",$date);
                				    	                              
                                				    $lastname=$row['lname']; 
                                				   $fname = $row['name'];
                                				    $fulname = "          ".$fname." ".$lastname;
                				    	?>
                				    	
                				    	<div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-10">
                                    <h4 class="card-title">CAR SELL</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/admin/car_sell.php?status=1"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">Back</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                         <div class="card-body">
                				        	<div class="row">
                        				    	    <div class="col-md-6">
                        				    	        <div class="row">
                        				    	            <h4><b>DRIVER:</b>   </h4>
                        				    	            <h4 class="pl-3"><?=  $row['drive'];?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>VIN :</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['vin']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>CYLINDER:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['cylinder']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>FUEL:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['fuel']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>PAINT COLOR:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['paint_color']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>VEHICLE STATUS:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['vehicle_status']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>MILEAGE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['mileage']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>SUBMISSION Date:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $DT['0']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	   </div>
                        				    	   <div class="col-md-6">
                        				    	        <div class="row">
                        				    	            <h4><b>STATUS TITLE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['title_status']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>TRANSMISSION:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['transmission']; ?></h4>
                        				    	        	
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>PRICE :</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['price']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>MAKE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['make']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>Model:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['model']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	         <div class="row mt-2">
                        				    	            <h4><b>YEAR:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['year']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>BODY STYLE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['body_style']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>SUBMISSION Date:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $DT['1']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	     
                        				    	   </div>
                				    	   </div>
                				    	   <div class="row">
                        				    	    <div class="col-md-6">
                        				    	        <div class="row">
                        				    	            <h4><b>DESCRIPTION:</b>   </h4>
                        				    	            <h4 class="pl-3"><?=  $row['description'];?></h4>
                        				    	        
                        				    	        </div>
                        				    	  </div>
                        				 </div>
                				    	   
                				    	   	</div>
                				    	
                				    
                				    	
                			
					
    					
                                </div>
                        </div>
					</div>
					
					
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   
                				    	   	<?php
			                               
                				    	    if(isset($_GET['uniiid'])){
                				    	        
                				    	                            $id = $_GET['uniiid'];
                                                                    $sql = "SELECT * FROM `car_sell` WHERE `id`='$id' ORDER BY `id` DESC";
                                                                    
                                                                    $result = $db->query($sql);
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $datee = $row['createdate'];
                				    	                              $date=date_create($datee);
                                                                       $datae = date_format($date,"m/d/Y g:i A");
                				    	                              
                				    	                              $DT = explode(" ",$datae);
                				    	                              
                                				    $lastname=$row['lname']; 
                                				   $fname = $row['name'];
                                				    $fulname = "          ".$fname." ".$lastname;
                				    	?>
                				    	
                				    	<div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-10">
                                    <h4 class="card-title">CAR INFORMATION</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/admin/car_information.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">Back</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                         <div class="card-body">
                				        	<div class="row">
                        				    	    <div class="col-md-6">
                        				    	        <div class="row">
                        				    	            <h4><b>NAME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?=  $row['name'];?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>EMAIL :</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['email']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>PHONE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['phone']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>FUEL:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['fuel']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>PAINT COLOR:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['paint_color']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	         <div class="row mt-2">
                        				    	            <h4><b>CAR CONIDITION:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['car_condition']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>VEHICLE STATUS:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['vehicle_status']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>MILEAGE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['mileage']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>AMOUNT:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['amount']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>SUBMISSION DATE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $DT['0']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	   </div>
                        				    	   <div class="col-md-6">
                        				    	        <div class="row">
                        				    	            <h4><b>Drive:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['drive']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	         <div class="row mt-2">
                        				    	            <h4><b>VIN:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['vin']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>TRANSMISSION:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['transmission']; ?></h4>
                        				    	        	
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>CYLINDER :</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['cylinder']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>MAKE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['make']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>Model:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['model']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	         <div class="row mt-2">
                        				    	            <h4><b>YEAR:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['year']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>BODY Type:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['body_type']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-2">
                        				    	            <h4><b>SUBMISSION TIME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $DT['1']." ".$DT['2']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	     
                        				    	   </div>
                				    	   </div>
                				    	  
                				    	   
                				    	   	</div>
                				    	
                				    
                				    	
                			
					
    					
                                </div>
                        </div>
					</div>
					
					
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                                            
                                            
                                            
                                            
                                            
			
			
			
			
			
			
			
			
                            
                                         <?php   
                                            
                                            
                                            	   if(isset($_GET['viewfeedbackid'])){
                				    	        
                				    	                            $id = $_GET['viewfeedbackid'];
                                                                    $sql = "SELECT * FROM `feedback` WHERE `id`='$id'";
                                                                    
                                                                    $result = $db->query($sql);
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $dateaaa = $row['createdate'];
                				    	                              $date=date_create($dateaaa);
                                                                    $D = date_format($date,"m/d/Y g:i A");
                				    	                              
                				    	                              $DT = explode(" ",$D);
                				    	                              
                                				    $lastname=$row['FirstName']; 
                                				   $fname = $row['LastName'];
                                				    $fulname = "          ".$lastname." ".$fname;
                				    	?>
                				    	
                				    	<div class="row">
                                           <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-10">
                                    <h4 class="card-title">FEEDBACK</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/admin/feedback.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">Back</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                         <div class="card-body">
                				        	<div class="row">
                        				    	    <div class="col-md-6">
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>NAME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['name'];  ?></h4>
                        				    	        
                        				    	        </div>
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>MAKE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['make']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	       
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>SUBMISSION DATE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $DT['0']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	   </div>
                        				    	   <div class="col-md-6">
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>MODEL:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['model']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	       
                        				    	         <div class="row mt-4">
                        				    	            <h4><b>YEAR:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['year']; ?></h4>
                        				    	        	
                        				    	        </div>
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>SUBMISSION TIME:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $DT['1']." ".$DT['2']; ?></h4>
                        				    	        
                        				    	        </div>
                        				    	         
                        				    	   </div>
                        				    	   
                				    	   
                				    	   	</div>
                				    	   		<div class="row">
                        				    	    <div class="col-md-12">
                        				    	        <div class="row mt-4">
                        				    	            <h4><b>MESSAGE:</b>   </h4>
                        				    	            <h4 class="pl-3"><?= $row['message'];  ?></h4>
                        				    	        
                        				    	        </div>
                				    	</div>
                				    	</div>
                				    
                				    	
                			
					
    					
                                      </div>
                        </div>
					</div>
					
					</div>
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                                            
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
                                         <?php   
                                            
                                            
                                            	   if(isset($_GET['updateuniiid'])){
                				    	        
                				    	                            $id = $_GET['updateuniiid'];
                                                                    $sql = "SELECT * FROM `car_sell` WHERE `id`='$id'";
                                                                    
                                                                    $result = $db->query($sql);
                                                                    
                                                                    if ($result->num_rows > 0) {
                				    	                              $row = $result->fetch_assoc();
                				    	                              $date = $row['createdate'];
                				    	                              $DT = explode(" ",$date);
                				    	                              
                                				    $lastname=$row['FirstName']; 
                                				   $fname = $row['LastName'];
                                				    $fulname = "          ".$lastname." ".$fname;
                				    	?>
                				    	
                				    	<div class="row">
                                           <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-10">
                                    <h4 class="card-title">FEEDBACK</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/admin/car_information.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">Back</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                         <div class="card-body">
                        				        	  <form action="clientdata.php" method="POST" enctype="multipart/form-data">
                       
                                               <div class="row">
                                                  <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="name" placeholder="Enter Name" value="<?= $row['name'];?>">
                                                     </div>
                                                  </div>
                                                  <br>
                                                  <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="email" placeholder="Enter Email" value="<?= $row['email'];?>">
                                                     </div>
                                                  </div>
                                               </div>
                                               <br>
                                               <div class="row">
                                                  <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="vin" placeholder="Enter VIN" value="<?= $row['vin'];?>">
                                                     </div>
                                                  </div>
                                                  <br>
                                                  <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="car_condition" placeholder="Enter Car Condition" value="<?= $row['car_condition'];?>">
                                                     </div>
                                                  </div>
                                               </div>
                                               <br>
                                                <div class="row">
                                                  <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="cylinder" placeholder="Enter Cylinders" value="<?= $row['car_condition'];?>">
                                                     </div>
                                                  </div>
                                                  <br>
                                                  <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="drive" placeholder="Enter Drive" value="<?= $row['drive'];?>">
                                                     </div>
                                                  </div>
                                               </div>
                                               <br>   
                                                 <div class="row">
                                                  <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="fuel" placeholder="Enter Fuel " value="<?= $row['fuel'];?>">
                                                     </div>
                                                  </div>
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="paint_color" placeholder="Enter Car Paint Color" value="<?= $row['paint_color'];?>">
                                                     </div>
                                                  </div>
                                               </div>
                                               <br> 
                                                <div class="row">
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="title_status" placeholder="Enter Title Status" value="<?= $row['vehicle_status'];?>">
                                                     </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="transmission" placeholder="Enter Car Transmission" value="<?= $row['transmission'];?>">
                                                     </div>
                                                  </div>
                                               </div>
                                               <br> 
                                                <div class="row">
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="make" placeholder="Enter Make" value="<?= $row['make'];?>">
                                                     </div>
                                                  </div>
                                                       <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="model" placeholder="Enter Car Model" value="<?= $row['model'];?>">
                                                     </div>
                                                  </div>
                                               </div><br>
                                                <div class="row">
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="year" placeholder="Enter year" value="<?= $row['year'];?>">
                                                     </div>
                                                  </div>
                                                       <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="body_type" placeholder="Enter Body type" value="<?= $row['body_type'];?>">
                                                     </div>
                                                  </div>
                                               </div><br>
                                                    <div class="row">
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="vehicle_status" placeholder="Enter vehicle status" value="<?= $row['vehicle_status'];?>">
                                                     </div>
                                                  </div>
                                                       <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="mileage" placeholder="Enter Mileage" value="<?= $row['mileage'];?>">
                                                     </div>
                                                  </div>
                                               </div><br>
                                                    <div class="row">
                                                       <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="Amount" placeholder="Enter Car Amount" value="<?= $row['amount'];?>">
                                                     </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="phone" placeholder="Enter phone" value="<?= $row['phone'];?>">
                                                     </div>
                                                  </div>
                                               </div><br>
                                               <br>
                                                    <div class="row">
                                                  <div class="col-md-6">
                                                     <div class="form-group">
                                                        <input class="form-control" type="text" name="id" placeholder="Enter phone" value="<?= $row['id'];?>" hidden>
                                                     </div>
                                                  </div>
                                               </div><br>
                                            
                                               <br><br>
                                               <div class="row">
                                                  <div class="modal-footer col-md-12" style="justify-content:center">
                                                     <button type="submit" class="btn btn-success btn-icon-split" name="Update_Sell_Product">
                                                     <span class="text">Submit</span></button>
                                                     <a class="btn btn-default" href="dashboard.php" style="background-color:Red;color:white;" class="mb-0">Back</a>
                                                  </div>
                                               </div>
                                            </form>
                                        				    
                                        				    	
                                        			
					
    					
                                      </div>
                        </div>
					</div>
					
					</div>
					
					
                				    	   <?php
                				    	   }}
                				    	   ?>
                                            
			
			
			
			
			
			
			
			
			
			
			
			
			
					
					
					
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
<?php
include ("footer.php");
?>
