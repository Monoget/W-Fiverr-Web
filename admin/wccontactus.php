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
                                    <h4 class="card-title">Cutomazied Home Page</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/index.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">See View</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                <div class="card-body">
                                    
                                        
                				    	
                				    	
                				    	<br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;">Contact Us Detail</h2>
                                        <hr>
                                        <br>
                				    	
                				    	
                				    	
                                    
                				    	<div class="row">
                				    	    <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>ADDRESS:</b></label>
                                                             <input type = "text" class = "form-control" value="" name="data">
                                                        </div>
                                                        
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="address">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>PHONE:</b></label>
                                                             <input type = "text" class = "form-control" value="" name="data">
                                                        </div>
                                                        
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="phone">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>EMAIL:</b></label>
                                                             <input type = "text" class = "form-control" value="" name="data">
                                                        </div>
                                                        
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="email">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>FAX:</b></label>
                                                             <input type = "text" class = "form-control" value="" name="data">
                                                        </div>
                                                        
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="fax">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            
                			
                				    	</div>
                				    	
                				    	
                				    	<br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;">HOURS OF OPERATION</h2>
                                        <hr>
                                        <br>
                                        
                                        <div class="row">
                				    	    <div class="col-md-4">
                				    	        <br>
                        				    	<hr>
                        				    	<h4 class="text-center" style="background-color:#94B91C; color: #004B7D;">Monday</h4>
                                                <hr>
                                                <br>
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Opening:</b></label>
                                                             <input type = "time" class = "form-control" value="" name="otm" id="input_starttime" required>
                                                        </div>
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Closing:</b></label>
                                                             <input type = "time" class = "form-control" value="" name="ctm" id="input_starttime" required>
                                                        </div>
                                                        
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="MonTime">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-4">
                				    	        <br>
                        				    	<hr>
                        				    	<h4 class="text-center" style="background-color:#94B91C; color: #004B7D;">Tuesday</h4>
                                                <hr>
                                                <br>
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Opening:</b></label>
                                                             <input type = "time" class = "form-control" value="" name="ott" required>
                                                        </div>
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Closing:</b></label>
                                                             <input type = "time" class = "form-control" value="" name="ctt" required>
                                                        </div>
                                                        
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="TueTime">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-4">
                				    	        <br>
                        				    	<hr>
                        				    	<h4 class="text-center" style="background-color:#94B91C; color: #004B7D;">Wednesday</h4>
                                                <hr>
                                                <br>
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Opening:</b></label>
                                                             <input type = "time" class = "form-control" value="" name="owt" required>
                                                        </div>
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Closing:</b></label>
                                                             <input type = "time" class = "form-control" value="" name="cwt" required>
                                                        </div>
                                                        
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="WedTime">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            
                				    	</div>
                				    	<div class="row">
                				    	    <div class="col-md-4">
                				    	        <br>
                        				    	<hr>
                        				    	<h4 class="text-center" style="background-color:#94B91C; color: #004B7D;">Thursday</h4>
                                                <hr>
                                                <br>
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Opening:</b></label>
                                                             <input type = "time" class = "form-control" value="" name="otht" required>
                                                        </div>
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Closing:</b></label>
                                                             <input type = "time" class = "form-control" value="" name="ctht" required>
                                                        </div>
                                                        
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="ThuTime">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-4">
                				    	        <br>
                        				    	<hr>
                        				    	<h4 class="text-center" style="background-color:#94B91C; color: #004B7D;">Friday</h4>
                                                <hr>
                                                <br>
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Opening:</b></label>
                                                             <input type = "time" class = "form-control" value="" name="oft" required>
                                                        </div>
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Closing:</b></label>
                                                             <input type = "time" class = "form-control" value="" name="cft" required>
                                                        </div>
                                                        
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="FriTime">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-4">
                				    	        <br>
                        				    	<hr>
                        				    	<h4 class="text-center" style="background-color:#94B91C; color: #004B7D;">Saturday</h4>
                                                <hr>
                                                <br>
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Opening:</b></label>
                                                             <input type = "time" class = "form-control" value="" name="ost" required>
                                                        </div>
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Closing:</b></label>
                                                             <input type = "time" class = "form-control" value="" name="cst" required>
                                                        </div>
                                                        
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="SatTime">Submit</button>
                                                
                                                </form>
                                                
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
