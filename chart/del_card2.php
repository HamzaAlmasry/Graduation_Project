<?php

include('../inc/config.php');

$id = $_GET['id'];
mysqli_query($con, "DELETE  FROM rent WHERE id=$id");
header('location: card.php');

?>