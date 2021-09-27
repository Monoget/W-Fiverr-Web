<?php
   include "sessions.php";
   include "header.php";
   include "sidebar.php";
   
   $status=NULL;
   
   if(isset($_GET['status']))
   {
    $status=$_GET['status'];
   }
   
 
   ?>
<!--**********************************
   Content body start
   ***********************************-->
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="page-titles">
         <div class="row">
            <div class="col-md-6">
               <div class="mr-auto d-none d-lg-block">
                  <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#basicModal">+ Add Customer</button>
               </div>
            </div>
            <div class="col-md-6">
                  <?php
                  if($status==1)
                    {
                      
                     ?>
               <div class="alert alert-success alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> Testimonial successfully Updated.
               </div>
               <?php 
                  }
                  elseif($status==2)
                  {
                  
                  ?>
               <div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Danger!</strong> Testimonial Is Not Updated!
               </div>
               <?php
                  } 
                ?>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-12">
            <div class="table-responsive">
               <table id="example5" class="table table-striped patient-list mb-4 dataTablesCard fs-14">
                  <thead>
                     <tr>
                        <th class="text-center">id</th>
                        <th class="text-center">Name</th>
                          <th class="text-center">Phone</th>
                          <th class="text-center">Email</th>
                          <th class="text-center">Time</th>
                          <th class="text-center">Date</th>
                        <th class="text-center">Action</th>
                        <th class="text-center">View</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     
                       $query = "SELECT * from Customer_data ";
                       $rec = db::getRecords($query);
   
                        if($rec!=NULL)
                        {
                        foreach($rec as $rec2)     
                        {
                            
                            $date = $rec2['createdate'];
                            $sep = explode(" ",$date);
                            
                            $date = $sep['0'];
                            $time = $sep['1'];
                            
                            
                            $newDate = date("m/d/Y", strtotime($date));
                            $newtime = date("h:i A", strtotime($time));
                             
                            $fulname = $rec2['FirstName']." ".$rec2['LastName'];
                        ?> 
                     <tr>
                        <td>
                           <div class="text-center align-self-center" style="width:15px;">
                              <?php echo $rec2['id']; ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $fulname ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['Phone']; ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['Eamil']; ?> 
                           </div>
                        </td>
                         <td>
                           <div class="text-center align-self-center">
                              <?php $times = explode(":",$time);
                                    echo $newtime;   ?>
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?= $newDate ?>
                           </div>
                        </td>
                        <td>
                        <div class="text-center align-self-center" style="width:55px;">
                           <a type="button"  data-toggle="modal" data-target="#orderdelete<?php echo $rec2['id']; ?>">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M3 6H5H21" stroke="#F46B68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#F46B68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </a>
                             <a type="button"  data-toggle="modal" data-target="#productedit<?php echo $rec2['id']; ?>">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </a>
                              
                        </div> 
                        </td>
                        <td> <a  href="viewdata.php?customerid=<?php echo $rec2['id']; ?>"><button type="button" class="btn btn-success btn-rounded" name="Approved" Alt="Not Found"> view </button></a></td>
                       
                                <!--Edit Modal -->
                     <div class="modal fade" id="productedit<?php echo $rec2['id']; ?>">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h3 class="modal-title">Edit Customer</h3>
                                 <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body" style="padding-bottom:0px;">
                                 <form action="clientdata.php" method="POST" enctype="multipart/form-data">
                                
                                     <br>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>First Name</label>
                                             <input class="form-control" type="text" name="fname" placeholder="Enter Name" value="<?php echo $rec2['FirstName']; ?>">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Last Name</label>
                                             <input class="form-control" type="text" name="lname" placeholder="Enter Name" value="<?php echo $rec2['LastName']; ?>">
                                          </div>
                                       </div>
                                       
                                     </div><br>
                                     <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Email</label>
                                             <input class="form-control" type="email" name="Email" placeholder="Enter Name" value="<?php echo $rec2['Eamil']; ?>">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Phone</label>
                                             <input class="form-control" type="number" name="phone" placeholder="Enter Name" value="<?php echo $rec2['Phone']; ?>">
                                          </div>
                                       </div>
                                       
                                     </div>
                                     
                                     <br>
                                     <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label>Address</label>
                                             <input class="form-control" type="text" name="Address" placeholder="Enter Position" value="<?php echo $rec2['Address']; ?> ">
                                          </div>
                                       </div>
                                    </div><br>
                                    <div class="row" style="justify-content:center;">
                                       <br><br>
                                       <div class="col-md-12">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <label> Image:</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                <div class="col-md-12">
                               <input class="form-control"  type="file" multiple name="file" style="border-radius:10px;" value="<?php echo $rec2['Image']; ?>">
                               </div>
                                  </div>
                                   <div class="row mt-4">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label>Birthday Date:</label>
                                            <input class="form-control" type="date" name="Birthday" placeholder="Birthday Date" value="<?php echo $rec2['Birthday']; ?>" >
                                         </div>
                                      </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label>Aniversery Date:</label>
                                            <input class="form-control" type="date" name="Anivery" placeholder="Aniversery Date" value="<?php echo $rec2['AnniverseryDay']; ?>" >
                                         </div>
                                      </div>
                                    </div>
                                    
                                     <div class="row">
                                             <div class="col-md-12">
                                            
                                                     <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Customer Notes</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tect"><?php echo $rec2['description']; ?></textarea>
                                                      </div>
                                              </div>
                                      </div>
                                      <input type="text" name="id" value="<?php echo $rec2['id']?>" hidden>
                                       <div class="row">
                                       <div class="modal-footer col-md-12" style="justify-content:center">
                                          <button type="submit" class="btn btn-success btn-icon-split" name="edit_Customer">Update</button>
                                          <a class="btn btn-default" href="https://www.carcentive.com/admin/customer_data.php" style="background-color:Red;color:white;" class="mb-0">Back</a>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     </tr>
                     <div class="modal fade" id="orderdelete<?php echo $rec2['id']; ?>">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h3 class="modal-title">Delete Customer</h3>
                                 <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body" style="padding-bottom:0px;">
                                 <form action="clientdata.php" method="POST">
                                    <center>
                                       <h3>Are You Sure to Delete This Customer ?</h3>
                                    </center>
                                    <input type="text" name="delete_id" value="<?php echo $rec2['id'];?>" hidden>
                                    <br><br>
                                    <div class="row">
                                       <div class="modal-footer col-md-12" style="justify-content:center">
                                          <button type="submit" class="btn btn-success btn-icon-split" name="delete_home_testimonial" style="background:red;border-color: red;color:white;">
                                          <span class="text">Yes</span></button>
                                          <a class="btn btn-default" href="order.php" style="background-color:#2bc155;color:white;" class="mb-0">No</a>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php } }?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
   <br>

                                    				    	<hr>

                                    				    	<h3 class="text-center" style="background-color:#94B91C; color: #004B7D;">Request For DealerShip </h3>

                                                            <hr>

                                                            <br>
      
      
      
       <div class="row mt-5">
         <div class="col-xl-12">
             <div class="table-responsive">
               <table id="example5" class="table table-striped patient-list mb-4 dataTablesCard fs-14">

                                                              <thead>

                                                                <tr>

                                                                  <th scope="col">#</th>

                                                                  <th scope="col">Name</th>

                                                                  <th scope="col">Phone</th>
                                                                    <th scope="col">Time</th>
                                                                  <th scope="col">Date</th>

                                                                  <th scope="col">View</th>

                                                                   <th scope="col">Update</th>

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

                                                                    

                                                                     $dtae = $row['client'];
                                                                    //  var_dump($dtae);

                                                                     $seprate = explode(' ',$dtae);

                                                                     $date = $seprate['0'];
                                                                     $time = $seprate['1'];
                                                                     
                                                                     $newDate = date("m/d/Y", strtotime($date));

                                                                     $Time = $seprate['1'];
                                                                     $timeseprate = explode(":",$Time);
                                                                     $RealTime = $timeseprate['0'].":".$timeseprate['1']." ".$seprate['2'];
                                                                    
                                                                    ?>

                                                                    <tr>

                                                                  <th scope="row"><?= $counter;?></th>

                                                                  <td><?= $row['name']." ".$row['lname'];?></td>

                                                                  <td><?= $emailclient?></td>
                                                                    <td><?=  $RealTime ?></td>
                                                                  <td><?=  $newDate ?></td>

                                                                  <td><a href="viewdata.php?Delid1=<?= $row['id'];?>"><button type="submit" class="btn btn-outline-primary" name="Approve">View</button></a></td>

                                                             

                                                                   <td><a href="viewdata.php?updateid=<?= $row['id'];?>"><button type="submit" class="btn btn-outline-info" name="update">Update</button></a></td>

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
      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
       <br>

                                    				    	<hr>

                                    				    	<h3 class="text-center" style="background-color:#94B91C; color: #004B7D;">Request For Consultation </h3>

                                                            <hr>

                                                            <br>
      
      
      
      
      
       <div class="row mt-5">
         <div class="col-xl-12">
             <div class="table-responsive">
                

                        				    	         

                        				    	            <table id="example5" class="table table-striped patient-list mb-4 dataTablesCard fs-14">

                                                              <thead>

                                                                <tr>

                                                                    

                                                                  <th scope="col">#</th>

                                                                  <th scope="col">Name</th>

                                                                  <th scope="col">phone</th>
                                                                  <th scope="col">Time</th>
                                                                  <th scope="col">Date</th>

                                                                  <th scope="col">View</th>

                                                                  <th scope="col">Update</th>

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

                                                                         $date = $row['time'];

                                                                         $seprate = explode(" ",$date);
                                                                        $realDate = $seprate['0'];
                                                                        $newDate = date("m/d/Y", strtotime($realDate));

                                                                                                 $counter = $counter + 1;                                       

                                                                    $emailclient=$row['phone'];

                                                                    $name = $row['name'];

                                                                    $lname = $row['lname'];

                                                                    

                                                                    $fullName = $name." ".$lname;

                                                                    ?>

                                                                    <tr>

                                                                  <th scope="row"><?= $counter;?></th>

                                                                  <td><?= $fullName?></td>

                                                                  <td><?= $emailclient?></td>

                                                                  <td><?php $time = $seprate['1'];
                                                                            $times = explode(":",$time);
                                                                            echo $times['0'].":".$times['1']." ".$seprate['2'];
                                                                  ?></td>
                                                                    <td><?= $newDate ?></td>
                                                                  <td><a href="viewdata.php?Conid1=<?= $row['id'];?>"><button type="submit" class="btn btn-outline-primary" name="Approve">View</button></a></td>

                                                       

                                                                  <td><a href="viewdata.php?conupdateid=<?= $row['id'];?>"><button type="submit" class="btn btn-outline-info" name="update">Update</button></a></td>

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
      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
           
   <br>

                                    				    	<hr>

                                    				    	<h3 class="text-center" style="background-color:#94B91C; color: #004B7D;">Contact Us Message</h3>

                                                            <hr>

                                                            <br>
      
      
      
       <div class="row mt-5">
         <div class="col-xl-12">
             <div class="table-responsive">
               <table id="example5" class="table table-striped patient-list mb-4 dataTablesCard fs-14">

                                                              <thead>

                                                                <tr>

                                                                  <th scope="col">#</th>

                                                                  <th scope="col">Name</th>

                                                                   <th scope="col">Email</th>
                                                                    <th scope="col">Phone</th>
                                                                    <th scope="col">Message</th>
                                                                    <th scope="col">Time</th>
                                                                    <th scope="col">Date</th>
                                                                    
                                                                  

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

                                                               		  

                                                                    $sql = "SELECT * FROM `messagecontactus` ORDER BY `id` DESC";

                                                                    $result = $db->query($sql);

                                                                    

                                                                    if ($result->num_rows > 0) {

                                                                      $counter=0;

                                                                      while($row = $result->fetch_assoc()) {

                                                                        $counter = $counter + 1;

                                                                                                                                        

                                                                    $emailclient=$row['phone'];

                                                                    

                                                                     $dtae = $row['createdate'];

                                                                     $seprate = explode(' ',$dtae);

                                                                     $date = $seprate['0'];
                                                                     $time = $seprate['1'];
                                                                     
                                                                     $newDate = date("m/d/Y", strtotime($date));
                                                                     $newtime = date("h:i A", strtotime($time));
                                                                    
                                                                  
                                                                     $Time = $seprate['1'];
                                                                     $timeseprate = explode(":",$Time);
                                                                     $RealTime = $timeseprate['0'].":".$timeseprate['1'];
                                                                    
                                                                    ?>

                                                                    <tr>

                                                                  <th scope="row"><?= $counter;?></th>

                                                                  <td><?= $row['name']?></td>

                                                                  <td><?= $row['email']?></td>
                                                                    <td><?= $row['phone']?></td>
                                                                  <td><?= $row['message']?></td>

                                                                <td><?= $newtime?></td>
                                                                <td><?= $newDate ?></td>

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
      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
   </div>
</div>



<!-- Modal -->
<div class="modal fade" id="basicModal">
   <div class="modal-dialog" role="document" style="max-width: 650px;">
      <div class="modal-content">
         <div class="modal-header">
            <h3 class="modal-title">Add New Customer</h3>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
            </button>
         </div>
         <div class="modal-body" style="padding-bottom:0px;">
            <form action="clientdata.php" method="POST" enctype="multipart/form-data">
             
               <br><br>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                         <label>First Name</label>
                        <input class="form-control" type="text" name="fname" placeholder="Enter First Name">
                     </div>
                  </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label>Last Name</label>
                        <input class="form-control" type="text" name="lname" placeholder="Enter Last Name">
                     </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                         <label>Email</label>
                        <input class="form-control" type="text" name="Email" placeholder="Enter your Email">
                     </div>
                  </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label>Phone</label>
                        <input class="form-control" type="number" name="phone" placeholder="Enter Phone Number">
                     </div>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                     <div class="form-group">
                         <label>Address</label>
                        <input class="form-control" type="tect" name="Address" placeholder="Enter Address">
                     </div>
                  </div>
                </div>
                
                 <div class="row" style="justify-content:center;">
                  <br>
                  <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                           <label>Image:</label>
                        </div>
                     </div>
                  </div>
               </div>
                <div class="row">
                  <div class="col-md-12">
                     <input class="form-control" type="file" multiple name="file" style="border-radius:10px;">
                  </div>
               </div>
                <div class="row mt-4">
                 <div class="col-md-6">
                     <div class="form-group">
                         <label>Birthday Date:</label>
                        <input class="form-control" type="date" name="Birthday" placeholder="Birthday Date">
                     </div>
                  </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label>Aniversery Date:</label>
                        <input class="form-control" type="date" name="Anivery" placeholder="Aniversery Date">
                     </div>
                  </div>
                </div>
                <br> 
                <div class="row">
                         <div class="col-md-12">
                        
                                 <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Customer Notes</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tect"></textarea>
                                  </div>
                          </div>
                  </div>
                              
               <br><br>
               <div class="row">
                  <div class="modal-footer col-md-12" style="justify-content:center">
                     <button type="submit" class="btn btn-success btn-icon-split" name="Customerdata">Submit</button>
                     <a class="btn btn-default" href="customer_data.php" style="background-color:Red;color:white;" class="mb-0">Back</a>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php
   include "footer.php";
   ?>