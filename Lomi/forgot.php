<?php
include 'conn.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';


$mail = new PHPMailer(true);
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$name = $nametest = $numtest = $email = $email2 = $emailtest = $num = $pass = $pass2 = "";
$nameErr = $emailErr = $numErr = $passErr = $pass2Err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    $sql = "SELECT * FROM user_account WHERE email='$email'";
    $res = mysqli_query($conn, $sql);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    } elseif (mysqli_num_rows($res) == 0)
      $emailErr = "Email doesn't exist";
    elseif (mysqli_num_rows($res) > 0) {
      $row = mysqli_fetch_assoc($res);
      $email2 = $row["email"];
      $num = substr($row["phone_num"], -3);;

      $emailtest = "Is this your phone number please proceed if not cancel:<br> Mobile number: +2519*****" . $num;
    }
  }
  if (isset($_POST['test1']) && $email == $email2) {
    session_start();
    $_SESSION["err"]="";
    $_SESSION["email"]=$email;
    $code=rand(10000,99999);


try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'lomidatingsites@gmail.com';                     //SMTP username
    $mail->Password   = 'pgqwgpanvwohwtvd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@lomidating.com', 'Lomi Dating Site');
    $mail->addAddress($email,$name);     //Add a recipient
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Reset Password';
    $mail->Body    = "Hi $name
    There was a request to change your password!
    
    If you did not make this request then please ignore this email.
    
    Otherwise, please enter this code to change your password:
    $code";
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    $_SESSION["code"]=$code;
    header('location:reset.php');
  }

}

$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width">
  <title>Reset</title>
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Economica&display=swap" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" integrity="sha384-EvBWSlnoFgZlXJvpzS+MAUEjvN7+gcCwH+qh7GRFOGgZO0PuwOFro7qPOJnLfe7l" crossorigin="anonymous">

</head>

<body>

  <?php
  include 'header.php';
  ?>

  <div class="wrap4">
    <div class="sidebar"></div>
    <div class="container">
      <div class="left-col formbox">
        <div class="title">
          <h1>Reset Password</h1>
        </div>
        <div class="page-content">
          <div class="panel borderbotm-none">
            <div class="content">
              <h2>Please Insert Your Email</h2>


              <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="contact-form">
                  <label> <span>Email</span>
                    <input type="email" class="input_text" placeholder="example@gmail.com" name="email" id="email" aria-valuenow="0" value="<?php echo $email; ?>" />
                  </label><?php if (!empty($emailErr)) echo '<label class="form_error" style="color: red; font-size: 14px; width:70%; font-family:"Oswald", sans-serif;float:right; text-align:right; padding:5px 20px 0 0;"> ' . $emailErr . '</label><br><br>';?>
                          <?php if (!empty($emailtest)) echo '<label><input type="checkbox" name="test1" value="value1">  ' . $emailtest . '</label><br><br>'; ?>

                  <button type="reset" formtarget="_self">Cancel</button>
                  <button type="submit">Reset</button>

                </div>
              </form>

            </div>
          </div>
        </div>

      </div>


    </div>
    <div class="sidebar"></div>
  </div>

  <?php
include'footer.php';
?>
</body>

</html>