<?php
 session_start();
$servername = "localhost";
$database = "olxsanjib";
$username = "root";
$password = "bcl";

$a=$_POST[email];
$b=$_POST[pwd];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if (!$conn) {

      die("Connection failed: " . mysqli_connect_error());
}
 
$sql="select * from user where nitc_id='$a' and pwd='$b' limit 1";

$result=mysqli_query($conn,$sql);


if (mysqli_num_rows($result) == 1) {

	$logged_in_user = mysqli_fetch_assoc($result);
	$_SESSION['username']=$logged_in_user['uname'];
	$_SESSION['uid']=$logged_in_user['uid'];
	$_SESSION['user_id']=$logged_in_user['uid'];
	header('Location:http://localhost/olxNITC/index.php');

} else {

	//echo("Error description: " . mysqli_error($conn));

	$_SESSION['fail']="Invalid Login Detail";

	//echo("Error description: " . mysqli_error($conn)); 
	header('Location:http://localhost/olxNITC/login/signin.php');
}
mysqli_close($conn);

?>
