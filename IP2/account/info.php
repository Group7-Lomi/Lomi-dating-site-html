<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width">
<title>Account</title>
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
  <div class="sidebar"></div>
  <div class="container">
   <div class="accountinfo">
       <img src="../images/maleavatar.png" >
       <div class="head">
        <h1>Account Info</h1>
       </div>
       <form>
           <label>
               <span>Name</span>
           <input type="text" value="Biruk Tadesse">
            </label>
           <label>
            <span>Userame</span>
           <input type="text" value="@biruk_T">
            </label>
           <label>
            <span>Email</span>
           <input type="email" value="birukt24@yahoo.com">
             </label>
           <label>
            <span>Age</span>
           <input type="number" value="23">
            </label>
            <label>
                <span>Number</span>
               <input type="tel" value="+251912345678">
                </label>
           <label>
            <span>Country</span>
           <input type="text" value="Ethiopia">
            </label>
           <label>
            <span>City</span>
           <input type="text" value="Addis Ababa">
        </label>
        </form>
   </div>
  </div>
  <div class="sidebar"></div>
</div>

<?php
require 'footer2.php';
?>