<!DOCTYPE html >
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
<!---header-wrap--->
<div class="wrap4">
  <div class="sidebar"></div>
  <div class="container">
    <div class="leftcol">
      <div class="title">
        <h1>Support</h1>
      </div>
      <div class="page-content">
      <div class="panel borderbotm-none">
        <div class="content">
          <ul>
            <li><h2 id = "guide"> Guidelines </h2></li>
            <ul>
              <li>User must be 18 and older</li>
              <li>Profile picture must be your own</li>
              <li>Respect all users </li>
              <li>No illegal activity</li>
            </ul>
            <li> <h2 id = "howtouse"> How to Use </h2> </li>
            <ul>
                <li> Overview of Lomi </li>
                <li> Signing up and Getting Started </li>
                <li> Profile and Accounting Settings</li>
                <li> Matching and Messaging </li>
            </ul>
            <li><h2 id = "security"> Security and Privacy </h2></li>
            <ul>
             <li> Security </li>
             <ul>
                 <li> Our Security </li>
             </ul>
             <li> Privacy </li>
            <ul>
                 <li> Our Privacy Policy </li>
                 <li> Information we collect </li>
                 <li> How we use collected Information </li>
                 <li> How we protect your Information</li>
                 <li> How long we retain your Information</li>
                 <li> Minors' Privacy </li>
            </ul>
            </ul>
            <li><h2 id = "safety"> Safety and Reporting </h2></li>
            <ul>
                 <li> Report a Safety Concern </li>
                 <br/>
                 <form action = "report">
                     <label for="reportText">
                         Write the report below:
                         <br/><br/>
                     </label>
                        <textarea id="reportText" class="input_text" name="report" rows="10" cols="40"> </textarea>
                      <br/><br/>
                      <input type="submit" class="button" value="Submit">
                    </form><br>
                 <li> Safety Tips </li>
                 <ul>
                     <li>Use different photos for your dating profile</li>
                     <li>Avoid connecting with suspicious profiles</li>
                     <li>Check out your potential date on social media</li>
                     <li>Block and report suspicious users</li>
                     <li>Wait to share personal Information</li>
                     <li>Don't respond to requests for Finacial Help</li>
                 </ul>
            </ul>
            <li><h2 id = "faq"> FAQ </h2></li>
           
            <form action = "FAQ">
              <label for="faqText">
                  Write us a comment below:
                  <br/><br/>
              </label>
                 <textarea id="faqText" class="input_text" name="FAQ" rows="10" cols="40"> </textarea>
               <br/><br/>
               <input type="submit" class="button" value="Submit">
             </form>

         </ul>  
        </div>
      </div>
      </div>
      
    </div>
    <div class="rightcol">
      <div class="title">
        <h1>Go TO</h1>
      </div>
      <div class="panel">
        <div class="content">
              <ul>
                  <li><a href = "#guide"> Guidelines </a></li>
                  <li><a href = "#howtouse"> How to Use </a></li>
                  <li><a href = "#security"> Security and Privacy </a></li>
                  <li><a href = "#safety"> Safety and Reporting </a></li>
                  <li><a href = "#terms"> Terms and Conditions </a></li>
                  <li><a href = "#faq"> FAQ </a></li>
              </ul> 
        </div>
      </div>
    </div>
  <div class="clearing"></div>  
  </div>
  <div class="sidebar"></div>
</div>
<!---wrap4--->
<?php
require 'footer2.php';
?>