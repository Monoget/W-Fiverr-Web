<?php
	include "sessions.php";
	include "header.php";
	include "sidebar.php";
	
	$status=NULL;
	
	if(isset($_GET['status']))
	{
	 $status=$_GET['status'];
	}
	
	$query = "SELECT * from home_slider";
	$rec = db::getRecords($query);

	?>

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
                    <div class="row">
                        <div class="col-md-6">
					   <div class="mr-auto d-none d-lg-block">
				         <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#sliderModal">+ Add New</button>
                        </div>
                    </div>  
                     <div class="col-md-6">    
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
                    <?php
                    if($rec!=NULL)
                        {
                        foreach($rec as $rec2)
                        {    
                        ?> 
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-blog mb-5">
                                    <img src="<?php echo "images/banners/".$rec2['image_name']; ?>" alt="" class="img-fluid mt-4 mb-4 w-100">
                                    <h4><?php echo $rec2['title']; ?> </h4>
                                    <p class="mb-0"><?php echo $rec2['description']; ?> </p>
                                    	<center><a href="slider_edit.php?id=<?php echo $rec2['id'];?>">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									  </a>
									   <a href="action.php?delete_home_slider=<?php echo $rec2['id'];?>">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3 6H5H21" stroke="#F46B68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#F46B68" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
                                    </center>        
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php } }?>
                </div>
            </div>
        </div>
<!-- Modal -->
<div class="modal fade" id="sliderModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Add New Slider</h3>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="action.php" method="POST" enctype="multipart/form-data">
					<div class="row" style="justify-content:center;">
						<br><br>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<label style="margin-left: 30px; font-weight: bold;">Image:</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
				          <input class="form-control" required type="file" multiple name="file" style="border-radius:10px;">
						</div>
					</div>
					<br><br>
					<div class="row">
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-10">
									<label style="margin-left: 30px; font-weight: bold;">Title:</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control" type="text" name="title">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-10">
									<label style="margin-left: 30px; font-weight: bold;">Description:</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<textarea  style="margin-left: 3px;" rows="9" cols="52" name="description"></textarea>
								</div>
							</div>
						</div>
					</div>
					<br><br>
					  <div class="row">
						<div class="col-md-4"></div>
                        <div class="col-md-4" style="margin-left: 9px;">  
						<button type="submit" class="btn btn-success btn-icon-split" name="add_home_slider">
						<span class="text">Submit</span></button>
                        </div>
                        <div class="col-md-4"></div>  
					</div>
				</form>
			</div>
			<div class="modal-footer" style="justify-content: center;">
				<a class="btn btn-default" href="dashboard.php" style="background-color:Red;color:white;padding: 10px 80px 14px;" class="mb-0">Back</a>
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