<?php
session_start();

 $dbuser = 'carcenti_carcentive_admin';
   			$dbpwd = 'atecco@123';
   			$dbname = 'carcenti_carcentive2';
   			$dbserver = 'localhost';
   		
   		    $db = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
   
   
   		    if ($db->connect_errno > 0){
   		        echo "Failed to connect to MySQL: " . $db->connect_error;
   		    }

if(isset($_POST['Recovery_Email'])){
    
    
           
   		  
   		  
            $email=$_POST['email'];
            $sql = "SELECT * FROM `login` WHERE `email`='$email'";
            $result = $db->query($sql);
            
            if ($result->num_rows > 0) {
                
                $row = $result->fetch_assoc();
                $username=$row['username'];
                
                $subject="Password Reset";
                $body ="Hi, 
                $subject Click here to Activate your Account        https://www.carcentive.com/admin/Reset_Password.php?token=$username";
                $sender_mail = "FROM: Sales@carcentive.com";
                if(mail($email, $subject, $body, $sender_mail)){
                    $_SESSION['msg1']="Please Check Your Email";
                    header("Location: https://www.carcentive.com/admin/index.php?status=1");
                }
                
                
                
              echo"$username";
            }else{
                echo"No Email Found";
                
            }
            $conn->close();
            
}

if(isset($_POST['Reset_Password'])){
    $token = $_GET['token'];
    $passwoed = $_POST['pass'];
    $cpasswoed = $_POST['cpass'];
    if($passwoed==$cpasswoed){
        
        
            $sql = "UPDATE `login` SET`password`='$cpasswoed' WHERE `username`='$token'";
            
            
            if ($db->query($sql) === TRUE) {
              $_SESSION['Updated']="Your Password Updated";
              header("Location: https://www.carcentive.com/admin/index.php?status=1");
            } else {
              echo "Error updating record: " . $conn->error;
            }

    }else{
        $_SESSION['passwordnotmatch']="You Password Does not Machted";
        header("Location: https://www.carcentive.com/admin/Reset_Password.php?token=$token");
    }
    
    

    
}

if(isset($_POST['signup'])){
    
    $name = $db -> real_escape_string($_POST['username']);
    $email = $db -> real_escape_string($_POST['email']);
    $status = $db -> real_escape_string($_POST['status']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    if($password==$cpassword){
        
        
        $sql = "INSERT INTO `login`(`username`, `email`, `password`, `Status`) VALUES ('$name','$email','$password','$status')";
        
        if ($db->query($sql) === TRUE) {
          $_SESSION['useradded'] = "Registered Successfully";
          header("Location: https://www.carcentive.com/admin/signup1.php");
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

    
    
    }else{
        $_SESSION['Password Does not Matched'] = "Password Does not Matched";
        header("Location: https://www.carcentive.com/admin/signup1.php");
    }

    
}

?>