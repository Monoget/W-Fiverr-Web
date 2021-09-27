<?php
   include "sessions.php";
   include "header.php";
   include "sidebar.php";
   
   $status=NULL;
   
   if(isset($_GET['status']))
   {
    $status=$_GET['status'];
   }
   
   $query = "SELECT * from car_sell";
   $rec = db::getRecords($query);
   
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
                  <button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">+ Add New</button>
               </div>
            </div>
            <div class="col-md-6">
                  <?php
                  if($status==1)
                    {
                      
                     ?>
               <div class="alert alert-success alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> Section successfully Updated.
               </div>
               <?php 
                  }
                  elseif($status==2)
                  {
                  
                  ?>
               <div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Danger!</strong> Section Is Not Updated!
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
                        <th class="text-center">Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Vin</th>
                        <th class="text-center">View</th>
                        <th class="text-center">Update</th>
                        <th class="text-center">Delete</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        if($rec!=NULL)
                        {
                        foreach($rec as $rec2)
                                                    
                        {
                        $id            = $rec2['id'];
                        $query = "SELECT * from product_images  where product_id='$id'";
                        $img= db::getRecords($query); 
                            
                        $query = "SELECT * from product_images  where product_id='$id'";
                        $image= db::getRecord($query);                                          
                        ?> 
                     <tr>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['id']; ?>
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['name']; ?>
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['email']; ?>
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['phone']; ?>
                           </div>
                        </td>
                     
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['vin']; ?>
                           </div>
                        </td>
                       
                        <td>
                            <a href="viewdata.php?uniiid=<?php echo $rec2['id']; ?>"><button type="button" class="btn btn-outline-primary btn-rounded">View</button></a>
                        </td>
                        <td>
                             <a href="viewdata.php?updateuniiid=<?php echo $rec2['id']; ?>"><button type="button" class="btn btn-outline-info btn-rounded">Update</button></a>
                        </td>
                        <td>
                         
                           <div class="text-center align-self-center">
                            
                               <a type="button" data-toggle="modal" data-target="#productdelete<?php echo $rec2['id']; ?>">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 6H5H21" stroke="#F46B68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#F46B68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                               </a> 
                              <div class="modal fade" id="productview<?php echo $rec2['id']; ?>">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content" style="width:640px">
                                    <div class="modal-header">
                                       <h3 class="modal-title">View Car Detail</h3>
                                       <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body" style="padding-bottom:0px;">
                                       <table id="example5" class="table table-striped patient-list mb-4 dataTablesCard fs-14 table-responsive">
                                          <thead>
                                            <th class="text-center">Cylinders</th>
                                            <th class="text-center">Drive</th>
                                            <th class="text-center">Fuel</th>
                                            <th class="text-center">Paint Color</th>
                                            <th class="text-center">Transmission</th>
                                            <th class="text-center">amount</th>
                                          </thead>
                                          <tr>
                                             <td>
                                                <div class="text-center align-self-center">
                                                   <?php echo $rec2['cylinder']; ?> 
                                                </div>
                                             </td>
                                             <td>
                                                <div class="text-center align-self-center">
                                                   <?php echo $rec2['drive']; ?> 
                                                </div>
                                             </td>
                                             <td>
                                                <div class="text-center align-self-center">
                                                   <?php echo $rec2['fuel']; ?> 
                                                </div>
                                             </td>
                                             <td>
                                                <div class="text-center align-self-center">
                                                   <?php echo $rec2['paint_color']; ?> 
                                                </div>
                                             </td>
                                             <td>
                                                <div class="text-center align-self-center">
                                                   <?php echo $rec2['transmission']; ?> 
                                                </div>
                                             </td>
                                              <td>
                                                <div class="text-center align-self-center">
                                                   <?php echo $rec2['amount']; ?> 
                                                </div>
                                             </td>
                                          </tr>
                                       </table>
                                        <div class="card">
                                         <div class="text-center align-self-center">
                                               <?php
                                               if($img!=NULL)
                                                 {
                                               foreach($img as $img2)
                                                    
                                                { 
                                               ?> 
                             
                                             <img src="<?php echo "../images/user/".$img2['image_name']; ?>" alt="" style="height:100px;width:200px;">
                                             <?php  }}?>
                                          </div>
                                        </div>
                                    </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                        </td>
                     </tr>
                        <div class="modal fade" id="productdelete<?php echo $rec2['id']; ?>">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h3 class="modal-title">Delete Car Info Details</h3>
                                 <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body" style="padding-bottom:0px;">
                                 <form action="action.php" method="POST">
                                    <center><h3>Are You Sure to Delete This Car Info Details?</h3></center>
                                    <input type="text" name="id" value="<?php echo $rec2['id'];?>" hidden>
                                    <br><br>
                                       <div class="row">
                                       <div class="modal-footer col-md-12" style="justify-content:center">
                                        <button type="submit" class="btn btn-success btn-icon-split" name="delete_car" style="background:red;border-color: red;color:white;">
                                        <span class="text">yes</span></button>
                                        <a class="btn btn-default" href="car_information.php" style="background-color:#2bc155;color:white;" class="mb-0">No</a>
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
   </div>
</div>

<div class="modal fade" id="basicModal">
   <div class="modal-dialog" role="document" style="max-width: 650px;">
      <div class="modal-content">
         <div class="modal-header">
            <h3 class="modal-title">Add New Car</h3>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
            </button>
         </div>
         <div class="modal-body" style="padding-bottom:0px;">
            <form action="clientdata.php" method="POST" enctype="multipart/form-data">
               
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Enter Name">
                     </div>
                  </div>
                  <br>
                  <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="Enter Email">
                     </div>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="vin" placeholder="Enter VIN">
                     </div>
                  </div>
                  <br>
                  <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="car_condition" placeholder="Enter Car Condition">
                     </div>
                  </div>
               </div>
               <br>
                <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="cylinder" placeholder="Enter Cylinders">
                     </div>
                  </div>
                  <br>
                  <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="drive" placeholder="Enter Drive">
                     </div>
                  </div>
               </div>
               <br>   
                 <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="fuel" placeholder="Enter Fuel ">
                     </div>
                  </div>
                <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="paint_color" placeholder="Enter Car Paint Color">
                     </div>
                  </div>
               </div>
               <br> 
                <div class="row">
                <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="title_status" placeholder="Enter Title Status">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="transmission" placeholder="Enter Car Transmission">
                     </div>
                  </div>
               </div>
               <br> 
                <div class="row">
                <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="make" placeholder="Enter Make">
                     </div>
                  </div>
                       <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="model" placeholder="Enter Car Model">
                     </div>
                  </div>
               </div><br>
                <div class="row">
                <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="year" placeholder="Enter year">
                     </div>
                  </div>
                       <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="body_type" placeholder="Enter Body type">
                     </div>
                  </div>
               </div><br>
                    <div class="row">
                <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="vehicle_status" placeholder="Enter vehicle status">
                     </div>
                  </div>
                       <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="mileage" placeholder="Enter Mileage">
                     </div>
                  </div>
               </div><br>
                    <div class="row">
                       <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="Amount" placeholder="Enter Car Amount">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" name="phone" placeholder="Enter phone">
                     </div>
                  </div>
               </div><br>
            
               <br><br>
               <div class="row">
                  <div class="modal-footer col-md-12" style="justify-content:center">
                     <button type="submit" class="btn btn-success btn-icon-split" name="add_Sell_Product">
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
   include "footer.php";
?>