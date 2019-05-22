<?php
 session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>UserAd</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/olxNITC/style/formCSS.css">
</head>

<body>

  


 
 <?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = $path . "/olxNITC/header.php";
    include($path);
  ?>


  <?php
   if (isset($_SESSION['lfail'])) : ?>
      <div class="box">
        <p>
          <?php 
             echo "You Must Have to Login-In First";
          ?>
        </p>
      </div>
  <?php endif ?>
  
  <?php
   if (isset($_SESSION['success'])) : ?>
      <div class="box">
        <p>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
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

<form action="http://localhost/olxNITC/Ads/ads.php" method="post">
    
    
    <div ><h2 align="center">Enter Your Ad Detail</h2><hr></div><br><br>
    <table align="center">
          <tr><td><p>Category</p></td><td>
              <select type="text" name="ptype" >
                    <option>-----</option>
                    <option <?php if ($_POST['ptype'] == 'mobile') { ?>selected="true" <?php }; ?>>mobile</option>
                    <option <?php if ($_POST['ptype'] == 'laptop') { ?>selected="true" <?php }; ?>>laptop</option>
                    <option <?php if ($_POST['ptype'] == 'book') { ?>selected="true" <?php }; ?>>book</option>
              </select></td></tr>
   
          <tr><td colspan="2"><p align="center"> <button type="submit" name="add" value="">Proceed</button></p></td></tr>
</form>

          <?php


if($_POST['ptype']=='book'){
  include('book/bookform.php');
}
if($_POST['ptype']=='mobile'){
  include('mobile/mobileform.php');
}
if($_POST['ptype']=='laptop'){
  include('laptop/laptopform.php');
}


?>


    </table>
   
   
   
   </div>
 </div>




 <?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = $path . "/olxNITC/footer.php";
    include($path);
     ?>


</body>

</html>


