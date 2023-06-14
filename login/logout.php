<?php 
session_start();
include('../inc/config.php');
session_destroy();
header('location:login.php');

?>