<?php


// $sql = "SELECT * FROM `fblink` ORDER BY `id` DESC";
// $fb = $conn->query($sql);

// $sql = "SELECT * FROM `Instalink` ORDER BY `id` DESC";
// $insta = $conn->query($sql);

// $sql = "SELECT * FROM `twiiterlink` ORDER BY `id` DESC";
// $twiiter = $conn->query($sql);




$query = "SELECT * FROM `fblink` ORDER BY `id` DESC";
$fb = mysqli_query($db, $query);

$query = "SELECT * FROM `Instalink` ORDER BY `id` DESC";
$Insta = mysqli_query($db, $query);

$query = "SELECT * FROM `twiiterlink` ORDER BY `id` DESC";
$twiiterlink = mysqli_query($db, $query);



?><!--=================================
 footer -->
<footer class="footer-2 page-section-pt">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="about-content">
         <img  src="images/logo.png" alt="logo" style="height: 56px">
          <p class="text-gray">CarCentive is transforming the way used cars are traded in our country. Car owners can now easily sell their cars through our secure, convenient, and hassle-free process.</p>
        </div>
        <div class="social">
        <ul>
            <?php
            if(mysqli_num_rows($fb) > 0){
                     $row6 = mysqli_fetch_assoc($fb);
                     
                         ?>
          <li><a href="<?= $row6['link'];?>" target="_blank"> <i class="fa fa-facebook" ></i> </a></li>
          <?php
                        
                         
                        }
                         
                         
                     ?>
                     <?php
            if(mysqli_num_rows($twiiterlink) > 0){
                     $row8 = mysqli_fetch_assoc($twiiterlink);
                     
                         ?>
          <li><a href="<?= $row8['link'];?>"> <i class="fa fa-twitter"></i> </a></li>
          <?php
                        
                         
                        }
                         
                         
                     ?>
                     <?php
            if(mysqli_num_rows($Insta) > 0){
                     $row7 = mysqli_fetch_assoc($Insta);
                     
                         ?>
          <li><a href="<?= $row7['link'];?>" target="_blank"> <i class="fa fa-instagram"></i> </a></li>
          <?php
                        
                         
                        }
                         
                         
                     ?>
        </ul>
       </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="usefull-link">
        <h6 class="text-white">Useful Links</h6>
            <li><a href="index.php" style="color:#909090;">Home</a></li>
            <li><a href="about.php" style="color:#909090;">About Us</a></li>
            <li><a href="service.php" style="color:#909090;">Services</a></li>
            <li><a href="request.php" style="color:#909090;">Request</a></li>
            <li><a href="contact.php" style="color:#909090;">Contact Us</a></li>
            <li><a href="quote.php" style="color:#909090;" >Get a Quote</a></li>
            <li><a href="referral.php" style="color:#909090;" >Referral Program</a></li>
            <li><a href="privacy.php" style="color:#909090;" >Privacy Policy</a></li>
            <li><a href="term.php" style="color:#909090;" >Terms of Use</a></li>
        </div> 
      </div>
      <div class="col-lg-4 col-md-6">
       <div class="keep-touch">
        <h6 class="text-white">keep in touch</h6>
         <div class="address">
          <ul>
            <li> <i class="fa fa-map-marker"></i><span>364 Springfield Ave No. 454<br>Berkeley Heights NJ 07922</span> </li>
            <li> <i class="fa fa-phone"></i><span>1-877-Centive <br> 1-(877)-236-8483  </span> </li>
            <li> <i class="fa fa-envelope-o"></i><span>Sales@carcentive.com</span> </li>
          </ul>
        </div>
       </div>
      </div>
    </div>
   
    </div>
    <div class="copyright">
     <div class="container">
      <div class="row">
       <div class="col-lg-12 col-md-12">
        <p><center>Copyright &copy; <script>document.write(new Date().getFullYear());</script> <a  href="http://www.ateccotechnologies.com/">Atteco Technologies.</a> All rights reserved.</center></p>
      </div>
      </div>
     </div>
    </div>
</footer>

 <!--=================================
 footer -->

 <!--=================================
 back to top -->

<div class="car-top">
  <span><img src="images/car.png" alt=""></span>
</div>

 <!--=================================
 back to top -->
 

<!--=================================
 jquery -->

<!-- jquery  -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
 
<!-- bootstrap -->
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- mega-menu -->
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

<!-- appear -->
<script type="text/javascript" src="js/jquery.appear.js"></script>

<!-- counter -->
<script type="text/javascript" src="js/counter/jquery.countTo.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

<!-- select -->
<script type="text/javascript" src="js/select/jquery-select.js"></script>

<!-- magnific popup -->
<script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- revolution -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>

<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>

<script type="text/javascript">
   (function($){
  "use strict";

    var tpj=jQuery;
      var revapi2;
      tpj(document).ready(function() {
        if(tpj("#rev_slider_2_1").revolution == undefined){
          revslider_showDoubleJqueryError("#rev_slider_2_1");
        }else{
          revapi2 = tpj("#rev_slider_2_1").show().revolution({
            sliderType:"standard",
            sliderLayout:"fullwidth",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
              keyboardNavigation:"off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
              onHoverStop:"off",
              bullets: {
                enable:true,
                hide_onmobile:false,
                style:"hermes",
                hide_onleave:false,
                direction:"horizontal",
                h_align:"center",
                v_align:"bottom",
                h_offset:0,
                v_offset:50,
                                space:10,
                tmp:''
              }
            },
            visibilityLevels:[1240,1024,778,480],
            gridwidth:1570,
            gridheight:1000,
            lazyType:"none",
            shadow:0,
            spinner:"spinner3",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
              simplifyAll:"off",
              nextSlideOnWindowFocus:"off",
              disableFocusListener:false,
            }
          });
        }
      }); 
  })(jQuery);

</script>
  
</body>
</html>
