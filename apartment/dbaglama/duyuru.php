<?php include("includes/admin.header.php"); ?>
<?php include("includes/duyuru.inc.php"); ?>


<form action="duyuru.php" method="post">
<form action="includes/payments.inc.php" method="POST">
<textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
     
     <br>
    
    
     <br>

     <input type="submit" value="  Submit  " id="sbt"></input>


<div class="overlay">


   <div class="con">

   <header class="head-form">

   </header>
   <br>
   <div class="field-set">
     
   </div>
  
  </div>
  
</form>
</form>
</div>

<style>

@import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
background-attachment: fixed;
background-repeat: no-repeat;
font-family: 'Vibur', cursive;
font-family: 'Abel', sans-serif;
opacity: .95;

}




form {
    width: 450px;
    min-height: 500px;
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
    padding: 2%;
    padding-top: 10%;
    background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
}
/* form Container */
form .con {
    display: -webkit-flex;
    display: flex;
  
    -webkit-justify-content: space-around;
    justify-content: space-around;
  
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
  
      margin: 0 auto;
}

/* the header form form */
header {
    margin: 2% auto 10% auto;
    text-align: center;
}
/* Login title form form */
header h2 {
    font-size: 250%;
    font-family: 'Playfair Display', serif;
    color: #3e403f;
}
/*  A welcome message or an explanation of the login form */
header p {letter-spacing: 0.05em;}


textarea{
    width: 0px;
    height: 50px;
  
    margin-top: 2%;
    padding: 15px;
    
    font-size: 16px;
    font-family: 'Abel', sans-serif;
    color: #5E6472;
  
    outline: none;
    border: none;
  
    border-radius: 0px 5px 5px 0px;
    transition: 0.2s linear;
    
}
textarea {width: 50px;
height: 100px;}


input {
    width: 48%;
    height: 40px;
    display: inline-block;
    float: left;
    margin-left: 2%;
    text-align:center;
    
}

input {background: #B8F2E6;}


/* buttons hover */
input:hover {
    transform: translatey(3px);
    box-shadow: none;
}

/* buttons hover Animation */
input:hover {
    animation: ani9 0.4s ease-in-out infinite alternate;
}



</style>

<script>


function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);



</script>