<?php

include ("config.inc.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER["REQUEST_METHOD"] == "POST"){
  
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
    
    
    
    
    
    
    
   
    if (!empty($_POST['text']) ) {

      $recordtxt = $_POST['text'];

      $sql = "INSERT INTO duyuru ( text) VALUES ( '$recordtxt')";

      //mysqli_query($conn,$sql);
      if ($link->query($sql) === TRUE) {
        echo "Created succesfully.!<br />";
      } else {
        echo " Please try again later..<br />";
      }
      header("location: ../dbaglama/duyuru.php");

 

    }

    
    
    mysqli_close($link);

}


?>