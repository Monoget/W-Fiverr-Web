<?php
   include "sessions.php";
   include "header.php";
   include "sidebar.php";
   
   $status=NULL;
   
   if(isset($_GET['status']))
   {
    $status=$_GET['status'];
   }
   
   $query = "SELECT * from referral";
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
                        <th class="text-center">Name</th>
                         <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
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
                            <a href="viewdata.php?Deleterefferal=<?= $rec2['id'] ?>"><button type="submit" class="btn btn-outline-primary btn-rounded">View</button></a>
                          
                        </td>
                         <td>
                            <a href="viewdata.php?Updaterefferal=<?= $rec2['id'] ?>"><button type="submit" class="btn btn-outline-info btn-rounded">Update</button></a>
                          
                        </td>
                        <td>
                            <a href="clientdata.php?Deleterefferal=<?= $rec2['id'] ?>"><button type="submit" class="btn btn-outline-danger btn-rounded">Delete</button></a>
                          
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
                                        <button type="submit" class="btn btn-success btn-icon-split" name="delete_ref" style="background:red;border-color: red;color:white;">
                                        <span class="text">yes</span></button>
                                        <a class="btn btn-default" href="ref.php" style="background-color:#2bc155;color:white;" class="mb-0">No</a>
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