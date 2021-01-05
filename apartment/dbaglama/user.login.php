<?php include("includes/users.login.inc.php") ?>
<?php include("includes/header.php")  ?>


<script>

var current = null;
document.querySelector('#email').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: 0,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
document.querySelector('#password').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -336,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
document.querySelector('#submit').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -730,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '530 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});

</script>



 <style> @import url('https://rsms.me/inter/inter-ui.css');
::selection {
  background: #2D2F36;
}
::-webkit-selection {
  background: #2D2F36;
}
::-moz-selection {
  background: #2D2F36;
}
body {
  background: white;
  font-family: 'Inter UI', sans-serif;
  margin: 0;
  padding: 20px;
}
.page {
  background: #e2e2e5;
  display: flex;
  flex-direction: column;
  height: calc(100% - 40px);
  position: absolute;
  place-content: center;
  width: calc(100% - 40px);
}
@media (max-width: 767px) {
  .page {
    height: auto;
    margin-bottom: 20px;
    padding-bottom: 20px;
  }
}
.container {
  display: flex;
  height: 320px;
  margin: 0 auto;
  width: 640px;
}
@media (max-width: 767px) {
  .container {
    flex-direction: column;
    height: 630px;
    width: 320px;
  }
}
.left {
  background: white;
  height: calc(100% - 40px);
  top: 20px;
  position: relative;
  width: 50%;
}
@media (max-width: 767px) {
  .left {
    height: 100%;
    left: 20px;
    width: calc(100% - 40px);
    max-height: 270px;
  }
}
.login {
  font-size: 40px;
  font-weight: 900;
  margin: 50px 40px 40px;
  color: #DB7093;
}
.eula {
  color: #999;
  font-size: 13px;
  line-height: 1.5;
  margin: 40px;
}
.right {
  background: #474A59;
  box-shadow: 0px 0px 40px 16px rgba(0,0,0,0.22);
  color: #F1F1F2;
  position: relative;
  width: 50%;
}
@media (max-width: 767px) {
  .right {
    flex-shrink: 0;
    height: 100%;
    width: 100%;
    max-height: 350px;
  }
}
svg {
  position: absolute;
  width: 320px;
}
path {
  fill: none;
  stroke: url(#linearGradient);;
  stroke-width: 4;
  stroke-dasharray: 240 1386;
}
.form {
  margin: 10px;
  position: absolute;
}
label {
  color:  #c2c2c5;
  display: block;
  font-size: 14px;
  height: 16px;
  margin-top: 10px;
  margin-bottom: 5px;
}
input {
  background: transparent;
  border: 0;
  color: #f2f2f2;
  font-size: 20px;
  height: 30px;
  line-height: 20px;
  outline: none !important;
  width: 130%;
}
input::-moz-focus-inner { 
  border: 0; 
}
#submit {
  color: #f2f2f2;
  margin-top: 30px;
  transition: color 300ms;
  border: 2px solid #DB7093;
  border-radius: 12px;
}
#submit:focus {
  color: #f2f2f2;
}
#submit:active {
  color: #d0d0d2;
}

 </style> 

  <div class="page">
  <div class="container">
    <div class="left">
      <div class="login" style="size: 10px;"> Member Login</div>
      <div class="eula">Please log in to view announcements and pay
 </div>
    </div>
   <div class="right">
  <!---     <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg> -->
      <div class="form">

      
        <form action="includes/users.login.inc.php" method="POST">
            <label for="email">Username</label>
            <input type="text" name="username" >
                <span>
                    <?php 
                    if(isset($_GET["error"])){
                        if($_GET["error"]=="usrfieldblank"){
                            echo "<p class='text-danger'>Please fill the username field</p>";
                        }
                        
                        if($_GET["error"]=="invalidusername"){
                            echo "<p class='text-danger'>Username could not found</p>";
                        }
                        
                    }
                    
                    ?>
                </span>




                
            <label for="password">Password</label>

            <input type="password" name="password">

            <span>
                    <?php 
                    if(isset($_GET["error"])){
                        if($_GET["error"]=="pwdfieldblank"){
                            echo "<p class='text-danger'>Please fill the password field</p>";
                        }
                        if($_GET["error"]=="invalidpass"){
                            echo "<p class='text-danger'>Invalid Password</p>";
                            
                        }
                    }
                    
                    ?>
            </span>       

            <input type="submit" id="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
</div>





 <!--- <div class="container">
  
  <form action="includes/login.inc.php" method="POST">
  <h1>Admin Login</h1>
   <div class="form-group">
                <label class="text-white">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Type your username" >
                <span>
                    <?php 
                    if(isset($_GET["error"])){
                        if($_GET["error"]=="usrfieldblank"){
                            echo "<p class='text-danger'>Please fill the username field</p>";
                        }
                        
                        if($_GET["error"]=="invalidusername"){
                            echo "<p class='text-danger'>Username could not found</p>";
                        }
                        
                    }
                    
                    ?>
                </span>
            </div>    
            <div class="form-group">
                <label class="text-white">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Type your password">
                <span>
                    <?php 
                    if(isset($_GET["error"])){
                        if($_GET["error"]=="pwdfieldblank"){
                            echo "<p class='text-danger'>Please fill the password field</p>";
                        }
                        if($_GET["error"]=="invalidpass"){
                            echo "<p class='text-danger'>Invalid Password</p>";
                            
                        }
                    }
                    
                    ?>
            </span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p class='text-white'>Don't have an account? <a href="register.php">Sign up now</a></p>
</form>
   
   </div> --->









<!---<title>Apartment Member Login</title>

  <div class="container">
  
  <form action="includes/users.login.inc.php" method="POST">
  <h1>Apartment Member Login</h1>
   <div class="form-group">
                <label class="text-white">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Type your username" >
                <span>
                    <?php 
                    if(isset($_GET["error"])){
                        if($_GET["error"]=="usrfieldblank"){
                            echo "<p class='text-danger'>Please fill the username field</p>";
                        }
                        
                        if($_GET["error"]=="invalidusername"){
                            echo "<p class='text-danger'>Username could not found</p>";
                        }
                        
                    }
                    
                    ?>
                </span>
            </div>    
            <div class="form-group">
                <label class="text-white">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Type your password">
                <span>
                    <?php 
                    if(isset($_GET["error"])){
                        if($_GET["error"]=="pwdfieldblank"){
                            echo "<p class='text-danger'>Please fill the password field</p>";
                        }
                        if($_GET["error"]=="invalidpass"){
                            echo "<p class='text-danger'>Invalid Password</p>";
                            
                        }
                    }
                    
                    ?>
            </span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
</form>
   
   </div>-->
   