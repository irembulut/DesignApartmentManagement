<?php include("includes/admin.register.php"); ?>
<?php include("includes/header.php"); ?>
 

 
 <div class="container">

  <form action="includes/admin.register.php" method="POST">
  
  <div class="form-group">
    <label for="usernameinput" class="text-white">Username</label>
    <input type="text" class="form-control" id="usernameinput" placeholder="Enter username" name="username">
    <span>
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"]=="usrfieldblank"){
               echo "<p class='text-danger'>Please fill the username field</p>";
                
            }
            if($_GET["error"]=="usrnametaken"){
               echo "<p class='text-danger'>Username has been taken already <br> Please try new one !</p>";
            }
            if($_GET["error"]=="invalidusrnametype"){
               echo "<p class='text-danger'>Invalid type of username. Please use proper characters</p>";
            }
        }
    ?>
   </span>
  </div>
  <div class="form-group">
                <label class="text-white">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Type your email">
                <span>
                    <?php 
                    if(isset($_GET["error"])){
                        if($_GET["error"]=="mailfieldblank"){
                            echo "<p class='text-danger'>Please fill the email field</p>";
                        }
                        if($_GET["error"]=="mailtaken"){
                            echo "<p class='text-danger'>E-mail has been taken already <br> Please try new one !</p>";
                        }
                        if($_GET["error"]=="invalidmailtype"){
                            echo "<p class='text-danger'>Invalid type of email</p>";
                            
                        }
                        
                    }
                    
                    ?>
            </span>
            </div>
  <div class="form-group">
    <label for="passwordinput" class="text-white">Password</label>
    <input type="password" class="form-control" id="passwordinput" placeholder="Password" name="password">
    <?php
            if(isset($_GET["error"])){
                if($_GET["error"]=="pwdfieldblank"){
                    echo "<p class='text-danger'>Please fill the password field</p>";
                
                }
            }
    ?>        
  </div>
   <div class="form-group">
    <label for="passwordinput2" class="text-white">Confirm Password</label>
    <input type="password" class="form-control" id="passwordinput2" placeholder="Retype Password" name="confirm_password">
    <?php
            if(isset($_GET["error"])){
                if($_GET["error"]=="repwdfieldblank"){
                    echo "<p class='text-danger'>Please fill the Confirm Password field</p>";
                
                }
                if($_GET["error"]=="invalidpwdmatch"){
                    echo "<p class='text-danger'>Make sure you typed same password</p>";
                
                }
            }
                
    ?> 
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  <p class="text-white">Already have an account? <a href="login.php">Login here</a></p>
  
  
</form>
</div>  




