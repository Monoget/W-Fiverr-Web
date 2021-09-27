<?php

   include("sessions.php");

   include("header.php");

   include("sidebar.php");





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

                <div class="row">

                    <div class="col-xl-12 col-lg-12">

                        <div class="card">

                            <div class="card-header">

                                <div class="col-md-10">

                                    <h4 class="card-title">Scheduling Appoinments</h4>

                                </div>

                       

                            </div>

                            

                            

                            

                                <div class="card-body">

                				    	

                				    	

                				    	<div class="row">

                				    	    <div class="col-md-6">

                				    	         <form action="" method="GET">

                                                    <p  style="text-align:center;">

                                                      <button type="submit" class="btn btn-outline-primary" name="Consultation">Consultation</button>

                                                    </p>

                                                </form>

                    				    	    

                                                

                                            </div>

                                            <div class="col-md-6">

                                                

                                                 <form action="" method="GET">

                                                      <p style="text-align:center;">

                                                      <button type="submit" class="btn btn-outline-primary" name="Dealership">Dealership</button>

                                                        </p>

                                                </form>

                                                

                                               

                                            </div>

                                            

                                            

                                            

                				    	</div>

                				    
                				    	

                				    	<div class="row">

                				    	    <div class="col-md-12">

                				    	    <?php

                				    	        if(isset($_GET['Dealership'])){

                				    	        ?>

                				    	        

                				    	        

                				    	        

                				    	        

                				    	   

                				    	        <div class="row">

                        				    	         <div class="col-md-12">

                        				    	             <br>

                                    				    	<hr>

                                    				    	<h3 class="text-center" style="background-color:#94B91C; color: #004B7D;">Request For DealerShip </h3>

                                                            <hr>

                                                            <br>

                        				    	         

                        				    	            <table class="table table-responsive">

                                                              <thead>

                                                                <tr>

                                                                  <th scope="col">#</th>

                                                                  <th scope="col">Name</th>
                                                                <th scope="col">Email</th>
                                                                  <th scope="col">Phone</th>

                                                                  <th scope="col">Date</th>

                                                                  <th scope="col">View</th>


                                                                  <th scope="col">Delete</th>

                                                                </tr>

                                                              </thead>

                                                              <tbody>

                                                                 <?php

                                                                    

                                                                     $dbuser = 'carcenti_carcentive_admin';

                                                               			$dbpwd = 'atecco@123';

                                                               			$dbname = 'carcenti_carcentive2';

                                                               			$dbserver = 'localhost';

                                                               		

                                                               		    $db = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);

                                                               

                                                               

                                                               		    if ($db->connect_errno > 0){

                                                               		        echo "Failed to connect to MySQL: " . $db->connect_error;

                                                               		    }

                                                               		  

                                                                    $sql = "SELECT * FROM `DealerAppo` ORDER BY `id` DESC";

                                                                    $result = $db->query($sql);

                                                                    

                                                                    if ($result->num_rows > 0) {

                                                                      $counter=0;

                                                                      while($row = $result->fetch_assoc()) {

                                                                        $counter = $counter + 1;

                                                                                                                                        

                                                                    $emailclient=$row['phone'];

                                                                    

                                                                     $dtae = $row['createdate'];

                                                                     $seprate = explode(' ',$dtae);

                                                                    //  $date = ;

                                                                     $Time = $seprate['1'];

                                                                    ?>

                                                                    <tr>

                                                                  <th scope="row"><?= $counter;?></th>

                                                                  <td><?= $row['name']." ".$row['lname'];?></td>
                                                                  <td><?= $row['email'];?></td>
                                                                  <td><?= $emailclient?></td>

                                                                  <td><?php $d= $seprate['0']; 
                                                                  
                                                                  $date=date_create($d);
                                                                    echo date_format($date,"d/m/Y");
                                                                  
                                                                  
                                                                  ?></td>

                                                                  <td><a href="viewdata.php?Delid=<?= $row['id'];?>"><button type="submit" class="btn btn-outline-primary" name="Approve">View</button></a></td>


                                                                    <td><a href="clientdata.php?Deleteid=<?= $row['id'];?>"><button type="submit" class="btn btn-outline-danger" name="delete">Delete</button></a></td>

                                                                </tr>

                                                                  <?php

                                                                  

                                                                      }

                                                                    } else {

                                                                      

                                                                    }

                                                                      

                                                                  

                                                                  ?>

                                                              </tbody>

                                                            </table>

                        				    	        </div>

                        				    	       

                				    	       </div>

                				    	           

                				    	           

                				    	           

                				    	        <?php    

                				    	        }elseif(isset($_GET['Consultation']))

                				    	        {

                				    	            ?>

                				    	            <div class="row">

                        				    	         <div class="col-md-12">

                        				    	             <br>

                                    				    	<hr>

                                    				    	<h3 class="text-center" style="background-color:#94B91C; color: #004B7D;">Request For Consultation </h3>

                                                            <hr>

                                                            <br>

                        				    	         

                        				    	            <table class="table table-responsive">

                                                              <thead>

                                                                <tr>

                                                                    

                                                                  <th scope="col">#</th>

                                                                  <th scope="col">Name</th>

                                                                <th scope="col">Email</th>
                                                                  <th scope="col">phone</th>

                                                                  <th scope="col">Budget</th>

                                                                  <th scope="col">View</th>

                                                                  <!--<th scope="col">Approve</th>-->

                                                                  <!--<th scope="col">Update</th>-->

                                                                  <th scope="col">Delete</th>

                                                                </tr>

                                                              </thead>

                                                              <tbody>

                                                                

                                                                    <?php

                                                                    

                                                                     $dbuser = 'carcenti_carcentive_admin';

                                                               			$dbpwd = 'atecco@123';

                                                               			$dbname = 'carcenti_carcentive2';

                                                               			$dbserver = 'localhost';

                                                               		

                                                               		    $db = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);

                                                               

                                                               

                                                               		    if ($db->connect_errno > 0){

                                                               		        echo "Failed to connect to MySQL: " . $db->connect_error;

                                                               		    }

                                                               		  

                                                                    $sql = "SELECT * FROM `quote` ORDER BY `id` DESC";

                                                                    

                                                                    $result = $db->query($sql);

                                                                    

                                                                    if ($result->num_rows > 0) {

                                                                      $counter = 0;

                                                                      while($row = $result->fetch_assoc()) {

                                                                         $date = $row['createdate'];
                                                                         

                                                                         $seprate = explode(" ",$date);

                                                                        

                                                                                                 $counter = $counter + 1;                                       

                                                                    $emailclient=$row['phone'];

                                                                    $name = $row['name'];

                                                                    $lname = $row['lname'];

                                                                    

                                                                    $fullName = $name." ".$lname;

                                                                    ?>

                                                                    <tr>

                                                                  <th scope="row"><?= $counter;?></th>

                                                                  <td><?= $fullName?></td>
                                                                <td><?= $row['email']?></td>
                                                                  <td><?= $emailclient?></td>

                                                                  <td>$<?= $row['budget']?></td>

                                                                  <td><a href="viewdata.php?Conid=<?= $row['id'];?>"><button type="submit" class="btn btn-outline-primary" name="Approve">View</button></a></td>

                                                               

                                                                    <td><a href="clientdata.php?conDeleteid=<?= $row['id'];?>"><button type="submit" class="btn btn-outline-danger" name="delete">Delete</button></a></td>

                                                                  

                                                                  

                                                                  

                                                                  </tr>

                                                                  <?php

                                                                  

                                                                      }

                                                                    } else {

                                                                      echo "0 results";

                                                                    }

                                                                      

                                                                  

                                                                  ?>

                                                                  

                                                                

                                                              </tbody>

                                                            </table>

                        				    	        </div>

                        				    	       

                				    	       </div>

                				    	             

                				    	             

                				    	             

                				    	             

                				    	             

                				    	             

                				    	       <?php      

                				    	        }else{

                				    	        

                				    	        ?>

                				    	            <div class="alert alert-success mt-3">

                				    	            

                				    	            <div class="mt-3">

                				    	                <p style="text-align:center;"> 

                                                             Select Any One <strong>Option</strong>

                                                         </p>

                                                    </div>

                                                 

                                                    </div>

                				    	        <?php    

                				    	        }

                				    	    

                				    	    

                				    	        

                				    	        ?>

                                                

                                            </div>

                                            

                                            </div>

                                            

                				    	</div>

                				    	

                				    

                				    	

                			

					

    					

                                </div>

                        </div>

					</div>

                </div>

            </div>

        </div>

        <!--**********************************

            Content body end

        ***********************************-->

        

<?php

include ("footer.php");

?>

