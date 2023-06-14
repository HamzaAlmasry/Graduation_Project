<?php

include('../inc/config.php');
$flag = '';
if(isset($_POST['upload'])){

        $Carbrand = ($_POST['Carbrand']);
        $typebrand = ($_POST['typebrand']);
        $model = ($_POST['model']);
        // $location = ($_POST['location']);
        // $date = ($_POST['date']);
        // $payment = ($_POST['payment']);
        // $manufacture = ($_POST['manufacture']);
        $FuelType = ($_POST['FuelType']);
        $Mileage = ($_POST['Mileage']);
        $condition = ($_POST['condition']);
        $EngineSize = ($_POST['EngineSize']);
        $Bodywork = ($_POST['Bodywork']);
        $Transmission = ($_POST['Transmission']);
        $Carcolorr = ($_POST['Carcolor']);
        $price = ($_POST['price']);
        $conditioncar = ($_POST['conditioncar']);
        $car_video = ($_POST['car_video']);
        $virtual_tour = ($_POST['virtual_tour']);
        $aboutCar = ($_POST['aboutCar']);
        $img_1 = ($_POST['img_1']);
        $img_2 = ($_POST['img_2']);
        $img_3 = ($_POST['img_3']);
        $img_4 = ($_POST['img_4']);
        $img_5 = ($_POST['img_5']);
        $img_6 = ($_POST['img_6']);
        $img_7 = ($_POST['img_7']);
        $img_8 = ($_POST['img_8']);
        $img_9 = ($_POST['img_9']);


        $image_location = $_FILES['img_1']['tmp_name'];
        $image_name = $_FILES['img_1']['name'];
        $image_up = "images/".$image_name;

        $image2_location = $_FILES['img_2']['tmp_name'];
        $image2_name = $_FILES['img_2']['name'];
        $image2_up = "images/".$image2_name;

        $image3_location = $_FILES['img_3']['tmp_name'];
        $image3_name = $_FILES['img_3']['name'];
        $image3_up = "images/".$image3_name;

        $image4_location = $_FILES['img_4']['tmp_name'];
        $image4_name = $_FILES['img_4']['name'];
        $image4_up = "images/".$image4_name;

        $image5_location = $_FILES['img_5']['tmp_name'];
        $image5_name = $_FILES['img_5']['name'];
        $image5_up = "images/".$image5_name;

        $image6_location = $_FILES['img_6']['tmp_name'];
        $image6_name = $_FILES['img_6']['name'];
        $image6_up = "images/".$image6_name;

        $image7_location = $_FILES['img_7']['tmp_name'];
        $image7_name = $_FILES['img_7']['name'];
        $image7_up = "images/".$image7_name;

        $image8_location = $_FILES['img_8']['tmp_name'];
        $image8_name = $_FILES['img_8']['name'];
        $image8_up = "images/".$image8_name;

        // $image9_location = $_FILES['img_9']['tmp_name'];
        // $image9_name = $_FILES['img_9']['name'];
        // $image9_up = "images/".$image9_name;


        $query = mysqli_query($con,"INSERT INTO `car`(`Carbrand`,`typebrand`,`model`,`FuelType`,`Mileage`,`condition`,`EngineSize`,`Bodywork`,`Transmission`,`Carcolorr`,`price`,`conditioncar`,`car_video`,`virtual_tour`,`aboutCar`,`image`,`image2`,`image3`,`image4`,`image5`,`image6`,`image7`,`image8`,`image9`) VALUES
        ('$Carbrand','$typebrand','$model','$FuelType','$Mileage','$condition','$EngineSize','$Bodywork','$Transmission','$Carcolorr','$price','$conditioncar','$car_video','$virtual_tour','$aboutCar','$image_up','$image2_up','$image3_up','$image4_up','$image5_up','$image6_up','$image7_up','$image8_up','$image9_up')");

        if(move_uploaded_file($image_location,'images/'. $image_name) && move_uploaded_file($image2_location,'images/'. $image2_name)
        && move_uploaded_file($image3_location,'images/'. $image3_name) 
        && move_uploaded_file($image4_location,'images/'. $image4_name)
        && move_uploaded_file($image5_location,'images/'. $image5_name) 
        && move_uploaded_file($image6_location,'images/'. $image6_name)
        && move_uploaded_file($image7_location,'images/'. $image7_name)
        && move_uploaded_file($image8_location,'images/'. $image8_name)
        // && move_uploaded_file($image9_location,'images/'. $image9_name)

        ){
            echo "<script> alert('تم رفع المنتج بنجاح') </script>";
        }else{
            echo "<script> alert('حدث مشكلة لم يتم رفع المنتج') </script>";
        }
        header('location:indexCar.php');
        if($query){
            $flag = '1';
        }else{
            $flag = '0';
        }
  
}

?>