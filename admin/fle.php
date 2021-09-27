<?php
require_once('sessions.php');
 require_once("header.php");
require_once("sidebar.php");
require_once("database.php");
 
?>
<html>
    <head>
        <style>
            .dtHorizontalExampleWrapper {
max-width: 600px;
margin: 0 auto;
}
#dtHorizontalExample th, td {
white-space: nowrap;
}

table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
bottom: .5em;
}
        </style>
        <script>
            $(document).ready(function () {
$('#dtHorizontalExample').DataTable({
"scrollX": true
});
$('.dataTables_length').addClass('bs-select');
});
        </script>
    </head>
</html>
    		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Page</span>
					</div>

					<div class="header-elements d-none">
						 
					</div>
				</div>

			 
			</div>
			<!-- /page header -->
            
			<!-- Content area -->
			<div class="content">
                
                	<div class="row">
					<div class="col-xl-12">
  
						<div class="card">
                       
							    <div class="table-responsive">
								<table class="table text-nowrap">
                                    
                                    <tbody>
                                    			        <tr class="table-active table-border-double">
											<td colspan="3">Table</td>
											<td class="text-right">
												<span class="badge bg-blue badge-pill">24</span>
											</td>
										</tr>
                                    </tbody>
                                    
                            </table>
                        </div>
                            <div class="table-responsive">
								<table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
									 <thead>
										<tr>
											 
											<th>Id</th>
											<th>Institution</th>
								            <th>Email</th>
                                            <th>Password</th>
                                            <th>Address</th>
                                            <th>Status</th>
										</tr>
									</thead>
									<tbody>
									 

										
                                            
 
                                            <tr>
                                                <td>
												<div class="d-flex align-items-center">
												<h6 class="mb-0">aa </h6>	 
 
											</div>
											</td>
											<td>
												<h6 class="mb-0">aa</h6>
											</td>
											<td class="">
												<h6 class="mb-0">aa</h6>
                                            
                                            </td>
                                            	<td class=" ">
													<h6 class="mb-0">aa</h6>
                                            
                                            </td>
                                            	<td class=" ">
											<h6 class="mb-0">aa</h6>
                                            
                                            </td>
                                            	
                                            
                                            	<td class="text-center">
												<h6 style="background-color:lightgreen" class="mb-0">aa</h6>
                                            
                                            </td>
                                            </tr>
  
											
                                            
										

								 
									</tbody>
								</table>
							</div>
						</div>
						<!-- /support tickets -->
 
                        
					</div>

				 
				</div>
                
                
            </div>

 <script>
		function deleteit(){
			return(confirm("The record will be deleted permanently. Do you really want to continue?"));
			}
		function editit(){
			return(confirm("Do you want to edit?"));
			}
    </script>
 