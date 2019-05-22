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

  


 





<form action="http://localhost/olxNITC/Ads/mobile/addmobile.php" method="post" enctype="multipart/form-data"> 
    
       <tr><td><p>Item Name</p></td><td><input class="input_box" type="text" name="pname" required></td></tr>
          <tr><td><p>Price</p></td><td><input class="input_box" type="number" name="price" required</td></tr>        
           <tr><td><p>Model Name</p></td><td><input class="input_box" type="text" name="model" required></td></tr>
            <tr><td><p>Manufacturer</p></td><td><input class="input_box" type="text" name="mfg" required></td></tr>
           <tr><td><p>Year Of Purchase</p></td><td><input class="input_box" type="number" name="myop" min="1950" max="2018" step="1" value="2016"required></td></tr>
           <tr><td><p>Upload image</p></td><td><input class="input_box" type="file" name="img1" required></td></tr>
      <tr><td colspan="2"><p align="center"><input class="lgn_rgstr" type="submit" name="submit" value="Submit"></p></td></tr>
    

   </form>
   
   
   </div>






</body>

</html>

