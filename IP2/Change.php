<?php
require 'connection.php';
$fullName = $_POST["fullname"];
$userName = $_POST["userN"];
$Email = $_POST["mail"];
$number = $_POST["num"];
$country = $_POST["country"];
$city = $_POST["city"];

$selectID = "SELECT user_id FROM user_information WHERE username = '".$userName."'";
$condition = mysqli_query($conn, $selectID);
$names = explode(" ",$fullName);
$firstName = $names[0];
$lastName = $names[1];

$UpdateProfileInformation = "UPDATE user_information SET first_name = $firstName, last_name = $lastName , city = $city, country = $country WHERE user_id = $condition";
$UpdateAccount = "UPDATE user_account SET phone_num = $number, email = $Email WHERE user_id = $condition";
mysqli_query($conn, $UpdateProfileInformation);
mysqli_query($conn, $UpdateAccount);

$profilePictureName = $_FILES['profileImage']['name'];
        $dir = "uploads";
        if(is_dir($dir)==false){
            mkdir($dir);
        }
        $target_dir = $dir."/";
        $target_file = $target_dir . basename($profilePictureName);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png"){
            echo $imageFileType ."Sorry, only JPG, JPEG and PNG files are allowed.";
            $uploadOk = 0;
        }
        if ($_FILES["profileImage"]["size"]>1024000) {
            echo "Sorry your file is too large";
            $uploadOk = 0;
        }
        if($uploadOk == 1){
            if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)){
            $sql = "UPDATE user_photo SET link = $profilePictureName WHERE user_id = $condition";
            mysqli_query($conn, $sql);
            }
        }
    }

?>
