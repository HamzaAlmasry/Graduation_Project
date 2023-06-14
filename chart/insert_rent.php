<?php

include('../inc/config.php');

if(isset($_POST['add'])){
    $Carbrand = ($_POST['Carbrand']);
    $typebrand = ($_POST['typebrand']);
    $date = ($_POST['date']);
    $insert = "INSERT INTO rent (Carbrand,thedate,typebrand) VALUES ('$Carbrand','$date','$typebrand')";
    mysqli_query($con,$insert);
    header('location: card.php');
}

?>
