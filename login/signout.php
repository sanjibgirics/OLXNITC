<?php
 session_start();

 unset($_SESSION['username']);
 unset($_SESSION['uid']);
 header('location:http://localhost/olxNITC/index.php');

 ?>
