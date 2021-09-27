<?php   
    include("sessions.php");
    include("header.php");
    include("sidebar.php");
    require_once ("database.php");

if(isset($_GET['idupdate'])){
    $dbuser = 'carcenti_carcentive_admin';
    $dbpwd = 'atecco@123';
    $dbname = 'carcenti_carcentive2';
    $dbserver = 'localhost';
    $conn = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
    $id=$_GET['idupdate'];
    
    $sql = "SELECT * FROM `login` WHERE id={$id}";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    
    ?>
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
                                <h4 class="card-title">Setting Panel</h4>
                            </div>
                        <div class="card-body">
                        <div class="row">
						<div class="col-md-2 col-xs-4"></div>
						<div class="col-md-8 col-xs-4">
							<h1 style="text-align:center">Update User</h1>
						</div>
						<div class="col-md-2 col-xs-4"></div>
					</div>
					<br><br>
					<form action="action.php?idupdate=5" method="GET">
						<div class="row">
							<div class="col-md-2 col-sm-0 col-xs-0"></div>
							<div class="col-md-8">
				             <input type="hidden" class="form-control" required placeholder="Enter User Name" name="id" value="<?php echo $row['id'];?>">
							</div>
                            <div class="col-md-2 col-sm-0 col-xs-0"></div>
						</div>
						<br><br>
						<div class="row">
							<div class="col-md-2 col-sm-0 col-xs-0"></div>
							<div class="col-md-8">
				             <input type="text" class="form-control" required placeholder="Enter User Name" name="un" value="<?php echo $row['username'];?>">
							</div>
                            <div class="col-md-2 col-sm-0 col-xs-0"></div>
						</div><br>
						<div class="row">
							<div class="col-md-2 col-sm-0 col-xs-0"></div>
							<div class="col-md-8">
				             <input type="email" class="form-control" required placeholder="Enter User Name" name="email" value="<?php echo $row['email'];?>">
							</div>
                            <div class="col-md-2 col-sm-0 col-xs-0"></div>
						</div><br>
						<div class="row">
							<div class="col-md-2 col-sm-0 col-xs-0"></div>
							<div class="col-md-8">
						 <select name="status" class="c-form-profession form-control" id="c-form-profession" required>
                            <option value="Sale Level">Sale Level</option>
                            <option value="Management Level">Mangement Level</option>
                            <option value="CEO Level">CEO Level</option>
                        </select>
                        </div>
                            <div class="col-md-2 col-sm-0 col-xs-0"></div>
						</div><br>
						<div class="row">
							<div class="col-md-2 col-sm-0 col-xs-0"></div>
							<div class="col-md-8">
							<input type="password" class="form-control" required placeholder="Enter Password" name="pass" value="<?php echo $row['password'];?>">	
							</div>
                            <div class="col-md-2 col-sm-0 col-xs-0"></div>
						</div>
						<br><br>
						<div class="row">
							<div class="col-md-5"></div>
							<div class="col-md-1">
				             <button class="btn btn-outline-success btn-icon-split btn-rounded" name="update_user" style="margin-left: -45px;">
				             <span class="text" name="update_user">Update</span></button>   
							</div>
							<div class="col-md-1">
								<a href="updateuser.php" class="btn btn-outline-warning btn-icon-split btn-rounded"><span class="text">Back</span></a>
							       </div>
						         </div>
					          </form>
                            </div>
                        </div>
					</div>
                </div>
            </div>
        </div>
    <?php
    
    }}
    ?>
    
<?php
include ("footer.php");
?>
