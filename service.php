<?php
include ("header.php");

$query = "SELECT * FROM `Services` ORDER BY id DESC";
$Services = mysqli_query($db, $query);

$query = "SELECT * FROM `ServiceCard1` ORDER BY id DESC";
$ServiceCard1 = mysqli_query($db, $query);

$query = "SELECT * FROM `ServiceCard2` ORDER BY id DESC";
$ServiceCard2 = mysqli_query($db, $query);

$query = "SELECT * FROM `ServiceCard3` ORDER BY id DESC";
$ServiceCard3 = mysqli_query($db, $query);

$query = "SELECT * FROM `ServiceCard4` ORDER BY id DESC";
$ServiceCard4 = mysqli_query($db, $query);


$query = "SELECT * FROM `ServiceCard5` ORDER BY id DESC";
$ServiceCard5 = mysqli_query($db, $query);

$query = "SELECT * FROM `ServiceCard6` ORDER BY id DESC";
$ServiceCard6 = mysqli_query($db, $query);

$query = "SELECT * FROM `ServiceCard7` ORDER BY id DESC";
$ServiceCard7 = mysqli_query($db, $query);

$query = "SELECT * FROM `carcard1` ORDER BY id DESC";
$carcard1 = mysqli_query($db, $query);

$query = "SELECT * FROM `carcard2` ORDER BY id DESC";
$carcard2 = mysqli_query($db, $query);

$query = "SELECT * FROM `carcard3` ORDER BY id DESC";
$carcard3 = mysqli_query($db, $query);

?>
<!--=================================
 inner-intro -->
 
 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white">Services </h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Service</span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 service -->

<section class="welcome-block objects-car why-choose page-section-ptb white-bg">
 <div class="objects-left"><img class="img-fluid objects-1" src="images/objects/03.jpg" alt=""></div>
 <div class="objects-right"><img class="img-fluid objects-2" src="images/objects/04.jpg" alt=""></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="section-title">
           <h2>Our Services </h2>
           <div class="separator"></div>
           <?php
           
                if(mysqli_num_rows($Services) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($Services);
                         
                         
                         
                     ?>
            <p><?= 
            $change=$row4['message'];
            echo $y= str_replace("~","'",$change);
            
            ?>CarCentive is the best way to purchase or lease a new car hassle-free!</p>
           <?php 
                }}         
                     ?>
         </div>
      </div>
    </div>
    <div class="row">
    <div class="col-lg-4 col-md-4">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-beetle"></i>
          </div>
          <div class="content">
              
              <?php
              
              if(mysqli_num_rows($ServiceCard1) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($ServiceCard1);
                         
                         
                         
                     ?>
              
              
            <h6><?=$row4['title'];?></h6>
            <p style="text-align:justify;"><?= 
            $change=$row4['msg'];
            echo $y= str_replace("~","'",$change);
            
            ?></p>
<?php
                     }}
            ?>


          </div>
        </div>
      </div>
     <div class="col-lg-4 col-md-4">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-interface-1"></i>
          </div>
          <div class="content">
               <?php
              
              if(mysqli_num_rows($ServiceCard2) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($ServiceCard2);
                         
                         
                         
                     ?>
              
             
              
            <h6><?=$row4['title'];?></h6>
            <p style="padding-top:25px;text-align:justify;"><?= 
            $change=$row4['msg'];
            echo $y= str_replace("~","'",$change);
            
            ?></p>
          <?php
                     }}
            ?>
          
          
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-key"></i>
          </div>
          <div class="content">
              
              
               <?php
              
              if(mysqli_num_rows($ServiceCard3) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($ServiceCard3);
                         
                         
                         
                     ?>
            <h6><?=$row4['title'];?></h6>
            <p style="padding-top:25px;text-align:justify;"><?= 
            $change=$row4['msg'];
            echo $y= str_replace("~","'",$change);
            
            ?></p>
          <?php
                     }}
            ?>
          
          
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="feature-box text-center">
          <div class="icon">
    <i class="glyph-icon flaticon-air-conditioning"></i>
          </div>
          <div class="content">
              
               <?php
              
              if(mysqli_num_rows($ServiceCard4) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($ServiceCard4);
                         
                         
                         
                     ?>
            <h6><?=$row4['title'];?></h6>
            <p style="padding-top:25px;text-align:justify;"><?= 
            $change=$row4['msg'];
            echo $y= str_replace("~","'",$change);
            
            ?></p>
          
          <?php
                     }}
            ?>
          
          </div>
        </div>
      </div>
           <div class="col-lg-4 col-md-4">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-wallet"></i>
          </div>
          <div class="content">
              
               <?php
              
              if(mysqli_num_rows($ServiceCard5) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($ServiceCard5);
                         
                         
                         
                     ?>
            <h6><?=$row4['title'];?></h6>
            <p style="text-align:justify;"><?= 
            $change=$row4['msg'];
            echo $y= str_replace("~","'",$change);
            
            ?> </p>
          <?php
                     }}
            ?>
          
          
          </div>
        </div>
      </div>
           <div class="col-lg-4 col-md-4">
        <div class="feature-box text-center">
          <div class="icon">
         <i class="glyph-icon flaticon-air-conditioning"></i>
          </div>
          <div class="content">
              
               <?php
              
              if(mysqli_num_rows($ServiceCard6) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($ServiceCard6);
                         
                         
                         
                     ?>
            <h6><?=$row4['title'];?></h6>
            <p style="padding-top:25px;text-align:justify;"><?= 
            $change=$row4['msg'];
            echo $y= str_replace("~","'",$change);
            
            ?> </p>
          <?php
                     }}
            ?>
          </div>
        </div>
      </div>
        <div class="col-lg-4 col-md-12"></div>
           <div class="col-lg-4 col-md-12">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-wallet"></i>
          </div>
          <div class="content">
              
               <?php
              
              if(mysqli_num_rows($ServiceCard7) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($ServiceCard7);
                         
                         
                         
                     ?>
            <h6><?=$row4['title'];?></h6>
            <p style="text-align:justify;"><?= 
            $change=$row4['msg'];
            echo $y= str_replace("~","'",$change);
            
            ?> </p>
            <?php
                     }}
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <section class="feature-car-area white-bg page-section-pt" style="    padding:2px;    padding-top: 29px;">
  <div class="container">
   <div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="feature-box-2 text-lg-right text-left">
          <div class="icon">
           <i class="glyph-icon flaticon-gas-station"></i>
          </div> 
          <div class="content">
             <?php
              
              if(mysqli_num_rows($carcard1) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($carcard1);
                         
                         
                         
                     ?>      
          <h5><?=$row4['title'];?></h5>
          <p style="text-align:justify;"><?= 
            $change=$row4['msg'];
            echo $y= str_replace("~","'",$change);
            
            ?></p>
        <?php
                     }}
        ?>
         </div>
        </div>
     </div>
    <div class="col-lg-4 col-md-6 d-lg-block d-none">
      <img class="img-fluid center-block big-car" src="images/car/18.png" alt="" style="    width: 82%">
    </div>
     <div class="col-lg-4 col-md-6">
      <div class="feature-box-2">
          <div class="icon">
           <i class="glyph-icon flaticon-air-conditioning"></i>
          </div> 
          <div class="content">
               <?php
              
              if(mysqli_num_rows($carcard2) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($carcard2);
                         
                         
                         
                     ?>
          <h5><?=$row4['title'];?></h5>
          <p style="text-align:justify;"><?= 
            $change=$row4['msg'];
            echo $y= str_replace("~","'",$change);
            
            ?></p>
             <?php
                     }}
         
         ?>
         </div>
        </div>
     </div>
   </div>
  </div>
