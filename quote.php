<?php



include ("header.php");

// include ("database.php");

// $ref_Name_Error="";

// $name="";



// if ($_SERVER["REQUEST_METHOD"] == "POST") {



// if (empty($_POST["name"])) {

// $ref_Name_Error = "* Referrer Name is required";

// }else {

//     $name = test_input($_POST["name"]);



//     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {

//       $ref_Name_Error = "Only letters and white space allowed";

//     }

// }



// function test_input($data) {

//   $data = trim($data);

//   $data = stripslashes($data);

//   $data = htmlspecialchars($data);

//   return $data;

// }









// if (isset($_POST['send'])) {

	

//     if(!empty($_POST['name']) AND !empty($_POST['lname']) AND !empty($_POST['email']) AND !empty($_POST['phone']) AND !empty($_POST['time']) AND !empty($_POST['budget']) AND !empty($_POST['amount']) AND !empty($_POST['dealership']))

//     {

//     $name       = $_POST['name'];

//     $lname       = $_POST['lname'];

//     $email       = $_POST['email'];

//     $phone      = $_POST['phone'];

//     $time      = $_POST['time'];

//     $budget      = $_POST['budget'];

//     $amount      = $_POST['amount'];

//     $dealership      = $_POST['dealership'];

    

    

//         $query         = "INSERT into quote(name,lname,email,phone,time,budget,amount,dealership) VALUES('$name','$lname','$email','$phone','$time','$budget','$amount','$dealership')";

// 		$insert        = db::query($query);

		

// 		if ($insert === TRUE) {

//       echo "New record created successfully";

//     } else {

//       echo "Error: " . $sql . "<br>" . $conn->error;

//     }

 

//     $message=file_get_contents("email.html");

    

//     $variables= array(



//         "{{name}}" => $name,

//         "{{lname}}" => $lname,

//         "{{email}}" => $email,

//         "{{phone}}" => $phone,

//         "{{time}}" => $time,

//         "{{budget}}" => $budget,

//         "{{amount}}" => $amount,

//         "{{dealership}}" => $dealership

        

//         );



//     foreach($variables as $key => $value){

//       $message= str_replace($key, $value, $message);

//      }

     

     

//     //print_r($message);

//     $to = 'sales@carcentive.com';

//     $subject = 'checking info';

//     $from = 'google@email.com';

     

//     // To send HTML mail, the Content-type header must be set

//     $headers  = 'MIME-Version: 1.0' . "\r\n";

//     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     

//     // Create email headers

//     $headers .= 'From: '.$from."\r\n".

//         'Reply-To: '.$from."\r\n" .

//         'X-Mailer: PHP/' . phpversion();

     

    

     

//     // Sending email

//     if(mail($to, $subject, $message, $headers)){

//         header("Location: https://www.carcentive.com/messagescreen.php");

        

//     } else{

//         echo 'Unable to send email. Please try again.';

    // }

//     $mail = new PHPMailer(true);

// try{



// //Server Settings

// 	$mail->SMTPDebug = SMTP::DEBUG_SERVER;

// 	$mail->isSMTP();

// 	$mail->Host     = 'smtp.gmail.com';

// 	$mail->SMTPAuth = true;

// 	$mail->Username = 'carcenti@carcentive.com';

// 	$mail->Password = 'Kwame123$.';

// 	$mail->Port     = 587;



// //Recipients

// 	$mail->setFrom('carcenti@carcentive.com', 'Mailer');

// 	$mail->addAddress('faizanmir74@gmail.com');



    

    



    

//     // Content

//     $mail->isHTML(true);                                  // Set email format to HTML

//     $mail->Subject = 'Subject';

//     $mail->Body    = $message;

     



//     $mail->send();

//     echo "<script>alert('Message Sent Successfully!');</script>";

//     echo "<script>location='../quote.php?status=1'</script>";

// } catch (Exception $e) {

//     echo "<script>alert('Something Went Wrong!');</script>";

//     echo "<script>location='../quote.php?status=1'</script>";

// }

    

//     echo "<script>alert('Message Sent Successfully!');</script>";

//     echo "<script>location='../quote.php?status=1'</script>";

    

//     }

// }





$query = "SELECT * FROM `RequestAConsultation` ORDER BY id DESC";

$RequestAConsultation = mysqli_query($db, $query);



$query = "SELECT * FROM `consultationAvailablity` ORDER BY id DESC";

$consultationAvailablity = mysqli_query($db, $query); 





?>





<section class="inner-intro bg-1 bg-overlay-black-70" style="background:url">

  <div class="container">

     <div class="row text-center intro-title">

           <div class="col-md-6 text-md-left d-inline-block">

             <h1 class="text-white">Request a Consultation </h1>

           </div>

           <div class="col-md-6 text-md-right float-right">

             <ul class="page-breadcrumb">

                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>

                <li><span>Request a Consultation </span> </li>

             </ul>

           </div>

     </div>

  </div>

</section>



 <section class="service-center white-bg page-section-ptb">

 <div class="container">

   <div class="row">

       <?php

       if(mysqli_num_rows($RequestAConsultation) > 0)

                  {

                         

                   {  $row4 = mysqli_fetch_assoc($RequestAConsultation);

       

       ?>

       

     <div class="col-md-6">

        <h5><?= $row4['Main Heading']?></h5>          

        <p style="text-align:justify;"><?php

        $x=$row4['Message'];

        echo $change= str_replace("~","'",$x);

        

        ?></p>

        <ul class="list-style-1">

          <li><i class="fa fa-check"></i><?= $row4['Sub H1']?></li>

          <li><i class="fa fa-check"></i><?= $row4['Sub H2']?></li>

          <li><i class="fa fa-check"></i><?= $row4['Sub H3']?></li>

           <li><i class="fa fa-check"></i><?= $row4['Sub H4']?></li>

        </ul>

    </div>

    <div class="col-md-6">

        

      <img class="img-fluid center-block" src="<?= $row4['image']?>" alt="">

    </div>

    <?php

                   }}

    ?>

    

   </div>

  </div>

</section>



 <!--=================================

 form -->



<section class="search-block find-car bg-1 bg-overlay-black-70 page-section-pt">

  <div class="container">

  <div class="row">

    <div class="col-md-12">

      <div class="section-title text-left">

         <h2 class="text-white">APPOINTMENT FOR CONSULTATION</h2>

         <div class="separator"></div>

      </div>

    </div>

   </div>

    <div class="row">

        <div class="col-lg-7 col-sm-12">

        <form class="form-horizontal" role="form" method="post" action="admin/action.php"> 

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

               

                

                <div class="col-md-6 mt-2">

                    <div class="form-group">

                          <input type="email" placeholder="Enter Email Address*" class="form-control" name="email" required>

                    </div>

                </div>

                

                <div class="col-md-6">

                    <div class="form-group">

                        <input type="text" placeholder="Phone Number*" class="form-control" name="phone" required>

                    </div>

                </div>

                

                

                

                <div class="col-sm-6">

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
                  <center>
                    <button class="button" type="submit" name="send">Submit </button>
                </center>

                </div>

              

              

          </div>

        </div>

</form> 

        

         <div class="col-md-5 align-self-end">

           <img class="img-fluid center-block" src="images/03.png" alt="">

         </div>

      </div>

    </div>

  </section> 



 <!--=================================

 form -->



























<?php

include ("footer.php");

?>