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
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;"> Main Heading</h2>
                                        <hr>
                                        <br>
                                    
                                        <div class="row">
                				    	    <div class="col-md-12">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Main Title:</b></label>
                                                             <input type = "text" class = "form-control" value="WHY CARCENTIVE?" name="mh" required>
                                                        </div>
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Sub Title:</b></label>
                                                             <input type = "text" class = "form-control" value="YOU WOULDN'T BUY A HOUSE WITHOUT AN AGENT. SO WHY WOULD YOU BUY A CAR WITHOUT AN AGENT?" name="sh" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="PRICENEGOTIATION">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                         
                				    	</div>
                				    	
                				    	<br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;"> Sub Heading</h2>
                                        <hr>
                                        <br>
                				    	
                				    	<div class="row">
                				    	    <div class="col-md-6">
                				    	        
                    				    	    <form action="cutomization.php" method="post" enctype="multipart/form-data">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Main Title:</b></label>
                                                             <input type = "text" class = "form-control" value="STRESS-FREE & PERSONALIZED AUTO PURCHASING SERVICE" name="mh" required>
                                                        </div>
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Sub Title:</b></label>
                                                             <input type = "text" class = "form-control" value="Stress-free & personalized auto leasing service" name="sh" required>
                                                        </div>
                                                        <div class="file-upload-wrapper">
                                                          <input type="file" id="input-file-now" class="file-upload" name="file" required/>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="h2r">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-6">
                                              
                                                    <img class="img-fluid center-block" src="../images/car/11.png" alt="">
                                                
                                            </div>
                                            
                                         
                				    	</div>
                				    	<br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;"> Cards On Home Page</h2>
                                        <hr>
                                        <br>
                				    	
                				    	
                				    	
                                    
                				    	<div class="row">
                				    	    <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="PRICE NEGOTIATION" name="mh" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="sh" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="PRICENEGOTIATIONSAVE1">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="A CLEAR AND TRANSPARENT PROCESS" name="mh" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="sh" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="ACLEARANDTRANSPARENTPROCESSSAVE2">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="DEALERSHIP EXPERIENCE" name="mh" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="sh" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="DEALERSHIPEXPERIENCESAVE3">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="SERVING CUSTOMERS NATIONWIDE!" name="mh" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="sh" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="SERVINGCUSTOMERSNATIONWIDESAVE4">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            
                			
                				    	</div>
                				    	
                				    	
                				    	<br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;"> Social Accounts</h2>
                                        <hr>
                                        <br>
        
                				    	
                				    	
                				    	
                				    	<div class="row">
                				    	    <div class="col-md-4">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Facebook Link:</b></label>
                                                             <input type = "text" class = "form-control" name="fb" required>
                                                        </div>
                                                        
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="fblink">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            
                                            <div class="col-md-4">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Twitter Link:</b></label>
                                                             <input type = "text" class = "form-control" name="twitter" required>
                                                        </div>
                                                        
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="twitterlink">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            
                                            <div class="col-md-4">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Instagram Link:</b></label>
                                                             <input type = "text" class = "form-control"  name="insta" required>
                                                        </div>
                                                        
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="instalink">Submit</button>
                                                
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
