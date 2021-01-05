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

 
    if(empty(($_POST["username"])) &&empty(($_POST["password"])) && empty(($_POST["email"])) && empty(($_POST["firstname"])) && empty(($_POST["lastname"]))   ){
        echo ("There is a blank field. Please try to fill all fields ");
    }
    
    else{
       $sql = "INSERT INTO users (username,password,email,firstname,lastname) VALUES('testuser','12345','test@hotmail.com','test','user')";

        if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    
    
    }
    
    
    
    
    
    
    
     if(empty((test_input($_POST["email"])))){
        header("Location:../register.php?error=mailfieldblank");
    }
    else if ( !filter_var(test_input($_POST["email"], FILTER_VALIDATE_EMAIL))) {

        echo("valid emailtype");
    }
}
    
    ?>
    