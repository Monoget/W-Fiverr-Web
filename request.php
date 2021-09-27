
<?php
include ("header.php");

// $query = "SELECT * from product ";
// $car = mysqli_query($db, $query);

$query = "SELECT * FROM `CarForSale` ORDER BY id DESC";
$CarForSale = mysqli_query($db, $query);


          
                         
                         
?>


<section class="inner-intro bg-1 bg-overlay-black-70" style="background:url">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white">Cars For Sale </h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Request</span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>


 <!--=================================
 form -->
<section class="product-listing page-section-ptb" style="background:whitesmoke">
  <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
     <div class="listing-sidebar">
                        <?php
                        if($car!=NULL)
                        {
                        foreach($car as $car2)
                                                    
                        {
                                                    
                        $id            = $car2['id'];
                        
                        
                        $query = "SELECT * from product_image  where product_id='$id'";
                      
                        $img = mysqli_query($db, $query);
                        ?>    
      <div class="widget" style="background:white;">
        <div class="car-grid" >
           <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="car-item gray-bg text-center">
               <div class="car-image">
                   <?php
                    if($img!=NULL)
                     {
                     ?> 
                    <img src="<?php echo "admin/images/product/".$img['image_name']; ?>" style="width:100%">
                    <?php  }?>
                   </div>
               </div>
             </div>
              <div class="col-lg-8 col-md-12">
                <div class="car-details">
                <div class="car-title">
                <span><?php echo $car2['title_status']; ?> </span><br> 
                 <a href="#"> <?php echo $car2['make']; ?><?php echo $car2['model']; ?>  </a><br>
                 <h6><?php echo $car2['year']; ?></h6>
                 <p><?php echo $car2['description']; ?></p>
                  </div>
                  <div class="price">
                       <span class="new-price">$<?php echo $car2['price']; ?> </span>
                       <a class="button red float-right" href="<?php echo "car_detail.php?id=".$car2['id']; ?>">Details</a>
                     </div>
                  </div>
                </div>
               </div>
             </div>
           <?php  }}?>
            </div><br>
         </div>
        </div>
      </div>
    </div>
