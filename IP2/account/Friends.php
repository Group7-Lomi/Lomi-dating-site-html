<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Friends</title>
    <link href="../css/styles.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Economica&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" integrity="sha384-EvBWSlnoFgZlXJvpzS+MAUEjvN7+gcCwH+qh7GRFOGgZO0PuwOFro7qPOJnLfe7l" crossorigin="anonymous">
    <script src="../js/account.js" defer></script>
    </head>
   
<?php require 'header2.php'; ?>


    <div class="wrap4"> 
          <div class="container">      
          <div class="Chatbox">
          <img class="setting" src="../images/acc1.jfif" >
            <div id="menu">
                <h1>Mahlet Solomon</h1>
            </div>
            <div id="chatbox"> 
	    </div>

            <form class="form" name="message">
                <input name="usermsg" type="text" id="usermsg" />
                <button class="button" onclick="addText(event)">Send</button>
            </form>
        </div>
        <div class="Chatbox">
          <img class="setting" src="../images/acc2.jfif" >
            <div id="menu">
                <h1>Samrawit Biruk</h1>
            </div>
            <div id="chatbox"> 
	    </div>

            <form class="form" name="message">
                <input name="usermsg" type="text" id="usermsg" />
                <button class="button" onclick="addText(event)">Send</button>
            </form>
        </div>
        <div class="Chatbox">
          <img class="setting" src="../images/acc3.jfif" >
            <div id="menu">
                <h1>Blen Dawit</h1>
            </div>
            <div id="chatbox"> 
	    </div>

            <form class="form" name="message">
                <input name="usermsg" type="text" id="usermsg" />
                <button class="button" onclick="addText(event)">Send</button>
            </form>
        </div>
      </div>
    </div>
 
<?php
require 'footer2.php';
?>