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

  


 





<form action="http://localhost/olxNITC/Ads/book/addbook.php" method="post" enctype="multipart/form-data"> 
    
       <tr><td><p>Item Name</p></td><td><input class="input_box" type="text" name="pname" required></td></tr>
          <tr><td><p>Price</p></td><td><input class="input_box" type="number" name="price" required</td></tr>        
           <tr><td><p>Author1</p></td><td><input class="input_box" type="text" name="author1" required></td></tr>
           <tr><td><p>Author2</p></td><td><input class="input_box" type="text" name="author2" ></td></tr>
           <tr><td><p>Author3</p></td><td><input class="input_box" type="text" name="author3" ></td></tr>
           <tr><td><p>Author4</p></td><td><input class="input_box" type="text" name="author4" ></td></tr>

            <tr><td><p>Condition</p></td><td>
              <input type="radio" name="bcondition" value="good" checked> Good
              <input type="radio" name="bcondition" value="average"> Avearage
              <input type="radio" name="bcondition" value="bad"> Bad</td></tr>

           <tr><td><p>Upload image</p></td><td><input class="input_box" type="file" name="img1" required></td></tr>
      <tr><td colspan="2"><p align="center"><input class="lgn_rgstr" type="submit" name="submit" value="Submit"></p></td></tr>
    

   </form>
   
   
   </div>






</body>

</html>

