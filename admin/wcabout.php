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
                                    <h4 class="card-title">Cutomazied About Page</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/about.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">See View</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                <div class="card-body">
                                    
                                        <br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;">About Content</h2>
                                        <hr>
                                        <br>
                                    
                                        <div class="row">
                				    	    <div class="col-md-12">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Main Title:</b></label>
                                                             <input type = "text" class = "form-control" value="CARCENTIVE" name="title" required>
                                                        </div>
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Sub line:</b></label>
                                                             <input type = "text" class = "form-control" value="CarCentive makes it easy to buy your dream car." name="subline" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="wcaboutdescription">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                         
                				    	</div>
                				    	
                				    	<br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;">Our Mission</h2>
                                        <hr>
                                        <br>
                				    	
                				    	 <div class="row">
                				    	    <div class="col-md-12">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="ourmessiondessubmit">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                         
                				    	</div>
                				    	
                				    	<br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;">Info About Us</h2>
                                        <hr>
                                        <br>
                                        
                                        
                                        <div class="row">
                				    	    <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>VEHICLES IN STOCK:</b></label>
                                                             <input type = "number" class = "form-control"  name="des" required>
                                                        </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="VEHICLESINSTOCKSUBMIT">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                             <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>DEALER REVIEWS:</b></label>
                                                             <input type = "number" class = "form-control"  name="des" required>
                                                        </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="DEALERREVIEWSSUBMIT">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                             <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>HAPPY CUSTOMERS:</b></label>
                                                             <input type = "number" class = "form-control"  name="des" required>
                                                        </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="HAPPYCUSTOMERSSUBMIT">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                             <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>AWARDS:</b></label>
                                                             <input type = "number" class = "form-control"  name="des" required>
                                                        </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="AWARDSSUBMIT">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            
                			
                				    	</div>
                                        
                                        
                                        
                				    	<br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;">MEET OUR CEO & FOUNDER</h2>
                                        <hr>
                                        <br>
                				    	
                				    	
                				    	
                                    
                				    	<div class="row">
                				    	    <div class="col-md-12">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="ceo">Submit</button>
                                                
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
