<?php

include ("header.php");







$query = "SELECT * FROM `address` ORDER BY id DESC";

$address = mysqli_query($db, $query);





$query = "SELECT * FROM `fax` ORDER BY id DESC";

$fax = mysqli_query($db, $query);



$query = "SELECT * FROM `email` ORDER BY id DESC";

$email = mysqli_query($db, $query);



$query = "SELECT * FROM `phone` ORDER BY id DESC";

$phone = mysqli_query($db, $query);











$query = "SELECT * FROM `MondayTimming` ORDER BY id DESC";

$m = mysqli_query($db, $query);



$query = "SELECT * FROM `Tuesday Timming` ORDER BY id DESC";

$t = mysqli_query($db, $query);



$query = "SELECT * FROM `WednesdayTimming` ORDER BY id DESC";

$w = mysqli_query($db, $query);



$query = "SELECT * FROM `ThursdayTImming` ORDER BY id DESC";

$th = mysqli_query($db, $query);



$query = "SELECT * FROM `FridayTImming` ORDER BY id DESC";

$f = mysqli_query($db, $query);



$query = "SELECT * FROM `SaturdayTimming` ORDER BY id DESC";

$s = mysqli_query($db, $query);



$query = "SELECT * FROM `phone` ORDER BY id DESC";

$phone = mysqli_query($db, $query);





$query = "SELECT * FROM `DealershipAvailablity` ORDER BY id DESC";

$DealershipAvailablity = mysqli_query($db, $query);



$query = "SELECT * FROM `consultationAvailablity` ORDER BY id DESC";

$consultationAvailablity = mysqli_query($db, $query);





 

?>

<!--=================================

 inner-intro -->

 

 <section class="inner-intro bg-1 bg-overlay-black-70">

  <div class="container">

     <div class="row text-center intro-title">

           <div class="col-md-6 text-md-left d-inline-block">

             <h1 class="text-white">Contact Us </h1>

           </div>

           <div class="col-md-6 text-md-right float-right">

             <ul class="page-breadcrumb">

                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>

                <li><span>Contact Us</span> </li>

             </ul>

           </div>

     </div>

  </div>

</section>



<!--=================================

 inner-intro -->





<!--=================================

 contact -->



