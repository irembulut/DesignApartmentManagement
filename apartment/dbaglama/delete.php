<?php

include ("includes/config.inc.php"); // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($link,"delete from users where id = '$id'"); // delete query

if($del)
{
    mysqli_close($link); // Close connection
    header("location:welcome.php");
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>