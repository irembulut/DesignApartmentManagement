<!---<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <i class="far fa-key"></i>
    <a class="navbar-brand" href="#"> Navbar </a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="members.php">Members</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Payments</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Announcements</a>
        </li>
        </ul>
    </div>
    </nav>--->


<?php 
 include("includes/admin.header.php");
include("includes/register1.inc.php");
 ?>


    <div class="dashboardMainContainer">
 
       
        
        <div class="leftcontainer">
            
            <div class="users">
            <table>
            <h2>Members' Details</h2>

                <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Flat</th>
                    <th scope="col">Firstname</th>     
                    <th scope="col">Lastname</th>
                    <th scope="col">Usernname</th>
                    <th scope="col">Email</th>   
                    <th scope="col">Firstphone</th>
                    <th scope="col">Secondphone</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>           
                    
                </tr>
                </thead>
                <?php

                include ("includes/config.inc.php"); // Using database connection file here

                $records = mysqli_query($link,"SELECT * from users"); // fetch data from database

                while($data = mysqli_fetch_array($records))
                {
                ?>
                <tbody>
                <tr>

                    <th scope="row"><?php echo $data['id']; ?></th>
                    <th scope="row"><?php echo $data['flat']; ?></th>
                    <th scope="row"><?php echo $data['firstname']; ?></th>
                    <th scope="row"><?php echo $data['lastname']; ?></th>
                    <th scope="row"><?php echo $data['username']; ?></th>
                    <th scope="row"><?php echo $data['email']; ?></th>
                    <th scope="row"><?php echo $data['phone']; ?></th>
                    <th scope="row"><?php echo $data['otherphone']; ?></th>
                    <th scope="row"><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</th>
                    <th scope="row"><a href="edit.php?iddeneme=$data[id] ' ><input type='submit' value='Update Fees' id='updatebutton' ></a></th>
                    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</td>
                </tr>	
                <?php
                }
                ?>
                </table>
                
            
            </table>
            </div>

            <form action="includes/register.inc.php" method="POST">

        <h2>+ Add User</h2>
        <div class="form-group">
            <label for="firstnameinput" class="text-white">First Name</label>
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
            <label for="lastnameinput" class="text-white">Last Name</label>
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
        


        <div class="form-group">
            <label for="flatinput" class="text-white">Flat</label>
          <!--  <input type="text" class="form-control" id="flatinput" placeholder="Enter flat" name="flat">-->  
            <select name="flat">
                <option value="0">Select Flat Number</option>
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
            <input type="text" class="form-control" id="usernameinput" placeholder="Enter username" name="username">
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
                        <input type="email" name="email" class="form-control" placeholder="Type email">
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
            <input type="text" class="form-control" id="flatinput" placeholder="Enter first phone number" name="phone">
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
            <input type="text" class="form-control" id="flatinput" placeholder="Enter second phone number" name="otherphone">
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
        
        
        </form>
        </div>
    
        </div>

    </div>

  


