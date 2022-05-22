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
<script src="js/signupvalidation.js"></script>

</head>
<body>

<?php 

$fNameErr = $lNameErr = $bdateErr = $GenderErr = $countryErr = $cityErr = $passionErr = " ";
$fName = $lNameErr = $bdateErr = $Gender = $country = $city = $passion = " ";
if($_SERVER["REQUEST_METHOD"] == "POST"){

if(empty($POST["fName"])){
$fNameErr = "Name is required";
}else {
  $fName = test_input($POST["fName"]);
  if (!preg_match("/^[a-zA-Z ]$/", $fName)) { 
  $fNameErr = "Only letters and white space allowed"; 
}
}

if(empty($POST["fName"])){
    $lNameErr = "Name is required";
    }else {
      $lName = test_input($POST["lName"]);
      if (!preg_match("/^[a-zA-Z ]$/", $lName)) { 
      $lNameErr = "Only letters and white space allowed"; 
    }
    }

    if (empty($_POST["bdate"])) {
        $bdateErr = "Birth date is required";
      } else {
        $bdate = test_input($_POST["bdate"]);
      }

      if (empty($_POST["country"])) {
        $countryErr = "Country is required";
      } else {
        $country = test_input($_POST["country"]);
      }

if (empty($_POST["city"])) {
        $CityErr = "City is required";
      } else {
        $city = test_input($_POST["city"]);
      }

if (empty($_POST["passion"])) {
    $passion = "Passion is required";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {

    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>


  <div class="wrap1">
    <div class="container">
      <div class="header nav"> 
         <img src="images/Logo.png"class="logo">
       <div class=" menu">
          <a href="index.html">Home</a>
          <a href="support.html"> Support </a>
          <a href="Blog.html"> Blog </a> 
          <a href="contact.html">Contact</a>
          <a href="signup.html"> Sign Up</a>
        </div>
      </div>
      <div class="clearing"></div>
    </div>
    <div class="sidebar"></div>
    </div>
    <div class="clearing"></div>

<div class="wrap4">
  <div class="container"> 
    <div class="left-col formbox">
      <div class="title">
        <h1>Personal Information</h1>
      </div>
      <div class="page-content">
      <div class="panel borderbotm-none">
        <div class="content">
          <h2>Please Fill in To Setup Your Profile</h2>

          //add picture here

        <form id="form" name="myform" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "POST"> 
          <div class="contact-form">
            <label> <span>First Name</span>
            <input type="text" id="fname" class="input_text" placeholder="Abebe " name="name" id="name" <?php echo $fName;?>/>
            <span class = "error">* <?php echo $fNameErr; ?></span>
            </label>

            <label> <span>Last Name</span>
              <input type="text" id="lname" class="input_text" placeholder=" Kebede" name="name" id="name" <?php echo $lName;?>/>
              <span class = "error">* <?php echo $lNameErr; ?></span>
            </label>

            <label><span>Birthdate</span>
              <input type="date" id="bdate"class="input_text" placeholder="mm/dd/yy" name="Birhtdate" <?php echo $bdate;?>>
              <span class = "error">* <?php echo $bdateErr; ?></span>
            </label>

            <label><span>Gender</span>
              <input type="radio" class="gender" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
              <input type="radio" class="gender" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
              <span class="error">* <?php echo $genderErr;?></span>
            </label>

            <label><span>Country</span>
                <input type="text"id="country" class="input_text" placeholder="Ethiopia" name="country" <?php echo $country;?>>
                <span class = "error">* <?php echo $countryErr; ?></span>
            </label>

            <label><span> City</span>
                <input type="text" id="city" class="input_text" placeholder="Addis Ababa" name="city" <?php echo $city;?>>
                <span class = "error">* <?php echo $cityErr; ?></span>
            </label>

            <label><span>Passion</span>
                <textarea  id="passion" class="input_text"rows="4" cols="50" placeholder="Describe yourself here..." <?php echo $passion;?>> </textarea>
                <span class = "error">* <?php echo $passionErr; ?></span>
            </label>

            <button type="reset"  onclick="prevPage()">Previous</button>
            <button type="submit"  onclick="signupparttwo()" >Next</a></button>

          </div>
        </form>
        </div>
      </div>
      </div>
      
    </div>
    
  
  </div>
  </div>

  <div class="wrap4">
    <div class="sidebar"></div>
  <div class="container">
    <div class="footer">
      <a href="https://www.facebook.com/people/Lomi-Da/100075870416279/"><i class="bi bi-facebook"></i></a>   
      <a href="https://twitter.com/DatingLomi"><i class="bi bi-twitter"></i></a>
      <a href=""><i class="bi bi-instagram"></i></a>
      <a href="mailto:lomidating@gmail.com"><i class="bi bi-google"></i></a>
       <p>Copyright© Lomi Dating Site 2022, All rights reserved.</p><br />
    </div>
  <div class="clearing"></div>
  </div>
  <div class="sidebar"></div>
  </div>
<div class="shadows2">
</div>
</body>
</html>
