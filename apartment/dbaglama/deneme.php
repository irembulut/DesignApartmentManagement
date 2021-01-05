<?php
	include('includes/config.inc.php');
	$id=$_GET['id'];
	$records=mysqli_query($link,"select * from users where id='$id'");
	$data=mysqli_fetch_array($records);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
    <h2>Edit</h2>
    
    <?php
	include("includes/config.inc.php");
    if (isset($_GET['submit']))
{
    $id= $_POST['id'];
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $otherphone = $_POST['otherphone'];
    $flat = $_POST['flat'];
 
    $query="UPDATE users set firstname='$firstname'WHERE id='$id'";
	
    $data=mysqli_query($link,$query);
    if(isset($data))
    {
    
    echo "Updated";
     header("Location: members.php");
    }
    else{
     echo "Error ";
    }
}
    ?>
	<form method="POST">

        
        <div class="form-group">
            <label for="firstnameinput" class="text-white">First Name</label>
            <input type="text" class="form-control" id="firstnameinput" placeholder="Enter firstname" name="firstname" value="<?php echo $data['firstname']; ?>">
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
            <label for="lastnameinput" class="text-white">Last Name</label>
            <input type="text" class="form-control" id="lastnameinput" placeholder="Enter lastname" name="lastname" value="<?php echo $data['lastname']; ?>">
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
            <label for="flatinput" class="text-white">Flat</label>
          <!--  <input type="text" class="form-control" id="flatinput" placeholder="Enter flat" name="flat">-->  
            <select name="flat" >
                <option value="0"><?php echo $data['flat']; ?></option>
                <option value="1" >1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>          
            <span>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"]=="flatfieldblank"){
                    echo "<p class='text-danger'>Please fill the flat field</p>";
                        
                    }
                    if($_GET["error"]=="flattaken"){
                        echo "<p class='text-danger'>Username has been taken already <br> Please try new one !</p>";
                    }
                    
                }
            ?>
        </span>
        </div>
        
        
        <div class="form-group">
            <label for="usernameinput" class="text-white">Username</label>
            <input type="text" class="form-control" id="usernameinput" placeholder="Enter username" name="username" value="<?php echo $data['username']; ?>">
            <span>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"]=="usrfieldblank"){
                    echo "<p class='text-danger'>Please fill the username field</p>";
                        
                    }
                    if($_GET["error"]=="usernametaken"){
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
                        <input type="email" name="email" class="form-control" placeholder="Type email" value="<?php echo $data['email']; ?>">
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
            <label for="flatinput" class="text-white">Phone</label>
            <input type="text" class="form-control" id="flatinput" placeholder="Enter first phone number" name="phone" value="<?php echo $data['phone']; ?>">
            <span>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"]=="usrfieldblank"){
                    echo "<p class='text-danger'>Please fill the phone field</p>";
                        
                    }
                    if($_GET["error"]=="usrnametaken"){
                    echo "<p class='text-danger'> phone has been taken already <br> Please try new one !</p>";
                    }
                    
                }
            ?>
        </span>
        </div>



        <div class="form-group">
            <label for="flatinput" class="text-white">OtherPhone</label>
            <input type="text" class="form-control" id="flatinput" placeholder="Enter second phone number" name="otherphone" value="<?php echo $data['otherphone']; ?>">
            <span>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"]=="usrfieldblank"){
                    echo "<p class='text-danger'>Please fill the phone field</p>";
                        
                    }
                    if($_GET["error"]=="usrnametaken"){
                    echo "<p class='text-danger'> phone has been taken already <br> Please try new one !</p>";
                    }
                    
                }
            ?>
        </span>
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-primary" value="Update" name="submit">Submit</button>
        </div>     
		<a href="members.php">Back</a>
	</form>
</body>
</html>