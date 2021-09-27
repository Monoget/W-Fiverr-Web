<?php
   include "sessions.php";
   include "header.php";
   include "sidebar.php";
   
   $status=NULL;
   
   if(isset($_GET['status']))
   {
    $status=$_GET['status'];
   }
   
   $query = "SELECT * from quote";
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
      </div>
      <div class="row">
         <div class="col-xl-12">
            <div class="table-responsive">
               <table id="example5" class="table table-striped patient-list mb-4 dataTablesCard fs-14">
                  <thead>
                     <tr>
                        <th class="text-center">Id</th>
                         <th class="text-center">First Name</th>
                          <th class="text-center">Last Name</th>
                         <th class="text-center">Email</th>
                        <th class="text-center">Phone Number</th>
                         <th class="text-center">Best Time To Reach</th>
                           <th class="text-center">Monthly Budget</th>
                            <th class="text-center">Down Payment</th>
                          <th class="text-center">Type of Purchase</th>
                          <th class="text-center">Date & TIme</th>
                           <th class="text-center">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        if($rec!=NULL)
                        {
                        foreach($rec as $rec2)
                                                    
                        {                                        
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
                              <?php echo $rec2['lname']; ?> 
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
                              <?php echo $rec2['time']; ?> 
                         </div>
                        </td>
                         <td>
                          <div class="text-center align-self-center">
                              <?php echo $rec2['budget']; ?> 
                         </div>
                        </td>
                         <td>
                          <div class="text-center align-self-center">
                              <?php echo $rec2['amount']; ?> 
                         </div>
                        </td>
                         <td>
                          <div class="text-center align-self-center">
                              <?php echo $rec2['dealership']; ?> 
                         </div>
                        </td>
                        <td>
                          <div class="text-center align-self-center">
                              <?php echo $rec2['createdate']; ?> 
                         </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                               <a type="button" data-toggle="modal" data-target="#productdelete<?php echo $rec2['id']; ?>">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 6H5H21" stroke="#F46B68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#F46B68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                               </a> 
                           </div>
                        </td>
                     </tr>
                        <div class="modal fade" id="productdelete<?php echo $rec2['id']; ?>">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h3 class="modal-title">Delete Form Details</h3>
                                 <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body" style="padding-bottom:0px;">
                                 <form action="action.php" method="POST">
                                    <center><h3>Are You Sure to Delete This Form Detail?</h3></center>
                                    <input type="text" name="id" value="<?php echo $rec2['id'];?>" hidden>
                                    <br><br>
                                       <div class="row">
                                       <div class="modal-footer col-md-12" style="justify-content:center">
                                        <button type="submit" class="btn btn-success btn-icon-split" name="delete_quote" style="background:red;border-color: red;color:white;">
                                        <span class="text">yes</span></button>
                                        <a class="btn btn-default" href="get.php" style="background-color:#2bc155;color:white;" class="mb-0">No</a>
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