 <!doctype html>
<html>

<head>
  <title>OLXNITC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/homepageStyle.css">  
</head>

<body>

  <!--header-->
 <div id = "main">

  <?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = $path . "/olxNITC/header.php";
    include($path);
  ?>

  <!--footer-->

  <div id="site_content">

    "Welcome To OLX NITC"
    <h3></h3>

  </div>


   
<div id="article">
  
  <style>

#grid-cell .grid_border{
padding:1px;
}
#grid-cell .grid_border:hover{
padding:0.5px;
border:0.5px solid #D3D3D3;
}


</style>

<table id="grid-cell" cellspacing="50" style="padding:0 0 150px 0;margin-left:8px;">
<tr>
  



<td class="grid_border" style="text-align:center;">
   <a href = "Ads/adscategory.php?id=1"><img src="style\1.jpg"></a><br>
   <div id = "grid_span">
   <span>Buy Mobile</span>
 </div>
  
</td>
<td class="grid_border" style="text-align:center;">
   <a href = "Ads/adscategory.php?id=1"><img src="style\2.jpg"></a>
   <div id = "grid_span">
   <span>Buy Laptop</span>
 </div>
  
</td>

<td class="grid_border" style="text-align:center;">
   <a href = "Ads/adscategory.php?id=1"><img src="style\3.jpg"></a>
   <div id = "grid_span">
   <span>Buy Book</span>
 </div>
  
</td>

</tr>

<tr>




</table>

</div>




  <?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = $path . "/olxNITC/footer.php";
    include($path);
     ?>
     
</div>

</body>
</html>
