<!doctype html>
<?php
 session_start();
?>

<html>
<head>
<title>LOGIN</title>
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
						echo $_SESSION['lfail']; 
						unset($_SESSION['lfail']);
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

<form action="http://localhost/olxNITC/login/validate.php" method="post" name="form1">
    
    <img class="image" src="logo.png"><div class="heading"><h2 align="center">LOG - IN</h2><hr></div><br>
    <table align="center"><tr>
    	<tr><td><p>Email</p></td><td><input class="input_box" type="email" name="email" value="" required></td></tr>
           <tr><td><p align="center">Password</p></td><td><input class="input_box" placeholder="********" type="password" name="pwd" value=""  required></p></td></tr>
            <tr><td colspan="2"><p align="center"><input class="lgn_rgstr" type="submit" name="submit" value="Sign-IN"></p></td></tr>
    </table>
</form>
<b><p align="center" style="margin-right:-60px;">Or</p></b>
<b><p align="center" style="margin-right:-60px;">New User ?</p></b>
<p align="center"><a href="http://localhost/olxNITC/login/signup.php"><input class="lgn_rgstr" type="submit" name="register" value="REGISTER"></a></p>
</div>






<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = $path . "/olxNITC/footer.php";
    include($path);
  ?>

</body>
</html>
