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

 
    if(empty(($_POST["firstname"]))){
        header("Location:../members.php?error=usrfieldblank");
    }
    if (!preg_match("/^[a-zA-Z ]*$/",test_input($_POST["firstname"]))) {
        header("Location:../members.php?error=invalidusrnametype");
    }
    else{
        $sql = "SELECT * FROM users WHERE firstname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            $param_username=test_input($_POST["firstname"]);
            
            mysqli_stmt_bind_param($stmt, "s",$param_firstname );
           
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    header("Location:../members.php?error=usrnametaken");
                } else{
                    $firstname = test_input($_POST["firstname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    }


    if(empty(($_POST["lastname"]))){
        header("Location:../members.php?error=usrfieldblank");
    }
    if (!preg_match("/^[a-zA-Z ]*$/",test_input($_POST["lastname"]))) {
        header("Location:../members.php?error=invalidusrnametype");
    }
    else{
        $sql = "SELECT * FROM users WHERE lastname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            $param_username=test_input($_POST["lastname"]);
            
            mysqli_stmt_bind_param($stmt, "s",$param_lastname );
           
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    header("Location:../members.php?error=usrnametaken");
                } else{
                    $username = test_input($_POST["lastname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    }





    if(empty(($_POST["username"]))){
        header("Location:../members.php?error=usrfieldblank");
    }
    if (!preg_match("/^[a-zA-Z ]*$/",test_input($_POST["username"]))) {
        header("Location:../members.php?error=invalidusrnametype");
    }
    else{
        $sql = "SELECT * FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            $param_username=test_input($_POST["username"]);
            
            mysqli_stmt_bind_param($stmt, "s",$param_username );
           
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    header("Location:../members.php?error=usrnametaken");
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
        header("Location:../members.php?error=mailfieldblank");
    }
    else if ( !filter_var(test_input($_POST["email"], FILTER_VALIDATE_EMAIL))) {
        header("Location:../members.php?error=invalidmailtype");

    }
    
    
    else{
        $sql = "SELECT * FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            $param_email=test_input($_POST["email"]);
            
            mysqli_stmt_bind_param($stmt, "s",$param_email );
           
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    header("Location:../members.php?error=mailtaken");
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
        header("Location:../welcome.php?error=pwdfieldblank");
     } else{
        $password = test_input($_POST["password"]);
    }
    
    if(empty(test_input($_POST["confirm_password"]))){
        header("Location:../welcome.php?error=repwdfieldblank");
    } else{
        $confirm_password = test_input($_POST["confirm_password"]);
            $confirm=true;

        if(!empty($password)&&($password != $confirm_password)){
            header("Location:../welcome.php?error=invalidpwdmatch");
            $confirm=false;
        }
    }
    
   
    if ($password==$confirm_password &&!empty($_POST['username']) && !empty($_POST['firstname']) && !empty($_POST['password']) && !empty($_POST['lastname'])&& !empty($_POST['email'])&& !empty($_POST['phone'])&& !empty($_POST['otherphone'])&& !empty($_POST['flat']) ) {
      $username = $_POST['username'];
      $firstname = $_POST['firstname'];
      $password = $_POST['password'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $otherphone = $_POST['otherphone'];
      $flat = $_POST['flat'];
      $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO users (username, firstname, password, lastname, email, phone, otherphone, flat) VALUES ('$username', '$firstname','$hashedpassword' ,'$lastname','$email','$phone','$otherphone','$flat')";


      //mysqli_query($conn,$sql);
      if ($link->query($sql) === TRUE) {
        echo "Created succesfully.!<br />";
      } else {
        echo " Please try again later..<br />";
      }
      header("location: ../members.php");

    }

    
    
    mysqli_close($link);
}



?>