</section>
<section class="search-block find-car bg-1 bg-overlay-black-70 page-section-pt" style="    background: aliceblue;">
  <form class="form-horizontal" role="form" method="post" action="admin/action.php" enctype="multipart/form-data">      
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="section-title text-left">
         <h2 class="text-white">Submit Your Car Information </h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
    <div class="row">
       <div class="col-lg-7 col-sm-12">
         <div class="row">
          <div class="col-md-12">
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                    <label>Name</label>
                   <input type="text" placeholder="Enter Name*" class="form-control" name="name" required>
                  </div>
               </div>  
               <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                   <input type="email" placeholder="Enter Email*" class="form-control" name="email" required>
                  </div>
               </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Phone Number</label>
                   <input type="text" placeholder="Enter Number*" class="form-control" name="phone" required>
                  </div>
               </div>
              
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Make</label>
                  <input type="text" placeholder="Enter Make*" class="form-control" name="make" required>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Model</label>
                <input type="text" placeholder="Enter Model*" class="form-control" name="model" required>
                  </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group">
                     <label for="cars">Body Type:</label>
                        <select name="body_type"  class="form-control" required>
                          <option>SUV</option>
                          <option >COUPE</option>
                          <option>TRUCK</option>
                          <option>SEDAN</option>
                          <option>COMPACT SUV</option>
                        </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="cars">Vehicle Status:</label>
                        <select name="vehicle_status" class="form-control" required>
                          <option>NEW</option>
                          <option>USED</option>
                          <option>LEASE</option>
                        </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Mileage </label>
                    <input type="text" placeholder="Enter Mileage*" class="form-control" name="mileage" required>
                  </div>
               </div>
                 <div class="col-md-4">
                  <div class="form-group">
                     <label>VIN NUMBER </label>
                   <input type="text" placeholder="Enter VIN*" class="form-control" name="vin" required>
                  </div>
               </div>
                   <div class="col-md-4">
                 <div class="form-group">
                     <label for="cars">CAR CONDITIONS:</label>
                        <select name="car_condition"  class="form-control" required>
                          <option>EXCELLENT</option>
                          <option>GOOD</option>
                          <option>BAD</option>
                        </select>
                  </div>
               </div>
                <div class="col-md-4">
                  <div class="form-group">
                     <label for="cars">CYLINDERS:</label>

                        <select name="cylinder" class="form-control" required>
                          <option>2</option>
                          <option>3</option>
                          <option >4</option>
                          <option>6</option>
                          <option >8</option>
                          <option>10</option>
                          <option >12</option>
                         
                        </select>
                  </div>
               </div>
                <div class="col-md-4">
                  <div class="form-group">
                     <label for="cars">DRIVE:</label>
                          <select name="drive"  class="form-control" required>
                          <option>FRONT WHEEL DRIVE</option>
                          <option >REAR WHEEL DRIVE</option>
                          <option>ALL WHEEL DRIVE</option>
                          <option >4x4</option>
                         </select>
                  </div>
               </div>
                  <div class="col-md-4">
                  <div class="form-group">
                     <label for="cars">FUEL:</label>
                        <select name="fuel" class="form-control" required>
                          <option>DIESEL</option>
                          <option>GAS</option>
                          <option >ELECTRIC</option>
                          <option>HYDROGEN</option>
                        </select>
                  </div>
               </div>
                     <div class="col-md-4">
                   <div class="form-group">
                     <label>Paint Color </label>
                    <input type="text" placeholder="Enter Paint color*" class="form-control" name="paint_color" required>
                  </div>
               </div>
                <div class="col-md-6">
                  <div class="form-group">
                     <label for="cars">TRANSMISSION:</label>
                        <select name="transmission" class="form-control" required>
                          <option>AUTO</option>
                          <option >MANUAL</option> 
                        </select>
                  </div>
                </div>
                    <div class="col-md-6">
                  <div class="form-group">
                     <label>Car Image </label>
                    <input type="file" accept=".png,.jpg,.jpeg" multiple name="file[]" required>
                  </div>
               </div>
            </div>
         </div>
      </div>
           <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                 <label for="amount">Desired Price</label>
                  <input type="text" name="amount" placeholder="Enter Price" style="    padding: 8px 30px 10px 27px;color: black;" required>
                  <div id="slider-range"></div><br>
                  <button class="button" type="submit" name="submit_detail">Submit </button>
                 </div>
                </div>
               </div>
              </div>
           <div class="col-md-5 align-self-end">
           <img class="img-fluid center-block" src="images/03.png" alt="" style="padding-bottom:270px">
         </div>
         </div>
       </div>
    </form>
  </section> 
 <!--=================================
 form -->

 <section class="service-center white-bg page-section-ptb">
 <div class="container">
   <div class="row">
       
     <div class="col-md-6">
         <?php
          
          if(mysqli_num_rows($CarForSale) > 0)
                  {
                         
                   {  $row4 = mysqli_fetch_assoc($CarForSale);
                         
        
         ?>
         
        <h5><?= $row4['Main Heading']?>We provide the best process.</h5>          
        <p style="text-align: justify;"><?php
        $change = $row4['Message'];
        echo $x = str_replace("~","'",$change);
        
        
        ?></p>
        <ul class="list-style-1">
          <li><i class="fa fa-check"></i><?= $row4['Sub H1']?></li>
          <li><i class="fa fa-check"></i><?= $row4['Sub H2']?></li>
          <li><i class="fa fa-check"></i><?= $row4['Sub H3']?></li>
        </ul>
    </div>
    <div class="col-md-6">
      <img class="img-fluid center-block" src="<?= $row4['Image']?>" alt="">
    </div>
   <?php
   }}
   ?>
   </div>
  </div>
</section>
<?php
include ("footer.php");
?>