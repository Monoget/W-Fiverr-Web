<?php
   include("sessions.php");
   include("header.php");
   include("sidebar.php");
   require_once ("database.php");

//   $status=NULL;

//   if(isset($_GET['status']))
//   {
//     $status=$_GET['status'];
//   }
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
                                    <h4 class="card-title">Cutomazied Refferal Program Page</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/referral.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">See View</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                <div class="card-body">
                                    
                                        
                				    	<br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;">Referral Program</h2>
                                        <hr>
                                        <br>
                				    	
                				    	<div class="row">
                				    	    <div class="col-md-6">
                				    	        
                    				    	    <form action="cutomization.php" method="post"  enctype="multipart/form-data">
                                                        <div class="file-upload-wrapper">
                                                            <label for = "name"><b>Image:</b></label><br>  
                                                            <input type="file" id="input-file-now" class="file-upload" name="file" required/>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="PRICENEGOTIATIONSAVE">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-6">
                                              
                                                    <img class="img-fluid center-block" src="../images/referral.png" alt="">
                                                
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
