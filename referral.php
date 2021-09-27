<?php
include ("header.php");
$query = "SELECT * FROM `ReferralProgram` ORDER BY id DESC";
$ReferralProgram = mysqli_query($db, $query);


          



?>

<section class="inner-intro bg-1 bg-overlay-black-70" style="background:url">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white">Referral Program</h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Referral</span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>
<section class="welcome-3 white-bg page-section-ptb" style="background:whitesmoke">
  <div class="container">
    <div class="row about custom-block-2">
        <?php
        if(mysqli_num_rows($ReferralProgram) > 0)
                  {
                         
                   {  $row4 = mysqli_fetch_assoc($ReferralProgram);
        
        
        ?>
        
              <div class="col-md-6">
                <p style="font-size: 15px;text-align:justify;"><?php
                $x=$row4['Message'];
                echo $t=str_replace("~","'",$x)?>
                </p>
              </div>
              <div class="col-md-6">
                <img class="img-fluid center-block" src="<?=$row4['Image'];?>" alt="">
               </div>
       
       <?php
       
                   }}
       
       ?>
       
    </div>
  </div>
</section>
<div class="container">
<section class="search white-bg" style="padding-top:120px;"> 
  <form  method="post" action="admin/action.php">
      <div class="search-block">
            <div class="row">
                <div class="col-md-12">
                  <div class="section-title">
                     <h2>Referral Program</h2>
                     <div class="separator"></div>
                  </div>
                </div>
               </div>   
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                            <div class="col-md-2 "></div>   
                           <div class="col-md-8">
                               <p>Please Note that your information is saved on our server as you enter it.</p>
                            </div>
                            
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>   
                               <div class="col-md-8">
                                  <div class="form-group">
                                      <label>Referrer's Name:</label>
                                      <input type="text" placeholder="Your Answer" class="form-control" name="ref_name" required>
                                    </div>
                                </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                            <div class="col-md-8">
                            <div class="form-group">
                                <label>Referrer's Email Address:</label>
                                  <input type="email" placeholder="Your Answer" class="form-control" name="ref_email" required>
                            </div>
                        </div>
                  </div>
                    <div class="row">
                          <div class="col-md-2"></div>
                                <div class="col-md-8">
                                   <div class="form-group">
                                        <label>Referrer's Phone Number:</label>
                                        <input type="text" placeholder="Your Answer" class="form-control" name="ref_phone" required>
                                    </div>
                                </div>
                    </div>
                    <div class="row">
                          <div class="col-md-2"></div>
                                <div class="col-md-8">
                                <div class="form-group">
                                    <label>Purchaser’s Name:</label>
                                      <input type="text" placeholder="Your Answer" class="form-control" name="pr_name" required>
                                    </div>
                                </div>
                    </div>
                    <div class="row">
                          <div class="col-md-2"></div>
                           <div class="col-md-8">
                                <div class="form-group">
                                  <label>Purchaser’s Email Address:</label>
                                  <input type="email" placeholder="Your Answer" class="form-control" name="pr_email" required>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                                <div class="form-group">
                                    <label>Purchaser’s Phone Number:</label>
                                      <input type="text" placeholder="Your Answer" class="form-control" name="pr_phone" required>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                                <div class="price-slide">
                                    <div class="price">
                                     <label>Comments:</label>
                                       <textarea name="message"  class="textarea small" tabindex="55" placeholder="Your Answer" aria-invalid="false" rows="5" cols="112" required></textarea>
                                      
                                     <center><button class="button" type="submit" name="submit_referral">Submit </button></center>
                                    </div>
                                </div>
                        </div>
                    </div> 
              </div>
           </div>
    </div>
</form>
</div>

</section>   


<?php

include ("footer.php");
?>