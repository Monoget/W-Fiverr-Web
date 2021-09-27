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
                                    <h4 class="card-title">Cutomazied Service Page</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="https://www.carcentive.com/service.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">See View</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                                <div class="card-body">
                                    
                                        <br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;"> Service </h2>
                                        <hr>
                                        <br>
                                    
                                        <div class="row">
                				    	    <div class="col-md-12">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        
                                                        <div class="form-group">
                                                          <label for = "name"><b>OUR SERVICES:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="data" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="OURSERVICESDESSUBMIT">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                         
                				    	</div>
                				    	
                				    	<br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;">Our Services Card</h2>
                                        <hr>
                                        <br>
                				    	
                				    	
                				    	<div class="row">
                				    	    <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="VEHICLE PURCHASE OR LEASE PRICE NEGOTIATIONS" name="data" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="sub1">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="ACCESS TO TRANSPARENT PRICING" name="data" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="sub2">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="PRE-PURCHASE DOCUMENTATION REVIEW" name="data" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="sub3">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="TRANSPORTATION AVAILABLE" name="data" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="sub4">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            
                			
                				    	</div>
                				    	<br>
                				    	<br>
                				    	<div class="row">
                				    	    <div class="col-md-4">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="SECURING FINANCE AND GOVERNMENTAL DOCUMENTS" name="data" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="sub5">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-4">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="ASSIST IN SELLING PRIVATE CARS" name="data" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="sub6">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-4">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="ASSIST IN LEASE BUYOUTS OR LEASE TRANSFERS" name="data" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="des" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="sub7">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                           
                				    	</div>
                				    	
                				    	
                				    	
                				    	<br>
                				    	<hr>
                				    	<h2 class="text-center" style="background-color:#94B91C; color: #004B7D;"> Car Details</h2>
                                        <hr>
                                        <br>
                				    	
                				    	<div class="row">
                				    	    <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="DELIVERED TO YOUR DOOR" name="title" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="data" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="carcard1">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="CAR BUYING MADE EASY" name="title" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="data" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="carcard2">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-3">
                				    	        
                    				    	    <form action="cutomization.php" method="post">
                                                        <div class ="form-group">
                                                            <label for = "name"><b>Title:</b></label>
                                                             <input type = "text" class = "form-control" value="FREE PICK UP" name="title" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for = "name"><b>Description:</b></label>    
                                                          <textarea class = "form-control" rows = "3" name="data" required></textarea>
                                                       </div>
                                                   <button type ="submit" class ="btn btn-outline-primary btn-rounded" name="carcard3">Submit</button>
                                                
                                                </form>
                                                
                                            </div>
                                            <div class="col-md-3">
                    				    		<div class="row text-center">
                    				    		    <div class="col-md-6 offset-md-3">
                                                    
                                                     <img class="img-fluid center-block" src="../images/car/18.png" alt="">
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
