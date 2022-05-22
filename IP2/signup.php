<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width">
<title>Sign Up</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Economica&display=swap" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" integrity="sha384-EvBWSlnoFgZlXJvpzS+MAUEjvN7+gcCwH+qh7GRFOGgZO0PuwOFro7qPOJnLfe7l" crossorigin="anonymous">
<script src="js/signupvalidation.js" defer></script>

</head>
<body>
  <?php include 'header.php'; ?>

<div class="wrap4">
  <div class="sidebar"></div>
  <div class="container"> 
    <div class="left-col formbox">
      <div class="title">
        <h1>Sign Up</h1>
      </div>
      <div class="page-content">
      <div class="panel borderbotm-none">
        <div class="content">
          <h2>Please Fill in Details Correctly to Create an Account</h2>


        <form id="form">  
          <div class="contact-form">
            <label> <span>Username</span>
            <input type="text" class="input_text" placeholder="Username" name="name" id="username" required aria-valuenow="0"/>
            </label>
            <label> <span>Number</span>
            <input type="tele" class="input_text" pattern="+[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="+251-985-958-854" name="mobile number" required id="number" aria-valuenow="0">
            </label>
            <label> <span>Email</span>
            <input type="email" class="input_text" placeholder="example@gmail.com" name="email" id="email" required aria-valuenow="0"/>
            </label>
            <label><span>Password</span>
            <input type="password" class="input_text" minlength="8" maxlength="10" placeholder="Password" name="psw" id="password" required>
            </label>
            <label><span>Confirm Password</span>
            <input type="password" class="input_text" minlength="8" maxlength="10" placeholder="Repeat Password" name="psw-repeat" id="password2"required><br/><br/>
            </label>
            <p class="agreement">By creating an account you agree to our <a href="Terms.html" >Terms & Privacy</a>.</p>
            <label class="checkbox" id="agreement" >
            <input type="checkbox" checked="checked" name="remember">Remember me 
            </label>
    
	
            <button type="reset"  formtarget="_self">Cancel</button>
            <button type="submit" onclick="validatesignup()" >Next</button>

          </div>
        </form>
        </div>
      </div>
      </div>
      
    </div>
    
  
  </div>
  <div class="sidebar"></div>
  </div>

<?php include 'footer.php'; ?>
</body>
</html>
