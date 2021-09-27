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
                                    <h4 class="card-title">Cutomazied Request A Consultation Page</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/quote.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">See View</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                <div class="card-body">
                				    	<br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;">Request A Consultation </h2>
                                        <hr>
                                        <br>
                				    	
                				    	<div class="row">
                				    	    <div class="col-md-6">
                				    	        
                    				    	    <form action="cutomization.php" method="post"  enctype="multipart/form-data">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Main Title:</b></label>
                                                             <input type = "text" class = "form-control" value="WE PROVIDE THE BEST PROCESS." name="mh" required>
                                                        </div>
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Bullet 1:</b></label>
                                                             <input type = "text" class = "form-control" value="Agent led negotiations" name="sh1" required>
                                                        </div>
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Bullet 2:</b></label>
                                                             <input type = "text" class = "form-control" value="Access to a large selection of dealerships and private sellers" name="sh2" required>
                                                        </div>
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Bullet 3:</b></label>
                                                             <input type = "text" class = "form-control" value="Contract review" name="sh3" required>
                                                        </div>
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Bullet 4:</b></label>
                                                             <input type = "text" class = "form-control" value="Side by side assistance on purchases" name="sh4" required>
                                                        </div>
                                                        <div class="file-upload-wrapper">
                                                          <input type="file" id="input-file-now" class="file-upload" name="file" required/>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="wcrequestconsultation">Submit</button>
                                                   <br>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                
                                                <div class="row">
                                                    <div class="col-md-10 offset-md-2">
                                                        <img class="img-fluid center-block" src="../images/car/22.jpg" alt="">
                                                    </div>
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
