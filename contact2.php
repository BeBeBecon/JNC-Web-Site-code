<!DOCTYPE html>
<html lang="en">
 <head>
  <title>JNC LIVESTOCK website Contact form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/globalrule.css" />
  <link rel="stylesheet" href="css/contact2.css" />
  <link rel="stylesheet" href="css/form.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <!-- SNS icon CSS -->
  <link rel="stylesheet" href="css/sns-icon.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Webpage icon image -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- SNS icon start -->
  <div class="social-links">
    <ul class="follow-me">
      <li><a href="https://www.facebook.com/jnc.garceslivestock.7?mibextid=LQQJ4d"></a></li>
      <li><a href="https://instagram.com/jncgarces?igshid=YmMyMTA2M2Y="></a></li>
      <!-- <li><a href="https://plus.google.com"></ >a></li> -->
      <!-- <li><a href="https://www.youtube.com"></a></li> -->
    </ul>
  </div>

 </head>

 <body>
  <!-- Header Start-->
  <header class="site-header">
      <nav class="topnav" id="myTopnav">
        <a href="index.html" class="brand">JNC LIVESTOCK</a>

          <div class="nav-item">
            <a class="disabled" href="index.html">Home</a>
            <a class="disabled" href="animals.html">Animals</a>
            <a class="disabled" href="gallery.html">Gallery</a>
            <a class="disabled" href="about.html">About us</a>
            <a class="active" href="contact2.php">Contact</a>              
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
          </div>              
          <!-- If you want to add navbar dropdown 
           <div class="dropdown">
            <button class="dropbtn">Dropdown
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
             <a href="#">Link 1</a>
             <a href="#">Link 2</a>
             <a href="#">Link 3</a>
            </div>
           </div> -->

      </nav>

    </header>
  <!-- Header End -->

  <!-- Contact1 Simple Form start -->
  <div class="wrapper">
    <h2 class="header-column">Contact Us!</h2>

    <div class="contact-form">
      	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact2_include.php'; #site keys & code here
    
        $toAddress = "garcesj2010@gmail.com";  //Maybe Gmail doesn't work
        $toName = "Jayson"; 
        $website = "JNC LIVESTOCK website";  

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements
        
       ?>
    </div>
  </div>
  <!-- Contact1 Simple Form end -->

    
    <footer>
     <p><small>&copy; 2022 by 
          <a href="contact2.php">JNC LIVESTOCK</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
     
 </body>
</html>