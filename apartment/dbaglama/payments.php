<?php include("includes/user.header.php"); ?>
<?php include("includes/payments.inc.php"); ?>



<form action="payments.php" method="post">



<div class="container">

<form action="includes/payments.inc.php" method="POST">
<?php
include ("includes/config.inc.php");
session_start();


?>
    <div class="form-group">
    <label for="usernameinput" class="text-black">Username<?php  $kullaniciadi  ?></label>
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
            <label for="firstnameinput" class="text-black">First Name</label>
            <input type="text" class="form-control" id="usernameinput" placeholder="Enter firstname" name="firstname">
            <span>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"]=="usrfieldblank"){
                    echo "<p class='text-danger'>Please fill the username field</p>";
                        
                    }
                    if($_GET["error"]=="usrnametaken"){
                    echo "<p class='text-danger'>Username has been taken already <br> Please try new one !</p>";
                    }
                    
                }
            ?>
        </span>
        </div>
        
        
        <div class="form-group">
            <label for="lastnameinput" class="text-black">Last Name</label>
            <input type="text" class="form-control" id="lastnameinput" placeholder="Enter lastname" name="lastname">
            <span>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"]=="usrfieldblank"){
                    echo "<p class='text-danger'>Please fill the username field</p>";
                        
                    }
                    if($_GET["error"]=="usrnametaken"){
                    echo "<p class='text-danger'>Username has been taken already <br> Please try new one !</p>";
                    }
                    
                }
            ?>
        </span>
        </div>

        <label for="textinput" class="text-black">TEXT</label></br>
        <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>



    <input type="submit" value="upload " id="sbt"></input>
</form>
</div>
