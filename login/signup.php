<?php
 session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/olxNITC/style/formCSS.css">
</head>

<body>

  


 
 <?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = $path . "/olxNITC/header.php";
    include($path);
  ?>


  <?php
   if (isset($_SESSION['pass_error'])) : ?>
      
      <div class="box">
        <p>

          <?php 
            echo $_SESSION['pass_error']; 
            unset($_SESSION['pass_error']);
          ?>
        
        </p>
      </div>

  <?php endif ?>


  <?php
   if (isset($_SESSION['fail'])) : ?>
      
      <div class="box">
        <p>

          <?php 
            echo $_SESSION['fail']; 
            unset($_SESSION['fail']);
          ?>
        
        </p>
      </div>

  <?php endif ?>


 <div class="box">

<form action="http://localhost/olxNITC/login/insert1.php" method="post">
    
    <img class="image" src="logo.png">
    <div class="heading"><h2 align="center">SIGN - UP</h2><hr></div><br>
    <table align="center">
           <tr><td><p>Full Name</p></td><td><input class="input_box" type="text" name="name" required pattern="[a-zA-Z\s]+"></td></tr>
           <tr><td><p>Mobile</p></td><td><input class="input_box" type="text" name="mobile" required  pattern="[6-9]{1}[0-9]{9}"></td></tr>
            <tr><td><p>Password</p></td><td><input class="input_box" type="password" name="pwd" required></td></tr>
           <tr><td><p>Confirm Password</p></td><td><input class="input_box" type="password" name="pwd1" required></td></tr>
           <tr><td><p>Email</p></td><td><input class="input_box" type="email" name="email" required></td></tr>
          <tr><td><p>Type</p></td><td>
              <input type="radio" name="utype" value="faculty" checked> Faculty
              <input type="radio" name="utype" value="student"> Student
              <input type="radio" name="utype" value="staff"> Staff</td></tr>
              
          <tr><td colspan="2"><p align="center"><input class="lgn_rgstr" type="submit" name="submit" value="Register"></p></td></tr>
    </table>
   </form>
   
   
   </div>
 </div>


 <?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = $path . "/olxNITC/footer.php";
    include($path);
     ?>


</body>

</html>
