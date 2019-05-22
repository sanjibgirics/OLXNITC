 <?php
 session_start();
 ?>

 <html>

<head>
  <title>NITC-OLX</title>

  <link rel="stylesheet" type="text/css" href="http://localhost/olxNITC/style/style.css">


 
  <!--  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$(document).ready(function(){
var header = $('body');

var backgrounds = new Array(
    'url(http://localhost/olxNITC/style/logo3.jpg)'
  , 'url(http://localhost/olxNITC/style/logo2.jpg)'
  , 'url(http://localhost/olxNITC/style/logo4.jpg)'
  , 'url(http://localhost/olxNITC/style/logo1.png)'
);

var current = 0;

function nextBackground() {
    current++;
    current = current % backgrounds.length;
    header.css('background-image', backgrounds[current]);
}
setInterval(nextBackground, 4000);

header.css('background-image', backgrounds[0]);
});

</script> -->




</head>

<body>

  

    <div id = "header">

      <div id="logo">
          <h3><a href="http://localhost/olxNITC/index.php" id="logo_text1">OLX<span id="logo_text2">   NITC</span></a></h3>
          &nbsp;<span id= "logo_text3">Responsible Marketplace</span>
          &nbsp;&nbsp;<img src = "http://localhost/olxNITC/style/logoo.png" alt = "image not avilable" style = "width:4%;height :20%;">
        <div class="search_container">
          <form  method="GET" action="http://localhost/olxNITC/Ads/adssearch.php"><input type="text" placeholder="search.." name="searchterms">
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    

      <div class="navbar">
        
          <ul class="dropbtn"><a href="http://localhost/olxNITC/index.php">Home</a></ul>
           <ul class="dropbtn"><a href="http://localhost/olxNITC/Ads/allads.php">All Products</a></ul>
          <ul class="dropbtn"><a href="http://localhost/olxNITC/Ads/adscategory.php?id=1">Mobiles</a></ul>
          <ul class="dropbtn"><a href="http://localhost/olxNITC/Ads/adscategory.php?id=2">Laptops</a></ul>
          <ul class="dropbtn"><a href="http://localhost/olxNITC/Ads/adscategory.php?id=3">Books</a></ul>
         <ul class="dropbtn" "><a href="http://localhost/olxNITC/Ads/ads.php" style="color:cyan;">Sumit You AD</a></ul>
          <ul class="dropbtn"><a href="http://localhost/olxNITC/contact.php">Contact Us</a></ul>

   <?php

   if (isset($_SESSION['username'])) : ?>
      
        <ul class="dropbtn"><span style ="color: cyan"><a style ="color: cyan">

          <?php 
            echo "Hello, ";
            echo $_SESSION['username']; 
            //echo $_SESSION['uid'];
            //
            //unset($_SESSION['username']);
          ?>

       </a> </span></ul>

      <ul class="dropbtn"><a href="http://localhost/olxNITC/Ads/userads.php">Your Ads</a></ul>
        <ul class="dropbtn"><a href="http://localhost/olxNITC/login/signout.php">SignOut</a></ul>
      
      
  <?php endif ?>


  <?php
   if (!isset($_SESSION['username'])) : ?>

   <a href="http://localhost/olxNITC/login/signin.php">Login</a></ul>

  <?php endif ?>

        

  </div>

  </div> 
  
</body>
</html>
