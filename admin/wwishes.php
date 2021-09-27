<?php
   include "sessions.php";
   include "header.php";
   include "sidebar.php";
   
   $status=NULL;
   
   if(isset($_GET['status']))
   {
    $status=$_GET['status'];
   }
   
 
   ?>
<!--**********************************
   Content body start
   ***********************************-->
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="page-titles">
         <div class="row">
            <div class="col-md-6">
               <div class="mr-auto d-none d-lg-block">
                  <button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#categoryModal">Send Mail All</button>
               </div>
            </div>
            <div class="col-md-6">
               <?php
                  if($status==1)
                    {
                      
                     ?>
               <div class="alert alert-success alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> Section successfully Updated.
               </div>
               <?php 
                  }
                  elseif($status==2)
                  {
                  
                  ?>
               <div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Danger!</strong> Section Is Not Updated!
               </div>
               <?php
                  } 
                    ?>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-12">
            <div class="table-responsive">
               <table id="example5" class="table table-striped patient-list mb-4 dataTablesCard fs-14">
                  <thead>
                     <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Event</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     
                     
                     
                       $query = "SELECT * FROM `DealerAppo` WHERE `wish status`= 'not send'";
                       $rec = db::getRecords($query);
                       
                        if($rec!=NULL)
                        {
                        foreach($rec as $rec2)
                                                    
                        { 
                        $currentdate = date("Y-m-d");
                       
                        $currentsep = explode("-",$currentdate);
                        
                        $cmonthdate = $currentsep['1']."-".$currentsep['2'];
                     
                        
                        $Birthday = $rec2['birthday'];
                        
                        $btsep = explode("-",$Birthday);
                        
                        $bmonthdate = $btsep['1']."-".$btsep['2'];
                        
                        
                                     
                        $aniversery = $rec2['Aniversery'];
                        
                          $acurrentsep = explode("-",$aniversery);
                        
                        $acmonthdate = $acurrentsep['1']."-".$acurrentsep['2'];
                      
                        if($cmonthdate == $bmonthdate or $acmonthdate == $cmonthdate){
                        
                        ?> 
                     <tr>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['id']; ?>
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['name']; ?> 
                           </div>
                        </td>
                          <td>
                           <div class="text-center align-self-center">
                               
                              <?php 
                              
                              if($cmonthdate == $bmonthdate){
                                  $event ="Birthday";
                                  echo $event;
                               
                               }else{
                                   $event = "Anniversary";
                                   echo $event;
                               }
                               
                              
                              ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                                <?php 
                              
                              if($cmonthdate == $bmonthdate){
                                $dateee = $rec2['birthday'];
                                $date=date_create($dateee);
                                echo date_format($date,"m/d/Y");
                               
                               }else{
                 
                                $dateee = $rec2['Aniversery'];
                                $date=date_create($dateee);
                                echo date_format($date,"m/d/Y");
                               }
                               
                              
                              ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                            <a href="sendmailwish.php?event=<?= $event?>&id=<?=  $rec2['id']; ?>"><button type="submit" class="btn btn-outline-primary">Send Wish</button></a>     
                           </div>
                        </td>
                     </tr>
                 
                     <?php } } }?>
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                      <?php
                     
                     
                     
                       $query = "SELECT * FROM `referral` WHERE `wish status`='not send'";
                       $rec = db::getRecords($query);
                       
                        if($rec!=NULL)
                        {
                        foreach($rec as $rec2)
                                                    
                        { 
                        $currentdate = date("Y-m-d");
                       
                        $currentsep = explode("-",$currentdate);
                        
                        $cmonthdate = $currentsep['1']."-".$currentsep['2'];
                     
                        
                        $Birthday = $rec2['birthday'];
                        
                        $btsep = explode("-",$Birthday);
                        
                        $bmonthdate = $btsep['1']."-".$btsep['2'];
                        
                        
                                     
                        $aniversery = $rec2['Aniversery'];
                        
                          $acurrentsep = explode("-",$aniversery);
                        
                        $acmonthdate = $acurrentsep['1']."-".$acurrentsep['2'];
                      
                        if($cmonthdate == $bmonthdate or $acmonthdate == $cmonthdate){
                        
                        ?> 
                     <tr>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['id']; ?>
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['name']; ?> 
                           </div>
                        </td>
                          <td>
                           <div class="text-center align-self-center">
                               
                              <?php 
                              
                              if($cmonthdate == $bmonthdate){
                                  $event ="Birthday";
                                  echo $event;
                               
                               }else{
                                   $event = "Anniversary";
                                   echo $event;
                               }
                               
                              
                              ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                                <?php 
                              
                              if($cmonthdate == $bmonthdate){
                                $dateee = $rec2['birthday'];
                                 $date=date_create($dateee);
                                echo date_format($date,"m/d/Y");
                                
                               
                               }else{
                                    $dateee = $rec2['Aniversery'];
                                     $date=date_create($dateee);
                                echo date_format($date,"m/d/Y");
                               }
                               
                              
                              ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                            <a href="sendmailwish.php?refferalevent=<?= $event?>&refferalid=<?=  $rec2['id']; ?>"><button type="submit" class="btn btn-outline-primary">Send Wish</button></a>     
                           </div>
                        </td>
                     </tr>
                 
                     <?php } } }?>
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                      <?php
                     
                     
                     
                       $query = "SELECT * FROM `quote` WHERE `wish status`='not send'";
                       $rec = db::getRecords($query);
                       
                        if($rec!=NULL)
                        {
                        foreach($rec as $rec2)
                                                    
                        { 
                        $currentdate = date("Y-m-d");
                      
                       
                        $currentsep = explode("-",$currentdate);
                        
                        $cmonthdate = $currentsep['1']."-".$currentsep['2'];
                     
                        
                        $Birthday = $rec2['birthday'];
                        
                        $btsep = explode("-",$Birthday);
                        
                        $bmonthdate = $btsep['1']."-".$btsep['2'];
                        
                        
                                     
                        $aniversery = $rec2['aniversery'];
                        
                          $acurrentsep = explode("-",$aniversery);
                        
                        $acmonthdate = $acurrentsep['1']."-".$acurrentsep['2'];
                      
                        if($cmonthdate == $bmonthdate or $acmonthdate == $cmonthdate){
                        
                        ?> 
                     <tr>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['id']; ?>
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['name']; ?> 
                           </div>
                        </td>
                          <td>
                           <div class="text-center align-self-center">
                               
                              <?php 
                              
                              if($cmonthdate == $bmonthdate){
                                  $event ="Birthday";
                                  echo $event;
                               
                               }else{
                                   $event = "Anniversary";
                                   echo $event;
                               }
                               
                              
                              ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                                <?php 
                              
                              if($cmonthdate == $bmonthdate){
                                $dateee = $rec2['birthday'];
                                     $date=date_create($dateee);
                                echo date_format($date,"m/d/Y");
                                
                               
                               }else{
                                    $dateee = $rec2['aniversery'];
                                    $date=date_create($dateee);
                                echo date_format($date,"m/d/Y");
                               }
                               
                              
                              ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                            <a href="sendmailwish.php?quotesevent=<?= $event?>&quotesid=<?=  $rec2['id']; ?>"><button type="submit" class="btn btn-outline-primary">Send Wish</button></a>     
                           </div>
                        </td>
                     </tr>
                 
                     <?php } } }?>
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                       <?php
                     
                     
                     
                       $query = "SELECT * FROM `Customer_data` WHERE `wish status`='not send'";
                       $rec = db::getRecords($query);
                       
                        if($rec!=NULL)
                        {
                        foreach($rec as $rec2)
                                                    
                        { 
                        $currentdate = date("Y-m-d");
                      
                       
                        $currentsep = explode("-",$currentdate);
                        
                        
                        $cmonthdate = $currentsep['1']."-".$currentsep['2'];
                     
                        
                        $Birthday = $rec2['Birthday'];
                     
                        $btsep = explode("-",$Birthday);
                        
                        $bmonthdate = $btsep['1']."-".$btsep['2'];
                        
                        
                                     
                        $aniversery = $rec2['AnniverseryDay'];
                        
                          $acurrentsep = explode("-",$aniversery);
                        
                        $acmonthdate = $acurrentsep['1']."-".$acurrentsep['2'];
                      
                        if($cmonthdate == $bmonthdate or $acmonthdate == $cmonthdate){
                        
                        ?> 
                     <tr>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['id']; ?>
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                              <?php echo $rec2['FirstName']." ".$rec2['LastName']; ?> 
                           </div>
                        </td>
                          <td>
                           <div class="text-center align-self-center">
                               
                              <?php 
                              
                              if($cmonthdate == $bmonthdate){
                                  $event ="Birthday";
                                  echo $event;
                               
                               }else{
                                   $event = "Anniversary";
                                   echo $event;
                               }
                               
                              
                              ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                                <?php 
                              
                              if($cmonthdate == $bmonthdate){
                                $dateee = $rec2['Birthday'];
                                 $date=date_create($dateee);
                                echo date_format($date,"m/d/Y");
                                
                               
                               }else{
                                    $dateee = $rec2['AnniverseryDay'];
                                      $date=date_create($dateee);
                                echo date_format($date,"m/d/Y");
                               }
                               
                              
                              ?> 
                           </div>
                        </td>
                        <td>
                           <div class="text-center align-self-center">
                            <a href="sendmailwish.php?cdevent=<?= $event?>&cdid=<?=  $rec2['id']; ?>"><button type="submit" class="btn btn-outline-primary">Send Wish</button></a>     
                           </div>
                        </td>
                     </tr>
                 
                     <?php } } }?>
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="categoryModal">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h3 class="modal-title">Send Mail All</h3>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
            </button>
         </div>
         <div class="modal-body" style="padding-bottom:0px;">
            <form action="sendmailwish.php" method="POST" enctype="multipart/form-data">
              
               <br><br>
               <div class="row">
                  <div class="col-md-10">
                     <div class="row">
                        <div class="col-md-10">
                           <label style="margin-left: 8px; font-weight: bold;"> Type Subject Here:</label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <input class="form-control" type="text" name="Subject">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                <div class="row">
                  <div class="col-md-10">
                     <div class="row">
                        <div class="col-md-10">
                           <label style="margin-left: 8px; font-weight: bold;"> Type Message Here:</label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                                 <textarea class="form-control"  id="comment" name="message"></textarea>
                        
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <br>
               <div class="row">
                  <div class="modal-footer col-md-12" style="justify-content:center">
                     <button type="submit" class="btn btn-success btn-icon-split" name="Allmail">
                     <span class="text">Submit</span></button>
                  <a class="btn btn-default" href="https://www.carcentive.com/admin/wwishes.php" style="background-color:Red;color:white;" class="mb-0">Back</a>
                 </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php
   include "footer.php";
   ?>