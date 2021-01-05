
<?php
include("includes/admin.header.php");
 

 ?>


      <!---      <div class="users">
            <h2>Payments</h2>
            <div class="row">
                 <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">Duyurular</th>
 
                </tr>
                </thead>
                <tbody> 
           
                ?>
              
                 <tr>

                    <th scope="row"> 
                <div class="col-md-4 col-sm-4">
                    <div class="card" style=" height:200px">
                     
                      <div class="card-body">
                      <h5 class="card-title">Duyuru</h5>
                        <blockquote class="blockquote mb-0">
                          <p></p>
                        </blockquote>
                      </div>
                     </div>
                     </div>
                  
                  
                   </th>
                </tr>	 -->
         
                <!-- </tbody>
                </table> 
            
            </div>
            </div> --> 

            <!DOCTYPE html>
<html>
<title>User Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader" >

  <div class="w3-center">
  <img height="80px" src="includes/buildings.png">
 
  <h1 class="w3-xxxlarge w3-animate-bottom">WELCOME TO GRAY APARTMENT</h1>
  </div>
</header>



<?php

include ("includes/config.inc.php"); // Using database connection file here

$records = mysqli_query($link,"select * from duyuru"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>

<div class="w3-col-padding w3-center w3-margin-top ">

<div class="w3-third col-md-10">

  <div class="w3-card w3-container " style="min-height:400px">
  <h3>Announcement</h3><br>
  <i class="fa fa-calendar w3-margin-bottom w3-text-theme" style="font-size:100px"></i>
  <p><?php echo $data['text']; ?></p>
  </div>
</div>

<?php
        }
                ?>


</div>

<hr>

<br>



</body>
</html>