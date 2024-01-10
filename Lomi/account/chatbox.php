<!DOCTYPE html>
<html>
<head>
<title>Chat</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Economica&display=swap" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" integrity="sha384-EvBWSlnoFgZlXJvpzS+MAUEjvN7+gcCwH+qh7GRFOGgZO0PuwOFro7qPOJnLfe7l" crossorigin="anonymous">
<script src="js/account.js"></script>
<style>
* {
    margin: 0;
    padding: 0;
  }
  
  body {
    margin: 20px auto;
    font-family: "Lato";
    font-weight: 300;
  }
  
  form {
    padding: 15px 25px;
    display: flex;
    gap: 10px;
    justify-content: center;
  }
  
  form label {
    font-size: 1.5rem;
    font-weight: bold;
  }
  
  input {
    font-family: "Lato";
  }
  

  .box {
	width: 300px;
	background : #8af09b;
	padding : 20px;
	text-align: center;
	font-weight: 900;
	color: #fff;
	font-family: "Lato";
	position: relative;
  }

  .box-right {
	float: right;
	}

  .sb1:before {
	content: " ";
	width: 0px;
	height: 0px;
	position: absolute;
	border-left: 10px solid #8af09b;
	border-right: 10px solid transparent;
	border-top: 10px solid #8af09b;
	border-bottom: 10px solid transparent;
	right: -20px;
	top: 6px;
  }
  
   .sb2:before {
	content: " ";
	width: 0px;
	height: 0px;
	position: absolute;
	border-left: 10px solid transparent;
	border-right: 10px solid #8af09b;
	border-top: 10px solid #8af09b;
	border-bottom: 10px solid transparent;
	left: -20px;
	top: 6px;
  }
 
  #wrapper  {
    margin-left: 250px;
    margin-top: 30px;
    margin-bottom: 30px;
    padding-bottom: 25px;
    background-color: #8af09b;
    width: 600px;
    max-width: 100%;
    //border: 2px solid #212121;
    border-radius: 4px;
  }
  
  #chatbox {
    text-align: left;
    margin: 0 auto;
    margin-bottom: 25px;
    padding: 10px;
    background: #fff;
    height: 300px;
    width: 530px;
    border: 1px solid #000000;
    overflow: auto;
    border-radius: 4px;
    border-bottom: 4px solid #a7a7a7;
  }
  
  #usermsg {
    flex: 1;
    border-radius: 4px;
    border: 1px solid #ffffff;
  }
  
  #name {
    border-radius: 4px;
    border: 1px solid #ff9800;
    padding: 2px 8px;
  }
  
  
  .error {
    color: #ff0000;
  }
  
  #menu {
    padding: 15px 25px;
    display: flex;
  }
  
  .welcome {
    text-align: left;
    color : #000000;
  }
  
  
  
</style>

</head>
<body>

  <div class="wrap1">
    <div class="container">
      <div class="header">   
          <a href="index.html"><img src="images/Logo.png"class="logo"></a>
        <nav>
        <div class="accountimg" >
          <div class="submenu">    
            <ul>
                <li><a href="account/info.html"><i class="bi bi-person-fill"></i>Account Info</a></li>
                <li><a href=""><i class="bi bi-people-fill"></i>Friends</a></li>
                <li><a href="account/setting.html"><i class="bi bi-gear-fill"></i>Setting</a></li>
                <li><a href=""><i class="bi bi-question-octagon-fill"></i>Support</a></li>
                <li><a onclick="logout()"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
                </ul>
              </div>
        <button onclick="active"><img src="images/maleavatar.png" ></button>
        </div>
        <div class="accountmenu">
          <div class="textbox">
            <input type="text" placeholder="Search">
            <i class="bi bi-search"></i>
          </div>
        </div>
    </nav>
      </div>
      <div class="clearing"></div>
    </div>
    </div>
        <div id="wrapper">
            <div id="menu">
                <p class="welcome">Mahlet Solomon</p>
            </div>

            <div id="chatbox"> 
	    </div>

            <form name="message">
                <input name="usermsg" type="text" id="usermsg" />
                <button class="button" onclick="addText(event)">Send</button>
            </form>
        </div>
<div class="wrap4">
  <?php include"../footer.php";?> 
</div>        
    </body>
</html>