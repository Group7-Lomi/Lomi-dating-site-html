<?php
session_start();
include'conn.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require './vendor/autoload.php';
$mail = new PHPMailer(true);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//  User_info
$fname = $lname = $country = $bdate = $city = $passion = $gender = "";
$fnameErr = $lnamelErr = $bdateErr = $countryErr = $cityErr = $passionErr = $genderErr = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
  } else {

    if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
      $fnameErr = "Only letters and white space allowed";
    } else $fname = test_input($_POST["fname"]);
  }

  if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
  } else {

    if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
      $lnameErr = "Only letters and white space allowed";
    } else $lname = test_input($_POST["lname"]);
  }

  if (empty($_POST["bdate"])) {
    $bdateErr = "Birthdate is required";
  } else {

    $date = test_input($_POST["bdate"]);
    $bdate = date('Y-m-d', strtotime($date));
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["country"])) {
    $countryErr = "Country is required";
  } else {

    if (!preg_match("/^[a-zA-Z-' ]*$/", $country)) {
      $countryErr = "Only letters and white space allowed";
    } else $country = test_input($_POST["country"]);
  }

  if (empty($_POST["city"])) {
    $cityErr = "City is required";
  } else {

    if (!preg_match("/^[a-zA-Z-' ]*$/", $city)) {
      $cityErr = "Only letters and white space allowed";
    } else $city = test_input($_POST["city"]);
  }
  if ($fname != "" && $lname != "" && $city != ""  && $country != "") {
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['country'] = $country;
    $_SESSION['city'] = $city;
    $_SESSION['passion'] = $passion;
    $_SESSION['gender'] = $gender;
    $_SESSION['bdate'] = $bdate;
    header('location:desiredpartner.php');
  }
}

//  Signup 

