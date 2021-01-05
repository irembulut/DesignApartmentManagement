<?php
include ("includes/config.inc.php");
session_start();
//destroy the session
session_unset();
//redirect to login page
header("location: user.login.php");
?>