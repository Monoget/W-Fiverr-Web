<?php
include ("header.php");
$query = "SELECT * FROM `about` ORDER BY id DESC";
$about = mysqli_query($db, $query);

$query = "SELECT * FROM `ourmission` ORDER BY id DESC";
$ourmission = mysqli_query($db, $query);

$query = "SELECT * FROM `VEHICLESINSTOCKSUBMIT` ORDER BY id DESC";
$vs = mysqli_query($db, $query);

$query = "SELECT * FROM `HAPPYCUSTOMERSSUBMIT` ORDER BY id DESC";
$HAPPYCUSTOMERSSUBMIT = mysqli_query($db, $query);


$query = "SELECT * FROM `DEALERREVIEWSSUBMIT` ORDER BY id DESC";
$DEALERREVIEWSSUBMIT = mysqli_query($db, $query);


$query = "SELECT * FROM `AWARDSSUBMIT` ORDER BY id DESC";
$AWARDSSUBMIT = mysqli_query($db, $query);

$query = "SELECT * FROM `ceo` ORDER BY id DESC";
$ceo = mysqli_query($db, $query);


?>
 
 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white">About us </h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>about</span> </li>
             </ul>
        </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 welcome -->

<section class="welcome-4 page-section-ptb white-bg">
  <div class="container">
      <?php
                    if(mysqli_num_rows($about) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($about);
                         
                         
                         
                     ?>
    <div class="row justify-content-center">
      <div class="col-md-10">
         <div class="section-title">
           <span>Welcome to </span>
           <h2><?= $row4['title'];?></h2>
           <div class="separator"></div>
           <p><?= $row4['subline'];?></p>
         </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="owl-carousel owl-theme" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-space="0">
         <div class="item">
           <img class="img-fluid" src="images/car/15.jpg" alt="">
          </div>
          <div class="item">
           <img class="img-fluid" src="images/car/16.jpg" alt="">
          </div>
          <div class="item">
           <img class="img-fluid" src="images/car/17.jpg" alt="">
          </div> 
        </div>
      </div>
      <div class="col-md-6">
        <p style="text-align:justify;"><?php
            $x = $row4['msg'];
          echo $y=str_replace("~","'",$x);
        
        ?></p>
      </div>
      <div class="col-md-12" style="padding-top: 37px">
      <center><h2>Our Mission</h2></center>
      
      <?php
                    if(mysqli_num_rows($ourmission) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($ourmission);
                         
                         
                         
                     ?>
      
          <P style="text-align:justify;"><?php
          $x = $row4['des'];
          echo $y=str_replace("~","'",$x);
          
          ?>
</P>

<?php
}}

?>
      </div>
    </div>
    <?php
                     }}
    ?>
  </div>
</section>

<!--=================================
 welcome -->

 <!--=================================
 Counter -->


<section class="counter counter-style-2 bg-red bg-1 bg-overlay-black-70 page-section-ptb">
  <div class="container">
    <div class="row">
     <div class="col-lg-3 col-md-6 item">
     <div class="counter-block text-left">
        <div class="separator"></div>
        <div class="info">
           <h6 class="text-white">Vehicles in Stock</h6>
           <i class="glyph-icon flaticon-beetle"></i>
           <?php
           if(mysqli_num_rows($vs) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($vs);
                         
                         
                         
                     ?>
      
           
           <b class="timer text-white" data-to="<?= $row4['des'];?>" data-speed="10000"></b>
           <?php
           
           }}
           ?>
           
         </div>
        </div> 
     </div>
     <div class="col-lg-3 col-md-6 item">
     <div class="counter-block text-left">
        <div class="separator"></div>
        <div class="info">
        
           <h6 class="text-white">Dealer Reviews</h6>
           <i class="glyph-icon flaticon-interface"></i>
            <?php
           if(mysqli_num_rows($DEALERREVIEWSSUBMIT) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($DEALERREVIEWSSUBMIT);
                         
                         
                         
                     ?>
      
           <b class="timer text-white" data-to="<?= $row4['des'];?>" data-speed="10000"></b>
           <?php
                     }}
           ?>
         </div>
        </div> 
     </div>
     <div class="col-lg-3 col-md-6 item">
     <div class="counter-block text-left">
        <div class="separator"></div>
        <div class="info">
           <h6 class="text-white">Happy Customers</h6>
           <i class="glyph-icon flaticon-circle"></i>
           
            <?php
           if(mysqli_num_rows($HAPPYCUSTOMERSSUBMIT) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($HAPPYCUSTOMERSSUBMIT);
                         
                         
                         
                     ?>
           <b class="timer text-white" data-to="<?= $row4['des'];?>" data-speed="10000"></b>
           <?php
                     }}
           ?>
         </div>
        </div> 
     </div>
      <div class="col-lg-3 col-md-6 item">
      <div class="counter-block text-left">
        <div class="separator"></div>
        <div class="info">
           <h6 class="text-white">Awards</h6>
            <i class="glyph-icon flaticon-cup"></i>
            <?php
            if(mysqli_num_rows($AWARDSSUBMIT) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($AWARDSSUBMIT);
                         
                         
                         
                     ?>
           <b class="timer text-white" data-to="<?= $row4['des'];?>" data-speed="10000"></b>
             <?php
                     }}
           ?>
         </div>
        </div> 
     </div>
    </div>
  </div>
</section>
<section class="welcome-3 white-bg page-section-ptb" style="background:whitesmoke">
  <div class="container">
    <div class="row about custom-block-2">
       <div class="col-md-3">
        <img class="img-fluid center-block" src="images/ceo-removebg-preview.png" alt="">
       </div>
      <div class="col-md-9">
         <h2>Meet Our CEO & Founder</h2>
          <?php
                    if(mysqli_num_rows($ceo) > 0)
                     {
                         
                     {  $row4 = mysqli_fetch_assoc($ceo);
                         
                         
                         
                     ?>
      
          <P style="text-align:justify;">
        <p><?php
          $x = $row4['des'];
          echo $y=str_replace("~","'",$x);?>  </p></div>
<?php
}}

?>
<div class="col-md-12">
<p>
Othello Benson believes buying a new or pre-owned car should be fun and exciting! He wants to make this your best car-buying experience ever. 
Give CarCentive a few minutes of your time and you’ll be on your way to a hassle-free car buying experience in no time.
</p>
   </div>
    </div>
  </div>
</section>
 <!--=================================
 content-box -->
 

<!--=================================
 content-box -->
<?php
include ("footer.php");
?>