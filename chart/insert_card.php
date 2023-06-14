
<?php

include('../inc/config.php');

if(isset($_POST['add'])){
    $Carbrand = ($_POST['Carbrand']);
    $price = ($_POST['price']);
    $typebrand = ($_POST['typebrand']);
    // $date = ($_POST['date']);
    $insert = "INSERT INTO chart (Carbrand,price,typebrand) VALUES ('$Carbrand','$price','$typebrand')";
    mysqli_query($con,$insert);
    header('location: card.php');
}

?>