</section>
  <div class="container">
   <div class="row">
     <div class="col-lg-1"></div> 
    <div class="col-lg-4 col-md-6">
      <div class="feature-box-2" style="margin-right:66px;margin-bottom:70px">
          <div class="icon">
           <i class="glyph-icon flaticon-air-conditioning"></i>
          </div> 
           <div class="content">
                <?php
              
              if(mysqli_num_rows($carcard3) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($carcard3);
                         
                         
                         
                     ?>
          <h5><?=$row4['title'];?> </h5>
          <p style="text-align:justify;"><?= 
            $change=$row4['msg'];
            echo $y= str_replace("~","'",$change);
            
            ?></p>
         <?php
                     }}
         
         ?>
         </div>
          </div>
        </div>
     </div>
  </div>

<!--=================================
 service -->
     
<section class="bg-2 bg-overlay-black-70">
  <div class="container-fluid">
   <div class="row no-gutter">
    <div class="col-lg-12 col-md-12">
      <div class="content-box-3 red-bg">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="info">
            <h5 class="text-white">Want to sell a car?</h5>
            <a class="button white" href="contact.php">contact Us</a>
           </div>
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>
</section>
<section class="bg-2 bg-overlay-black-70">
  <div class="container-fluid">
   <div class="row no-gutter">
    <div class="col-lg-12 col-md-12" style="background: grey">
      <div class="content-box-3">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="info">
              <h5 class="text-white">Are you looking for a car?</h5>
              <p class="text-white"></p>
              <a class="button" href="request.php">Request</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>
</section>
<!--=================================
 play-video -->

   <section class="play-video-2-section bg-3 bg-overlay-black-70 page-section-ptb">
    <div class="container">
    <div class="row">
      <div class="col-lg-6">
      </div>
      <div class="col-lg-6">
        <div class="custom-block-2 mt-lg-0">
           <h4 class="text-white">WELCOME TO THE CARCENTIVE</h4>
          <p class="text-white">We provide everything you need to make you car buying process as hassle free as possible. Suitable for all customers at any level !</p>
           <div class="ceo">
             <strong class="text-red"> </strong>
             <p class="text-white"> </p>
           </div>
         </div>
      </div>
     </div>
     </div> 
    </section> 


<!--=================================
 play-video -->
 <section class="welcome-block objects-car why-choose page-section-ptb white-bg">
    <div class="row">
       <div class="col-md-12">
          <div class="halp-call text-center">
            <span>Questions?</span>
            <h2 class="text-red">1-877-Centive </h2>
            <h2>1-(877)-236-8483 </h2>
          </div>
       </div>
    </div>
    </section>
<?php
include ("footer.php");
?>