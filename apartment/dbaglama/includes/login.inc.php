<?php
session_start();
include ("config.inc.php");

 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: welcome.php");
  exit;
}
 
 
$username = $password = "";
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(test_input($_POST["username"]))){
        header("Location:../admin.login.php?error=usrfieldblank");
        
        
    } else{
        $username = test_input($_POST["username"]);
    }
    
    if(empty(test_input($_POST["password"]))){
        header("Location:../admin.login.php?error=pwdfieldblank");
    } else{
        $password = test_input($_POST["password"]);
    }
    
    if(!empty($username) && !empty($password)){
        $sql = "SELECT id, username, password FROM admin WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            $param_username = $username;

            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            session_start();
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            header("location: ../welcome.php");
                        } else{
                            header("Location: ../admin.login.php?error=invalidpass");
                        }
                    }
                } else{
                    header("Location:../admin.login.php?error=invalidusername");
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
       
        mysqli_stmt_close($stmt);
    }
    
    
    mysqli_close($link);
}
?>
 