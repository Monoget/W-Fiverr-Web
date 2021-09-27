<?php
include ("header.php");
$id=$_GET['id'];

$query="SELECT * from product where id='$id'";
$rec=db::getRecord($query);
   ?>
<section class="inner-intro bg-1 bg-overlay-black-70">
   <div class="container">
      <div class="row text-center intro-title">
         <div class="col-md-6 text-md-left d-inline-block">
            <h1 class="text-white">Car Detail page</h1>
         </div>
         <div class="col-md-6 text-md-right float-right">
            <ul class="page-breadcrumb">
               <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
               <li><span>Car Detail</span> </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="car-details page-section-ptb">
   <div class="container">
             <?php
              if($rec!=NULL)
                {
                 ?>
      <div class="row">
         <div class="col-md-8">
            <div class="owl-carousel owl-theme" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-space="0">
                    <?php        
                     $id            = $rec['id'];
                     $query = "SELECT * from product_image  where product_id='$id'";
                     $image = db::getRecords($query);   
                     ?>
                 <?php
                    if($image!=NULL)
                    {
                    foreach($image as $image2)
                    { 
                    ?> 
               <div class="item">
                  <img class="img-fluid" src="<?php echo "admin/images/product/".$image2['image_name']; ?>" alt="" style="width:745px;height:325px">
               </div>
                <?php }}?>
            </div>
         </div>
           <div class="col-md-4">
            <div  class="tabcontent">
               <h3><?php echo $rec['make']; ?></h3>
               <h6 class="amount">$<?php echo $rec['price']; ?></h6>
               <p><?php echo $rec['description']; ?>                
               </p>
            </div>
         </div>
      </div>
      <div class="row">
          <div class="col-md-12">
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                    <label>Year</label>
                    <h6><?php echo $rec['year']; ?></h6> 
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Make</label>
                    <h6><?php echo $rec['make']; ?></h6>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Model</label>
                     <h6><?php echo $rec['model']; ?></h6>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>body style</label>
                    <h6><?php echo $rec['body_style']; ?></h6>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>vehicle status</label>
                   <h6>  <?php echo $rec['vehicle_status']; ?></h6>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Mileage </label>
                   <h6><?php echo $rec['mileage']; ?></h6>
                  </div>
               </div>
                 <div class="col-md-4">
                  <div class="form-group">
                     <label>VIN </label>
                    <h6> <?php echo $rec['vin']; ?></h6>
                  </div>
               </div>
                   <div class="col-md-4">
                  <div class="form-group">
                     <label>Car condition </label>
                    <h6><?php echo $rec['car_condition']; ?></h6>
                  </div>
               </div>
                <div class="col-md-4">
                  <div class="form-group">
                     <label>Cylinders </label>
                   <h6> <?php echo $rec['cylinder']; ?></h6>
                  </div>
               </div>
                <div class="col-md-4">
                  <div class="form-group">
                     <label>Drive </label>
                  <h6> <?php echo $rec['drive']; ?></h6>
                  </div>
               </div>
                  <div class="col-md-4">
                  <div class="form-group">
                     <label>Fuel </label>
                    <h6><?php echo $rec['fuel']; ?></h6>
                  </div>
               </div>
                    <div class="col-md-4">
                  <div class="form-group">
                     <label>Paint Color </label>
                     <h6><?php echo $rec['paint_color']; ?></h6>
                  </div>
               </div>
                <div class="col-md-4" hidden>
                  <div class="form-group">
                     <label>Title Status </label>
                     <h6><?php echo $rec['title_status']; ?></h6>
                  </div>
               </div>
                <div class="col-md-4">
                  <div class="form-group">
                     <label>Transmission </label>
                     <h6><?php echo $rec['transmission']; ?></h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
       <?php  }?>
   </div>
</section>
<?php
   include ("footer.php");
?>