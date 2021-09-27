<?php
   include "sessions.php";
   include "header.php";
   include "sidebar.php";
   
   $status=NULL;
   
   if(isset($_GET['status']))
   {
    $status=$_GET['status'];
   }
   
   $query = "SELECT * from orders ";
   $rec = db::getRecords($query);
   
   ?>
<!--**********************************
   Content body start
   ***********************************-->
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
         <div class="mr-auto d-none d-lg-block">
         </div>
                <div class="col-md-12">
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
      <div class="row">
         <div class="col-xl-12">
            <div class="table-responsive">
               <table id="example5" class="table table-striped patient-list mb-4 dataTablesCard fs-14">
                  <thead>
                     <tr>
                        <th class="text-center">order id</th>
                        <th class="text-center">Name</th>
                         <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Service</th>
                        <th class="text-center">Total Bill</th>
                        <th class="text-center">payment status</th>
                        <th class="text-center">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        if($rec!=NULL)
                        {
                        foreach($rec as $rec2)     
                        {
                            $order_id=$rec2['order_id'];
                        ?> 
                     <tr>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['order_id']; ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['username']; ?> 
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
                              <?php echo $rec2['service']; ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['amount']; ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['payment_status']; ?> 
                           </div>
                        </td>
                        <td>
                        <div class="text-center align-self-center">
                           <a type="button"  data-toggle="modal" data-target="#orderdelete<?php echo $rec2['order_id']; ?>">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M3 6H5H21" stroke="#F46B68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#F46B68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </a>
                        </div>
                        </td>
                     </tr>
                     <div class="modal fade" id="orderdelete<?php echo $rec2['order_id']; ?>">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h3 class="modal-title">Delete Order Histoy</h3>
                                 <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body" style="padding-bottom:0px;">
                                 <form action="action.php" method="POST">
                                    <center>
                                       <h3>Are You Sure to Delete This Order Histoy?</h3>
                                    </center>
                                    <input type="text" name="delete_id" value="<?php echo $rec2['order_id'];?>" hidden>
                                    <br><br>
                                    <div class="row">
                                       <div class="modal-footer col-md-12" style="justify-content:center">
                                          <button type="submit" class="btn btn-success btn-icon-split" name="delete_order" style="background:red;border-color: red;color:white;">
                                          <span class="text">Cancel</span></button>
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
   </div>
</div>
<?php
   include "footer.php";
?>