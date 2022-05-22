<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8," />
<meta name="viewport" content="width=device-width">

<title>Lomi Dating</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Economica&display=swap" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet" integrity="sha384-EvBWSlnoFgZlXJvpzS+MAUEjvN7+gcCwH+qh7GRFOGgZO0PuwOFro7qPOJnLfe7l" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/5e0ec05e5c.js" crossorigin="anonymous"></script>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script src="js/validate.js" defer></script>
</head>
<body>
<?php include 'header.php'; ?>
<!---header-wrap--->
<div class="wrap4">
  <div class="sidebar"></div>
  <div class="container">
      <div class="banner "> <img src="images/banner-img.png" alt="banner" />
        <div class="login-box">
          <form>
          <h1>Log in</h1>
          <div class="textbox">
            <i class="bi bi-person-fill"></i>
            <input id="username"type="text" onkeyup="handleKey(event)" placeholder="Username" name="username"  required>
          </div>
          <div class="textbox">
            <i class="bi bi-lock-fill"></i>
            <input id="password" type="password" placeholder="Password" onkeyup="handleKey(event)"; name="password" minlength="8" required>
            <i onclick="showPassword();" id="showPassword"class="bi bi-eye-fill"></i>
          </div>
         <!---<a href="account.html">--> <input id="logButton" class="button" type="button"  value="Log In" onclick="validate()"><!--</a>-->
          <br><a>Forgot Password?</a>
        </form>
        </div>
     <div class="clearing"></div>
  </div>
  </div>
  <div class="sidebar"></div>
</div>


<div class="wrap1">
  <div class="subsidebar"></div>
  <div class="subcontainer">
    <div class="bottominfo">
    <div class="box1 ">
      <i class="bi bi-patch-check-fill"></i>
        <h1>Authenticated Community</h1>
      <div class="content">
        <p>You’ll never have to wonder if that  hottie is too good to be true on Lomi, everyone must authenticate their account. </p>
      </div>
    </div>
      <div class="box1 ">
        <i class="bi bi-people-fill"></i>
          <h1>Efficient Matching</h1>
        
        <div class="content">
          <p>We do our very best to only show you to people who meet your preferences, AND where you meet theirs, prioritized by people you actually have a decent shot at conversing with. We don't believe in wasting anyone's time here.</p>
        </div>
    </div>
        <div class="box1 ">
        <i class="bi bi-gender-female"></i>
        <i id="icontwo" class="bi bi-gender-male"></i>
            <h1>Balanced Community</h1>
          <div class="content">
        <p>An advanced screening and monitoring system keeps our community well-balanced, highly-engaged, and full of high-powered (and empowered) people who are ready for a long-term relationship.</p>
      </div>
    </div>
    </div>
    <div class="bottomabout">
    <div class="box2">
        <h1>About Us</h1>
      <div class="content">
        <p>The best way to boost your chances of finding love these days is by choosing the right and safe dating site.
          They provide the platform to enhance your social circle and look for like-minded people, maybe to begin the chemistry which may turn into a real-deal.
          But first, who do you want to date?</p>
        <div class="button"><a href="about.html">More Info </a></div>
      </div>
    </div>

    <div class="box2">
        <h1>Terms & Services</h1>
      <div class="content">
        <p>The Lomi Dating, Inc. (“Lomi”) has prepared this Privacy Policy (“Policy”)  to explain the information we collect when you use our mobile application (the “App”) or our websites, and our other products and services including our groups, events, or surveys (collectively referred to in this Policy as the “Sites”), how we use and share that information, and your choices about that information. We suggest you read this Policy in conjunction with our Terms of Service</p>
        <div class="button"><a href="Terms.html">More Info </a></div>
      </div>
    </div>
  </div>
    <div class="clearing"></div>  
  </div>
  <div class="subsidebar"></div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
