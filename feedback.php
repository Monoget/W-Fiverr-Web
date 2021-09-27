<?php
include ("header.php");
?>
<!--=================================
 inner-intro -->
 
 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white">Give Feedback</h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Feedback</span> </li>
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
    <div class="page-section-ptb">
      <div class="row">
       <div class="col-lg-12 col-sm-12">
       <div class="gray-form">
         <div id="formmessage">Success/Error Message Goes Here</div>
           <form class="form-horizontal" role="form" method="post" action="admin/action.php" enctype="multipart/form-data">
            <div class="contact-form row">
              <div class="col-lg-4 col-sm-12">
               <div class="form-group">
                 <input  type="text" placeholder="Name*" class="form-control"  name="name">
               </div> 
             </div>
                 <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                  <input type="text" placeholder="make*" class="form-control" name="make">
                </div>
              </div>
                  <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                  <input type="text" placeholder="model*" class="form-control" name="model">
                </div>
              </div>
                  <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                  <input type="text" placeholder="year*" class="form-control" name="year">
                </div>
              </div>
             <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                 <input type="File" class="form-control" name="file">
                </div>
              </div>
              <div class="col-md-12">
                 <div class="form-group">
                   <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                 </div>
              </div>
            <div class="col-md-4"></div>
              <div class="col-md-4">
                 <input type="hidden" name="action" value="sendEmail"/>
                 <button  name="send_feedback" type="submit" class="button red"> Send your Feedback </button>
               </div>
              </div>
          </form>
          <div id="ajaxloader" style="display:none"><img class="center-block" src="images/ajax-loader.gif" alt=""></div> 
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