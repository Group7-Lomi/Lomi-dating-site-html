<?php
 $serverName = "localhost";
 $username = "root";
 $password = "bitnami";
 $dbname = "lomi db";
 
 $conn = mysqli_connect($serverName, $username, $password,$dbname);
 
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
 
 
  if($_SERVER['REQUEST_METHOD']==='POST'){
      $name = $_POST['name'];
      $search = mysqli_real_escape_string($conn, $name);
      $query = "SELECT * FROM user_account WHERE username LIKE '%$search' OR username LIKE '%$search%' OR  username LIKE '$search%'";
      $result = mysqli_query($conn,$query);
     
      $Names = mysqli_num_rows($result);

        
  
     mysqli_close($conn);
 
  }
   


?>
<!DOCTYPE html >
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Search Result</title>
    <link href="../css/styles.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Economica&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" integrity="sha384-EvBWSlnoFgZlXJvpzS+MAUEjvN7+gcCwH+qh7GRFOGgZO0PuwOFro7qPOJnLfe7l" crossorigin="anonymous">
    <script src="../js/account.js" defer></script>
    </head>
<body>

   


    <div class="wrap1">
        <div class="container">
          <div class="header">   
            <div class="accountmenu">
              
              <a id="Logo" href="index.html"><img src="../images/Logo.png"class="logo"></a>
              <div class="textbox">
                 <h3>Search Result</h3>
              </div>
              <div class="accountimg" >
                <div class="submenu">    
                  
                    </div>
              <button ><img src="images/maleavatar.png" ></button>
              </div>
            </div>
          </div>
          <div class="clearing"></div>
        </div>
        </div>
<!---header-wrap--->
<div class="search-result">
    <?php if($Names > 0){ 
          $row = mysqli_fetch_assoc($result);
             
         echo "      FullName:  ". $row['username']."<br>";
         echo "      Email:  ".$row['email']."<br>";
         echo "      phone Number:  ".$row['phone_num']."<br>";
        
        } else{
           echo "There is no user with this name";
          } 
       
      ?>
</div>
<!---wrap4--->
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



