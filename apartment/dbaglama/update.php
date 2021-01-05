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
 
    $query="UPDATE users set id= '$id' , firstname='$firstname'WHERE id='$id'";
	
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