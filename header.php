<?php
// include ("admin/database.php");
 $dbuser = 'carcenti_carcentive_admin';
   			$dbpwd = 'atecco@123';
   			$dbname = 'carcenti_carcentive2';
   			$dbserver = 'localhost';
   		
   		    $db = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
   
   
   		    if ($db->connect_errno > 0){
   		        echo "Failed to connect to MySQL: " . $db->connect_error;
   		    }
   		  
   		  
   		    
?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- Facebook Pixel Code -->
<!--<script>-->
<!--!function(f,b,e,v,n,t,s)-->
<!--{if(f.fbq)return;n=f.fbq=function(){n.callMethod?-->
<!--n.callMethod.apply(n,arguments):n.queue.push(arguments)};-->
<!--if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';-->
<!--n.queue=[];t=b.createElement(e);t.async=!0;-->
<!--t.src=v;s=b.getElementsByTagName(e)[0];-->
<!--s.parentNode.insertBefore(t,s)}(window, document,'script',-->
<!--'https://connect.facebook.net/en_US/fbevents.js');-->
<!--fbq('init', '337059637668595');-->
<!--fbq('track', 'PageView');-->
<!--</script>-->
<!--<noscript><img height="1" width="1" style="display:none"-->
<!--src="https://www.facebook.com/tr?id=337059637668595&ev=PageView&noscript=1"-->
<!--/></noscript>-->
<!-- End Facebook Pixel Code -->



<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Car Centive" />
<meta name="description" content="Car Centive - The Best Car Centive" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>CarCentive</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css" />

<!-- mega menu -->
<link rel="stylesheet" type="text/css" href="css/mega-menu/mega_menu.css" />

<!-- font awesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.css" />

<!-- revolution -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />

<!-- main style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" />

<!-- Style customizer -->
<link rel="stylesheet" href="#" data-style="styles" />
<link rel="stylesheet" type="text/css" href="css/style-customizer.css" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-557RCPW');</script>
<!-- End Google Tag Manager -->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '337059637668595');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=337059637668595&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-XFV4B89NTY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XFV4B89NTY');
</script>
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-557RCPW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--=================================
  loading -->
  
<!--  <div id="loading">-->
<!--  <div id="loading-center">-->
<!--      <img src="images/loader3.gif" alt="">-->
<!-- </div>-->
<!--</div>-->


<!--=================================
  loading -->


<!--=================================
 header -->

<header id="header" class="defualt">
<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
         <div class="row"> 
     <div class="container"> 
     
       <div class="col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <img class="img-line"  src="images/logo.png" alt="logo" style="height: 56px">
            </li>
        </ul>
        <!-- menu links -->
        <ul class="menu-links" style="padding-top:20px;">
            <!-- active class -->
                
           <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="request.php">Cars for Sale</a></li>
            <li><a href="referral.php" >Referral Program</a></li>
            <li><a href="quote.php" >Request a consultation</a></li>
            <li><a href="contact.php">contact Us</a></li>
        </ul>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>

<!--=================================
 header -->