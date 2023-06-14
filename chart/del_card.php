<?php

include('../inc/config.php');

$id = $_GET['id'];
mysqli_query($con, "DELETE  FROM chart WHERE id=$id");
header('location: card.php');

?>
