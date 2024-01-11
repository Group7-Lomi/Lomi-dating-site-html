<!DOCTYPE html>
<?php
session_start();
include 'conn.php';
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$codetest = $code = $pass = $pass2= "";
$codeErr = $passErr = $pass2Err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["code"])) {
    $codeErr = "Code is required";
    $_SESSION["err"]="";
  } else {
    $code = test_input($_POST["code"]);
    if($code==$_SESSION["code"]){
    $codetest="set";
    }
    else{
    $codeErr="Code is incorrect";
    $_SESSION["err"]="";
    }
  }
if(!empty($codetest)){
if (empty($_POST["psw"]) && $_SESSION["err"]>1) {
  $passErr = "Password is required";
} elseif (!empty($_POST["psw"])) {
  $pass = test_input($_POST["psw"]);
}

if (  empty($_POST["psw-repeat"]) && $_SESSION["err"]>1) {
  $pass2Err = "Confirm your password";
} elseif( !empty($_POST["psw-repeat"])) {
  $pass2 = test_input($_POST["psw-repeat"]);
}

if (  $pass == $pass2 && $pass!="") {
    $email=$_SESSION["email"];
    $pass= password_hash($pass, PASSWORD_DEFAULT);
    $sql1 = "UPDATE user_account SET pass='$pass' WHERE email='$email'";
    mysqli_query($conn, $sql1);
    session_destroy();
    header('location:index.php');
  } elseif( $pass != $pass2 && $_SESSION["err"]>1) {
    $pass2Err = "Password don't match";
  }
}
$_SESSION["err"]++;
}

?>
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
 include'header.php';
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
          <h2>Please Fill in Details Correctly to Reset Your Password</h2>


        <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          <div class="contact-form">
            <label> <span>Code</span>
            <input type="number" class="input_text" placeholder="00000" name="code"    value="<?php echo$code;?>"/>
            </label><?php if(!empty($codeErr)) echo'<label class="form_error" style="color: red; font-size: 14px; width:70%; font-family:"Oswald", sans-serif;float:right; text-align:right; padding:5px 20px 0 0;"> '.$codeErr.'</label><br><br>';?>
            <?php if(!empty($emailtest)) echo'<label><input type="checkbox" name="test1" value="value1">  '.$emailtest.'</label><br><br>';?>
           <?php if(!empty($codetest)) echo'<label><span> New Password</span>
            <input type="password" class="input_text" minlength="8" maxlength="10" placeholder="Password" name="psw" id="password" >
            </label>';?>
            <?php if(!empty($passErr)) echo'<label class="form_error" style="color: red; font-size: 14px; width:70%; font-family:"Oswald", sans-serif;float:right; text-align:right; padding:5px 20px 0 0;"> '.$passErr.'</label><br>';?>
            <?php if(!empty($codetest)) echo' <label><span>Confirm Password</span>
            <input type="password" class="input_text" minlength="8" maxlength="10" placeholder="Repeat Password" name="psw-repeat" id="password2" ><br/><br/>
            </label>';?>
            <?php if(!empty($pass2Err)) echo'<label class="form_error" style="color: red; font-size: 14px; width:70%; font-family:"Oswald", sans-serif;float:right; text-align:right; padding:5px 20px 0 0;"> '.$pass2Err.'</label><br>';?>
            
    
	
            <button type="reset"  formtarget="_self">Cancel</button>
            <button type="submit"  >Reset</button>

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