<section class="contact page-section-ptb white-bg">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

         <div class="section-title">

           <span>We’d Love to Hear From You</span>

           <h2>LET'S GET IN TOUCH!</h2>

           <div class="separator"></div>

         </div>

      </div>

    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6">

       <div class="contact-box text-center">

          <i class="fa fa-map-marker"></i>

          <h5>Address</h5>

          <?php

          if(mysqli_num_rows($address) > 0)

                  {

                         

                   {  $row4 = mysqli_fetch_assoc($address);?>

          <p><?= $row4['data']?></p>

          <?php

          }}

          ?>

        </div>

      </div>

      <div class="col-lg-3 col-md-6">

       <div class="contact-box text-center">

          <i class="fa fa-phone"></i>

          <h5>Phone</h5><?php

          if(mysqli_num_rows($phone) > 0)

                  {

                         

                   {  $row4 = mysqli_fetch_assoc($phone);?>

          <p>1-877-Centive<br><?= $row4['data']?></p>

          <?php

          }}

          ?>

        </div>

      </div>

      <div class="col-lg-3 col-md-6">

       <div class="contact-box text-center">

          <i class="fa fa-envelope-o"></i>

          <h5>Email</h5>

          <?php

          if(mysqli_num_rows($email) > 0)

                  {

                         

                   {  $row4 = mysqli_fetch_assoc($email);?>

          <a href="mailto:<?= $row4['data']?>"><?= $row4['data']?><br><br></a>

          <?php

          }}?>

        </div>

      </div>

      <div class="col-lg-3 col-md-6">

       <div class="contact-box text-center">

          <i class="fa fa-fax"></i>

          <h5>Fax</h5>

          <?php

          if(mysqli_num_rows($fax) > 0)

                  {

                         

                   {  $row4 = mysqli_fetch_assoc($fax);?>

          <p><?= $row4['data']?><br><br></p>

          <?php

                   }}

          ?>

        </div>

      </div>

    </div>

    <div class="row mt-4">

        <div class="col-md-12">

            <div class="row">

                <div class="col-md-6">

                    

                        <form action="">

                            <p style="text-align:center;">

                                 <button type="submit" class="btn btn-outline-primary" name="AppoinmentForDealership">Appointment For Dealership</button>

                            </p>

                        </form>

                    

                </div>

                <div class="col-md-6">

                    

                        <form action="">

                            <p style="text-align:center;">

                                <button type="submit" class="btn btn-outline-primary" name="AppoinmentForConsultation">Appointment For Consultation</button>

                            </p>

                        </form>

                    

                </div>

            </div

                

                <div class="row">

                    <?php

                    

                    if(isset($_GET['AppoinmentForDealership'])){

                        ?>

                        <div class="alert alert-secondary">

                				    	            

                				    	            <div class="mt-3">

                				    	                

                				    	                <p style="text-align:center;"> 

                				    	                    <h2 style="text-align:center;">Appointment For Dealership</h2>

                				    	                    

                                                            <form class="mt-5" action="backend.php" method="POST">

                                                                <div class="form-group">

                                                                <input type="text" class="form-control" placeholder="Enter Your Firt Name" name="name" required>

                                                              </div>

                                                              <div class="form-group">

                                                                <input type="text" class="form-control" placeholder="Enter Your Last Name" name="lname" required>

                                                              </div>

                                                              

                                                              <div class="form-group">

                                                                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" required>

                                                              </div>
                                                              
                                                              
                                                                 
                                                              <div class="form-group">
                                                                    <input placeholder="Date & Time" class="textbox-n form-control" type="text" onfocus="(this.type='datetime-local')" id="date"  name="dateTime" required>
                                                                </div>

                                                              <div class="form-group">

                                                                <input type="tel" class="form-control" placeholder="Enter Your Phone Number" name="phone" required>

                                                              </div>

                                                           

                                                              <div class="form-group">

                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reason" placeholder="Comment"></textarea>

                                                              </div>

                                                              <button type="submit" class="btn btn-primary" name="Dealership123">Submit</button>

                                                            </form>

                                                            

                                                            

                                                            

                                                         </p>

                                                    </div>

                                                 

                         </div>

                        

                        <?php

                        

                    }elseif(isset($_GET['AppoinmentForConsultation'])){

                        ?>

                        

                          <div class="alert alert-secondary ">

                				    	            

                				    	            <div class="mt-3">

                				    	                

                				    	                <p style="text-align:center;"> 

                				    	                    <h2 style="text-align:center;">Appointment For Consultation</h2>

                                                             <div class="row">

                                                <div class="col-lg-7 col-sm-12 mt-5">
                                        
                                                <form class="form-horizontal mt-5" role="form" method="post" action="admin/action.php"> 
                                        
                                                  <div class="row">
                                        
                                                        <div class="col-md-6">
                                        
                                                            <div class="form-group">
                                        
                                                              <input type="text" placeholder="Enter First Name*" class="form-control" name="name" required>
                                        
                                                            </div>
                                        
                                                        </div>

                

                <div class="col-md-6">

                    <div class="form-group">

                      <input type="text" placeholder="Enter Last Name*" class="form-control" name="lname" required>

                    </div>

                </div>

                

                

                <div class="col-md-6">

                    <div class="selected-box">

                        <select class="selectpicker" name="dealership" required>

                            <option value="">Choose Type of Purchase</option>

                            <option value="Dealership Purchase">Dealership Purchase  </option>

                            <option value="Private Purchase">Private Purchase </option>

                            <option value="Lease a Car">Lease a Car </option>

                            <option value="Lease Buyout">Lease Buyout  </option>

                            <option value="Lease Transfer">Lease Transfer  </option>

                            <option value="Sell a Car">Sell a Car </option>

                        </select>

                    </div>

                </div>

                

                <div class="col-md-6">

                    <div class="form-group">

                          <input type="email" placeholder="Enter Email Address*" class="form-control" name="email" required>

                    </div>

                </div>

                

                <div class="col-md-6">

                    <div class="form-group">

                        <input type="text" placeholder="Phone Number*" class="form-control" name="phone" required>

                    </div>

                </div>

                

                <div class="col-md-6">

                    <div class="form-group">
                        <input placeholder="Date & Time" class="textbox-n form-control" type="text" onfocus="(this.type='datetime-local')" id="date"  name="time" required>

                        </div>

                </div>
                
                 <div class="col-md-6">
                
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">$</div>
                    </div>
                    <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="Monthly Budget" name="budget" required>
                  </div>
                </div>
                
                  <div class="col-md-6">
                
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">$</div>
                    </div>
                    <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="Down Payment Amount" name="amount" required>
                  </div>
                </div>

                

               

                


                

                <div class="col-md-12" style="    padding-top: 10px;">

                    <button class="button" type="submit" name="send">Submit </button>

                </div>

              

              

          </div>

        </div>

</form> 

        

         <div class="col-md-5 align-self-end">

           <img class="img-fluid center-block" src="images/03.png" alt="">

         </div>

      </div>

    </div>

                                                            

                                                            

                                                            

                                                         </p>

                                                    </div>

                                                 

                         </div>

                        <?php

                        

                    }else{

                    ?>

                    <div class="col-md-12">

                         <div class="alert alert-primary">

                				    	            

                			<div class="mt-3">

                				    	<p style="text-align:center;"> 

                                                Select Any One <strong>Option</strong>

                                        </p>

                            </div>

                                                 

                             </div>

                    </div>

                    <?php    

                    }

                    

                    ?>

            </div>

        </div>

    

    

    

    

    

    

    

    <div class="page-section-ptb">

      <div class="row">

       <div class="col-lg-8 col-sm-12">

       <div class="gray-form">

         <div id="formmessage">Success/Error Message Goes Here</div>

           <form class="form-horizontal" role="form" method="post" action="email.php">

            <div class="contact-form row">

              <div class="col-lg-4 col-sm-12">

               <div class="form-group">

                 <input id="name" type="text" placeholder="Name*" class="form-control"  name="name" required>

               </div> 

             </div> 

             <div class="col-lg-4 col-sm-12">

               <div class="form-group">

                 <input type="email" placeholder="Email*" class="form-control" name="email" required>

                </div>

              </div>

              <div class="col-lg-4 col-sm-12">

                <div class="form-group">

                  <input type="text" placeholder="Phone*" class="form-control" name="phone" required>

                </div>

              </div>

              <div class="col-md-12">

                 <div class="form-group">

                   <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="message" required></textarea>

                 </div>

              </div>

              <div class="col-md-12">

                 <input type="hidden" name="action" value="sendEmail"/>

                 <button id="submit" name="send" type="submit" class="button red"> Send your message </button>

               </div>

              </div>

          </form>

          <div id="ajaxloader" style="display:none"><img class="center-block" src="images/ajax-loader.gif" alt=""></div> 

           </div> 

       </div>

      <div class="col-lg-4 col-sm-12 mt-lg-0 mt-4">

        <div class="opening-hours gray-bg mt-sm-0">

          <h6>Hours of Operation</h6>

          <ul class="list-style-none">

            <li><strong>Sunday</strong> <span class="text-red"> closed</span></li>

            <?php

          if(mysqli_num_rows($m) > 0)

                  {

                         

                   {  $row4 = mysqli_fetch_assoc($m);?>

         

    

            

            <li><strong>Monday</strong> <span> <?php

                $str = $row4['StartTimming'];

                $time = explode(":",$str);

                echo $time['0'].":".$time['1']." AM ";

                ?> 

            

            

            

         to  <?php

                $str = $row4['EndTimming'];

                $time = explode(":",$str);

                echo $time['0'].":".$time['1']." PM ";

                ?> </span></li>

            <?php

            }}

            ?> <?php

          if(mysqli_num_rows($t) > 0)

                  {

                         

                   {  $row4 = mysqli_fetch_assoc($t);?>

          

            

            

            <li><strong>Tuesday </strong> <span> <?php

                $str = $row4['StartTimming'];

                $time = explode(":",$str);

                echo $time['0'].":".$time['1']." AM ";

                ?> 

            

            

            

         to  <?php

                $str = $row4['EndTimming'];

                $time = explode(":",$str);

                echo $time['0'].":".$time['1']." PM ";

                ?> </span></li>

            

             <?php

            }}

            ?> <?php

          if(mysqli_num_rows($w) > 0)

                  {

                         

                   {  $row4 = mysqli_fetch_assoc($w);?>

            

            

            <li><strong>Wednesday </strong> 

            

            

            <span> <?php

                $str = $row4['StartTimming'];

                $time = explode(":",$str);

                echo $time['0'].":".$time['1']." AM ";

                ?> 

            

            

            

         to  <?php

                $str = $row4['EndTimming'];

                $time = explode(":",$str);

                echo $time['0'].":".$time['1']." PM ";

                ?> </span></li>

         

         

         

             <?php

            }}

            ?> <?php

          if(mysqli_num_rows($th) > 0)

                  {

                         

                   {  $row4 = mysqli_fetch_assoc($th);?>

            

            

            <li><strong>Thursday </strong> <span> <?php

                $str = $row4['StartTimming'];

                $time = explode(":",$str);

                echo $time['0'].":".$time['1']." AM ";

                ?> 

            

            

            

         to  <?php

                $str = $row4['EndTimming'];

                $time = explode(":",$str);

                echo $time['0'].":".$time['1']." PM ";

                ?> </span></li>

             <?php

            }}

            ?> <?php

          if(mysqli_num_rows($f) > 0)

                  {

                         

                   {  $row4 = mysqli_fetch_assoc($f);?>

            

            

            <li><strong>Friday </strong> <span> <?php

                $str = $row4['StartTimming'];

                $time = explode(":",$str);

                echo $time['0'].":".$time['1']." AM ";

                ?> 

            

            

            

         to  <?php

                $str = $row4['EndTimming'];

                $time = explode(":",$str);

                echo $time['0'].":".$time['1']." PM ";

                ?> </span></li>

             <?php

            }}

            ?> <?php

          if(mysqli_num_rows($s) > 0)

                  {

                         

                   {  $row4 = mysqli_fetch_assoc($s);?>

            

            

            <li><strong>Saturday </strong> <span> <?php

                $str = $row4['StartTimming'];

                $time = explode(":",$str);

                echo $time['0'].":".$time['1']." AM ";

                ?> 

            

            

            

         to  <?php

                $str = $row4['EndTimming'];

                $time = explode(":",$str);

                echo $time['0'].":".$time['1']." PM ";

                ?> </span></li>

            

             <?php

            }}

            ?> 

            

            

          </ul>

        </div>

      </div>

     </div>

  </div>

  </div>

</section>



<!--=================================

 contact -->

<?php

include ("footer.php");

?>