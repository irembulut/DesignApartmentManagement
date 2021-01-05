<?php

include ("config.inc.php");
 
$username = $password = $confirm_password = "";


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(empty(($_POST["username"]))){
        header("Location:../admin.register.php?error=usrfieldblank");
    }
    if (!preg_match("/^[a-zA-Z ]*$/",test_input($_POST["username"]))) {
        header("Location:../welcome.php?error=invalidusrnametype");
    }
    else{
        $sql = "SELECT * FROM admin WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            $param_username=test_input($_POST["username"]);
            
            mysqli_stmt_bind_param($stmt, "s",$param_username );
           
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    header("Location:../admin.register.php?error=usrnametaken");
                } else{
                    $username = test_input($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    }
    
    
    
    
    
    
    
     if(empty((test_input($_POST["email"])))){
        header("Location:../admin.register.php?error=mailfieldblank");
    }
    else if ( !filter_var(test_input($_POST["email"], FILTER_VALIDATE_EMAIL))) {
        header("Location:../admin.register.php?error=invalidmailtype");

    }
    
    
    else{
        $sql = "SELECT * FROM admin WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            $param_email=test_input($_POST["email"]);
            
            mysqli_stmt_bind_param($stmt, "s",$param_email );
           
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    header("Location:../admin.register.php?error=mailtaken");
                } else{
                    $email = test_input($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

        }
            mysqli_stmt_close($stmt);

         
    }
   
    
    
    
    
    
    
    
    
    if(empty(test_input($_POST["password"]))){
        header("Location:../admin.register.php?error=pwdfieldblank");
     } else{
        $password = test_input($_POST["password"]);
    }
    
    if(empty(test_input($_POST["confirm_password"]))){
        header("Location:../admin.register.php?error=repwdfieldblank");
    } else{
        $confirm_password = test_input($_POST["confirm_password"]);
            $confirm=true;

        if(!empty($password)&&($password != $confirm_password)){
            header("Location:../admin.register.php?error=invalidpwdmatch");
            $confirm=false;
        }
    }
    
   
    if (!empty($_POST['username']) && !empty($_POST['password']) &&  !empty($_POST['email']) ) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO admin (username, password, email) VALUES ('$username','$hashedpassword' ,'$email')";


      //mysqli_query($conn,$sql);
      if ($link->query($sql) === TRUE) {
        echo "Created succesfully.!<br />";
      } else {
        echo " Please try again later..<br />";
      }
      header("location: ../admin.login.php");

    }

    
    
    mysqli_close($link);
}