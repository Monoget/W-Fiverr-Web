<?php
   include("sessions.php");
   include("header.php");
   include("sidebar.php");

  $status=NULL;
   
   if(isset($_GET['status']))
   {
    $status=$_GET['status'];
   }
   
   $id=$_GET['id'];
   
   $query="SELECT * from home_slider where id='$id'";
   $rec=db::getRecord($query);

?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Section</a></li>
                         <?php
               if($status==1)
               {
               
               ?>
            <p style="color:green;">Section Updated.</p>
            <?php 
               }elseif($status==2){
                   
                   ?>
            <p style="color:red;">Error! Section Not Updated.</p>
            <?php
               } ?>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Home-Slider</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                <form action="action.php" method="post" enctype="multipart/form-data">
                   <div class="row" style="justify-content:center;">
                    <h3>Edit Slider</h3><br><br>
                     <div class="col-md-1 col-sm-0 col-xs-0"></div>
                     <div class="col-md-10">
                        <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md-10">
                              <label style="margin-left: 30px; font-weight: bold;">Image:</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-1 col-sm-0 col-xs-0"></div>
                     <div class="col-md-10">
                        <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md-10">
                              <div class="form-group">
                                 <input class="form-control"  type="file" multiple name="file" style="border-radius:10px;">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-1 col-sm-0 col-xs-0"></div>
                     <div class="col-md-10">
                        <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md-10">
                              <label style="margin-left: 30px; font-weight: bold;">Title:</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-1 col-sm-0 col-xs-0"></div>
                     <div class="col-md-10">
                        <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md-10">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="title" value="<?php echo $rec['title']; ?>">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-1 col-sm-0 col-xs-0"></div>
                     <div class="col-md-10">
                        <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md-10">
                              <label style="margin-left: 30px; font-weight: bold;">Description:</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-1 col-sm-0 col-xs-0"></div>
                     <div class="col-md-10">
                        <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md-10">
                              <textarea  style="margin-left: 3px;" rows="10" cols="100" name="description" ><?php echo $rec['description']; ?></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
                    <input type="text" name="id" value="<?php echo $rec['id'];?>" hidden>
                  <br><br>
                  <div class="row">
                     <div class="col-md-5"></div>
                     <div class="col-md-1"  style="margin-left: 3px;" >
                        <button type="submit" class="btn btn-success btn-icon-split" name="edit_home_slider" style="margin-left: -45px;">
                        <span class="text">Submit</span></button>   
                     </div>
                        <a class="btn btn-default" href="dashboard.php" style="background-color:Red;color:white;" class="mb-0">Back</a>
                                    </div>
                                  </form>
                                <br><br>
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
