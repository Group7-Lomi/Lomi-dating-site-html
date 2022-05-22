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
  <?php include 'header.php'; ?>

<div class="wrap4">
  <div class="container"> 
    <div class="left-col formbox">
      <div class="title">
        <h1>Desired Partner</h1>
      </div>
      <div class="page-content">
      <div class="panel borderbotm-none">
        <div class="content">
          <h2>Please Fill in The traits You prefer for your Partner</h2>


        <form id="form" name="myform">
          <div class="contact-form">
            <label> <span>Age</span>
              <select class="input-txt" placeholder="age">
	
                <option>18-22</option>
                <option>22-28</option>
                <option>29-34</option>
                <option>35-40</option>
                </select>
              </label>
              <label><span>Gender</span>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
              </label>
            <label><span>Country</span>
                <input type="text" class="input_text" placeholder="Ethiopia" name="country" required>
            </label>
            <label><span> City</span>
                <input type="text" class="input_text" placeholder="Addis Ababa" name="city" required>
            </label>
            <label><span>Passion</span>
                <textarea class="input_text"rows="4" cols="50" placeholder="Describe yourself here..."> </textarea>
            </label>
            <button type="reset"  onclick="prevPage()">Previous</button>
            <button type="submit" onclick="signuppartthree()">Submit</button>

          </div>
        </form>
        </div>
      </div>
      </div>
      
    </div>
    
  
  </div>
  </div>

<?php include 'footer.php'; ?>
</body>
</html>