$name = $nametest = $numtest = $email = $emailtest = $num = $pass = $pass2 = "";
$nameErr = $emailErr = $numErr = $passErr = $pass2Err = "";

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Username is required";
  } else {
    $name = test_input($_POST["name"]);
    $sql = "SELECT * FROM user_account WHERE username='$name'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
      $nameErr = "Username already exists";
    } else $nametest = true;
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    $sql = "SELECT * FROM user_account WHERE email='$email'";
    $res = $conn->query($sql);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    } else if ($res->num_rows > 0) {
      $emailErr = "Email already exists";
    } else $emailtest = true;
  }

  if (empty($_POST["mobilenumber"])) {
    $numErr = "Number is required";
  } else {
    $num = test_input($_POST["mobilenumber"]);
    $sql = "SELECT * FROM user_account WHERE phone_num='$num'";
    $res = $conn->query($sql);
    if (preg_match('/^\+[0-9]{1,2}-[0-9]{3}-[0-9]{7}$/', $num)) {
      $numErr = "Invalid Number format";
    } else if ($res->num_rows > 0) {
      $numErr = "Number already exists";
    } else $numtest = true;
  }

  if (empty($_POST["psw"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["psw"]);
  }

  if (empty($_POST["psw-repeat"])) {
    $pass2Err = "Confirm your password";
  } else {
    $pass2 = test_input($_POST["psw-repeat"]);
  }

  if ($pass == $pass2) {
  } else {
    $pass2Err = "Password don't match";
  }

  if ($nametest = true && $emailtest == true && $numtest == true && $pass == $pass2 && $pass != "" && $pass2 != "") {
    $_SESSION['username'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['number'] = $num;
    $_SESSION['password'] = $pass;
    header('location:setuprofile.php');
  }
}

// desired partner
$country2 = $city2 = $gender2 = $passion2 = "";
$countryErr2 = $cityErr2 = $genderErr2 =$imgErr= "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["age"])) {
    $ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
  }


  if (empty($_POST["country2"])) {
    $countryErr2 = "Country is required";
  } else {

    if (!preg_match("/^[a-zA-Z-' ]*$/", $country2)) {
      $countryErr2 = "Only letters and white space allowed";
    } else $country2 = test_input($_POST["country2"]);
  }

  if (empty($_POST["city2"])) {
    $cityErr2 = "City is required";
  } else {

    if (!preg_match("/^[a-zA-Z-' ]*$/", $city2)) {
      $cityErr2 = "Only letters and white space allowed";
    } else $city2 = test_input($_POST["city2"]);
  }
  if(isset($_FILES['image'])){
    $img_name = $_FILES['image']['name'];
    $img_type = $_FILES['image']['type'];
    $tmp_name = $_FILES['image']['tmp_name'];
    
    $img_explode = explode('.',$img_name);
    $img_ext = end($img_explode);

    $extensions = ["jpeg", "png", "jpg"];
    if(in_array($img_ext, $extensions) === true){
        $types = ["image/jpeg", "image/jpg", "image/png"];
        if(in_array($img_type, $types) === true){
            $time = time();
            $new_img_name = $time.$img_name;
            $_SESSION["img"]=$new_img_name;
            move_uploaded_file($tmp_name,"images/".$new_img_name);
            }
        }else{
            $imgErr= "Please upload an appropriate image file - jpeg, png, jpg";
        }
    }


  if ($city2 != ""  && $country2 != "") {
    do {
      $rcode =  rand(time(), 100000000);
      $sql = "SELECT * FROM user_account WHERE user_ID='$rcode'";
      $res = $conn->query($sql);
    } while ($res->num_rows > 0);

    $user_id = $rcode;
    if (isset($_SESSION['username']))
      $name = $_SESSION['username'];
    if (isset($_SESSION['email']))
      $email = $_SESSION['email'];
    if (isset($_SESSION['number']))
      $num = $_SESSION["number"];
    if (isset($_SESSION['password']))
      $pass = password_hash($_SESSION["password"],PASSWORD_DEFAULT);
    if (isset($_SESSION['fname']))
      $fname = $_SESSION["fname"];
    if (isset($_SESSION['lname']))
      $lname = $_SESSION["lname"];
    if (isset($_SESSION['country']))
      $country = $_SESSION["country"];
    if (isset($_SESSION['city']))
      $city = $_SESSION["city"];
    if (isset($_SESSION['gender']))
      $gender = $_SESSION["gender"];
    if (isset($_SESSION['gender2']))
      $gender2 = $_SESSION["gender2"];
    if(isset($_SESSION["img"]))
      $img=$_SESSION["img"];
    if(isset($_SESSION['bdate']))
    $bdate=$_SESSION['bdate'];
    

    $sql = "INSERT INTO user_account (user_ID,username, phone_num, email, pass) VALUES ('$user_id','$name', '$num' , '$email','$pass')";
    $sql2 = "INSERT INTO user_information (user_id,first_name, last_name, birth_date, gender, city, country, passion, profile_image) VALUES ('$user_id','$fname' , '$lname' ,'$bdate','$gender',  '$city', '$country','$passion','$img' )";
    $sql3 = "INSERT INTO desired_partner (user_id, age, gender, country, city,passion)VALUES ('$user_id','$age','$gender2','$country2' ,'$city2' ,'$passion2' )";
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);
    mysqli_query($conn, $sql3);
    mysqli_close($conn);
    try {
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'lomidatingsites@gmail.com';                     //SMTP username
      $mail->Password   = 'pgqwgpanvwohwtvd';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('from@lomidating.com', 'Lomi Dating Site');
      $mail->addAddress($email, $name);     //Add a recipient
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Registered Successfully';
      $mail->addEmbeddedImage("images/image-1.png", "logo1");
      $mail->addEmbeddedImage("images/image-2.png", "logo2");
      $mail->addEmbeddedImage("images/image-3.png", "logo3");
      $mail->addEmbeddedImage("images/image-4.png", "logo4");
      $mail->addEmbeddedImage("images/image-5.png", "logo5");
      $mail->Body = file_get_contents("email.html");
      $mail->send();
      echo 'Message has been sent';
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    header('location:index.php');
  }
  
  }

