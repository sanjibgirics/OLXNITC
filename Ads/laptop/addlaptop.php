<?php
 session_start();
?>

<?php

$servername = "localhost";
$database = "olxsanjib";
$username = "newuser";
$password = "newuser";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
  

$a = $_SESSION['uid'];

 
  if(!isset($_SESSION['uid'])) { 
        //echo "Invaild uid";
        $_SESSION['lfail'] = "You Must Have to Log-In First";
   header('location:http://localhost/olxNITC/login/signin.php');
    // HTML here
    }
    
else
{
//getting the image from the field
  //getting the image from the field

  print_r ($_FILES);
  $img1=$_FILES['img1']['name'];
  echo $img1;


    $img1_tmp=$_FILES['img1']['tmp_name'];
  $target_dir="./laptop_images/";
  $target_file=$target_dir.basename($_FILES['img1']['name']);
  move_uploaded_file($_FILES['img1']['name'], $target_file);



$target_dir = "laptop_images/";
$target_file = $target_dir . basename($_FILES["img1"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["img1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
// Check if file already exists

// Check file size
if ($_FILES["img1"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/mobile_images/";

if (is_dir($upload_dir) && is_writable($upload_dir)) {
    // do upload logic here
} else {
    echo 'Upload directory is not writable, or does not exist.';
}

    if (move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["img1"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

  
//  echo "g";
$sql= "INSERT INTO product (pname,price,doi,status,ptype,uuid,img1) VALUES ('$_POST[pname]',$_POST[price],CURDATE(),'available','laptop',$a,'$img1')";

//$sql=."INSERT INTO reservation (pname,price,doi,status,ptype,status,uuid,img1) VALUES('$_POST[pname]',$_POST[price],CURDATE(),'available','mobile',$_SESSION['uid'],'$image')";

//  $sql= "INSERT INTO  VALUES";

//  echo $sql;

    if ( !move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file) && mysqli_query($conn, $sql)==true) {
      //echo "Sucessfully";

      
      
      //echo "New record created successfully";



       //now update paticular product table
    $itemId=mysqli_insert_id($conn);
    

    //add if necessary in manufacturer 
    $query="SELECT mfg FROM manufacturer WHERE model='$_POST[model]' ";

    $result1=mysqli_query($conn,$query);
echo "1";
    echo mysqli_error($conn);
    //$man= mysql_fetch_assoc($result);
    if(mysqli_num_rows($result1) <= 0){
    $query="INSERT INTO manufacturer(model,mfg) values('$_POST[model]','$_POST[mfg]')";

    


    $result2=mysqli_query($conn,$query);
echo "2";
    echo mysqli_error($conn);
      if(!$result2){
//        exit('not updated');
      }
    }


    /*
    //insert images
    if(isset($_POST['$img1']){
    $img1=$_POST['$img1'];
    $query="INSERT INTO images(itemId,img) values('$itemId','$img1')";
    $result=mysqli_query($conn,$query);
    }
  
    if(isset($_POST['$img2']){
    $img2=$_POST['$img2'];
    $query="INSERT INTO images(itemId,img) values('$itemId','$img2')";
    $result=mysqli_query($conn,$query);
    }
  
    if(isset($_POST['$img3']){
    $img3=$_POST['$img3'];
    $query="INSERT INTO images(itemId,img) values('$ite','$img3')";
    $result=mysqli_query($conn,$query);
    }

    */

    
    //insert laptops
    $query="INSERT INTO laptop(lpid,lmodel,lyop,backup) values($itemId,'$_POST[model]','$_POST[myop]',$_POST[backup])";
    echo $query;
    $result3=mysqli_query($conn,$query);
echo "3";
    echo mysqli_error($conn);

$_SESSION['success']  = "Sucessfully Ad added!!";
        header('location:http://localhost/olxNITC/Ads/ads.php');


    } else {
      //  echo "fail";
      echo mysqli_error($conn);
      $_SESSION['fail']  = "Invaild Details";
      header('location:http://localhost/olxNITC/Ads/ads.php');
      //echo "Error: Invalid Login";
  }



}
mysqli_close($conn);

?>