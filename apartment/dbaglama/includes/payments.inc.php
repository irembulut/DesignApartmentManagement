<?php

include ("config.inc.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  if($_SERVER["REQUEST_METHOD"] == "POST"){

 
    if(empty(($_POST["firstname"]))){
        header("Location:../payments.php?error=usrfieldblank");
    }
    if (!preg_match("/^[a-zA-Z ]*$/",test_input($_POST["firstname"]))) {
        header("Location:../dbaglama/payments.php?error=invalidusrnametype");
    }
    else{
        $sql = "SELECT * FROM users WHERE firstname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            $param_username=test_input($_POST["firstname"]);
            
            mysqli_stmt_bind_param($stmt, "s",$param_firstname );
           
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    header("Location:../dbaglama/payments.php?error=usrnametaken");
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
        header("Location:../dbaglama/payments.php?error=usrfieldblank");
    }
    if (!preg_match("/^[a-zA-Z ]*$/",test_input($_POST["lastname"]))) {
        header("Location:../payments.php?error=invalidusrnametype");
    }
    else{
        $sql = "SELECT * FROM users WHERE lastname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            $param_username=test_input($_POST["lastname"]);
            
            mysqli_stmt_bind_param($stmt, "s",$param_lastname );
           
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    header("Location:../dbaglama/payments.php?error=usrnametaken");
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
        header("Location:../payments.php?error=usrfieldblank");
    }
    if (!preg_match("/^[a-zA-Z ]*$/",test_input($_POST["username"]))) {
        header("Location:../dbaglama/payments.php?error=invalidusrnametype");
    }
    else{
        $sql = "SELECT * FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            $param_username=test_input($_POST["username"]);
            
            mysqli_stmt_bind_param($stmt, "s",$param_username );
           
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    header("Location:../dbaglama/payments.php?error=usrnametaken");
                } else{
                    $username = test_input($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    }
    
    
    if(empty(($_POST["text"]))){
        header("Location:../dbaglama/payments.php?error=usrfieldblank");
    }
    if (!preg_match("/^[a-zA-Z ]*$/",test_input($_POST["text"]))) {
        header("Location:../dbaglama/payments.php?error=invalidusrnametype");
    }
    else{
        $sql = "SELECT * FROM users WHERE text = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            $param_username=test_input($_POST["text"]);
            
            mysqli_stmt_bind_param($stmt, "s",$param_firstname );
           
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    header("Location:../dbaglama/payments.php?error=usrnametaken");
                } else{
                    $recordtxt = test_input($_POST["text"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    }

    if (isset($_POST['upload'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        // Get text
        $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  
        // image file directory
        $target = "images/".basename($image);
    }
    
    
    
   
    if (!empty($_POST['username']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) ) {
      $username = $_POST['username'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $recordtxt = $_POST['text'];
      $image = $POst['image'];

      $sql = "INSERT INTO payments (username, firstname, lastname , text , image ) VALUES ('$username', '$firstname','$lastname', '$recordtxt', '$image')";

      //mysqli_query($conn,$sql);
      if ($link->query($sql) === TRUE) {
        echo "Created succesfully.!<br />";
      } else {
        echo " Please try again later..<br />";
      }
      header("location: ../dbaglama/payments.php");

 

    }

    
    
    mysqli_close($link);

}


?>

