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
                                    <h4 class="card-title">Setting Panel</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-right">
                                       <a href="createuser.php"><button type="button" class="btn btn-outline-primary btn-rounded" data-toggle="modal" data-target="#basicModal">+ Create User</button></a> 
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        <div class="card-body">
                                <div class="row">
            						<div class="col-md-2 col-xs-4"></div>
            						<div class="col-md-8 col-xs-4">
            							<h1 style="text-align:center">Update User</h1>
            						</div>
        			
        				    	</div>
        				    	<div class="row">
            						<table class="table table-striped">
                                      <thead>
                                        <tr>
                                          <th scope="col">id</th>
                                          <th scope="col">User Name</th>
                                          <th scope="col">Password</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Date</th>
                                          <th scope="col">Update</th>
                                          <th scope="col">Delete</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                            $dbuser = 'carcenti_carcentive_admin';
                                   			$dbpwd = 'atecco@123';
                                   			$dbname = 'carcenti_carcentive2';
                                   			$dbserver = 'localhost';
                                   			$conn = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
                                        
                                            $sql = "SELECT * FROM `login`";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                              // output data of each row
                                              while($row = $result->fetch_assoc()) {
                                           
                                        ?>
                                        <tr>
                                          <th scope="row"><?= $row['id'];?></th>
                                          <td style="width: 20px;"><?= $row['username'];?></td>
                                          <td width="20"><?= $row['email'];?></td>
                                          <td><?php
                                          
                                            if($row['AccountStatus']=="Approve"){
                                                echo $row['Status'];
                                            }else{?>
                                                <a  href="action.php?AccountStatus=<?php echo $row['id']; ?>"><button type="button" class="btn btn-outline-info btn-rounded">Approve</button>
                                            <?php
                                                
                                            }
                                          
                                          
                                          ?>
                                        </td>
                                          <td><?php
                                          $data = $row['createdate'];
                                          $seprate = explode(" ", $data);
                                          echo $seprate['0'];
                                          ?></td>
                                          <td><a  href="update.php?idupdate=<?php echo $row['id']; ?>"><button type="button" class="btn btn-outline-primary btn-rounded">Update</button></td>
                                          <td><a  href="action.php?idUserdel=<?php echo $row['id']; ?>"><button type="button" class="btn btn-outline-danger btn-rounded">Delete</button></a></td>
                                        </tr>
                                        <?php
                                              }}
                                        ?>
                                      </tbody>
                                    </table>
        			
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
