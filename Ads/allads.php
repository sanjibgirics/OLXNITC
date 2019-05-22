<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
    <style type="text/css">
      body{
        color: brown;
      }
     
    </style>
  </head>
  <body>
<body>



 <?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = $path . "/olxNITC/header.php";
    include($path);
  ?>
 

<?php
  
  $conn=mysqli_connect('localhost','newuser','newuser','olxsanjib');
  if(!$conn){
    exit('database connection fails');
  }

  
?>


    
      <!-- blank row  -->
      
      <!-- end blank row -->

      
      <?php 
      

      $query="SELECT * FROM product";
      $result=mysqli_query($conn,$query);
      if(!$result){
        echo "no data";
      }
      
      while($row = mysqli_fetch_assoc($result)){


        $a = $row['doi'];
$nDays = 10;

$today = date("Y-m-d");

$soma = date('Y-m-d', strtotime($a. ' + 10 days'));

if($soma >= $today)
{
          $itemId=$row['pid'];
          $itemName=$row['pname'];
          $price=$row['price'];
          $itemStatus=$row['status'];
          $image=$row['img1'];
          $ownerID = $row['uuid'];
          $itemType=$row['ptype'];
          $sql6="select * from user where uid='$ownerID' limit 1";
          $owner1=mysqli_query($conn,$sql6);
          $owner=mysqli_fetch_assoc($owner1);  
      
        if($itemType=='mobile'){

            $sql="SELECT * FROM mobile WHERE mpid=$itemId";
            $res=mysqli_query($conn,$sql);
            $temp = mysqli_fetch_assoc($res);

            $GLOBALS['yop'] = $temp['myop'];
            $GLOBALS['model'] = $temp['mmodel'];

            $y = $GLOBALS['model'];

            $sqli="SELECT mfg FROM manufacturer WHERE model='$y'";
            $resi=mysqli_query($conn,$sqli);
            $tempi = mysqli_fetch_assoc($resi);
            $GLOBALS['manufacturer']=$tempi['mfg'];

          }
        

           if($itemType=='laptop'){

            $sql="SELECT * FROM laptop WHERE lpid=$itemId ";
            $res=mysqli_query($conn,$sql);
            $temp = mysqli_fetch_assoc($res);
            
            $GLOBALS['model']=$temp['lmodel'];
            $GLOBALS['yop']=$temp['lyop'];
            $GLOBALS['backup']=$temp['backup'];

            $y = $GLOBALS['model'];
            $sqli="SELECT mfg FROM manufacturer WHERE model='$y'";
            $resi=mysqli_query($conn,$sqli);
            $tempi = mysqli_fetch_assoc($resi);
            $GLOBALS['manufacturer']=$tempi['mfg'];

          }

          if($itemType=='book'){

            $sql="SELECT bcondition FROM book WHERE bpid=$itemId ";
            $res=mysqli_query($conn,$sql);
            $temp = mysqli_fetch_assoc($res);
            
            
            $GLOBALS['bookCondition']=$temp['bcondition'];

            
          }

          
      ?>
      
      <!-- end blank row -->
      <div class="row">
          
        
          <table class=" table-sm">
            
            <?php 
            if($itemType=='mobile'){
              

               echo "<img src='mobile/mobile_images/$image' width='180' height='180'float='center'/>";

               ?>
             
              <tr>
              <td>Item Name</td>
              <td style="color: red;" ><?php echo $itemName; ?></td>
            </tr>
            
            <tr>
              <td>Price</td>
              <td style="color: purple;"><?php echo $price; ?></td>
            </tr>
            <tr>
              <td>Posted Date</td>
              <td style="color: red;" ><?php echo $a; ?></td>
            </tr>

              <tr>
                <td>Manufacturer</td>
                <td style="color: black;"><?php echo $GLOBALS['manufacturer']; ?></td>
              </tr>

              <tr>
                <td>Model</td>
                <td style="color: black;"><?php echo $GLOBALS['model']; ?></td>
              </tr>


              <tr>
                <td>Year of Purchase</td>
                <td style="color: black;"><?php echo $GLOBALS['yop']; ?></td>
            </tr>
            <?php
            }
            ?>

            <?php 
            if($itemType=='laptop'){
              echo "<img src='laptop/laptop_images/$image' width='180' height='180'float='center'/>";

               ?>
             
              <tr>
              <td>Item Name</td>
              <td style="color: red;" ><?php echo $itemName; ?></td>
            </tr>
            
            <tr>
              <td>Price</td>
              <td style="color: purple;"><?php echo $price; ?></td>
            </tr>
            <tr>
              <td>Posted Date</td>
              <td style="color: red;" ><?php echo $a; ?></td>
            </tr>

              <tr>
                <td>Manufacturer</td>
                <td style="color: black;"><?php echo $GLOBALS['manufacturer']; ?></td>
              </tr>

              <tr>
                <td>Model</td>
                <td style="color: black;"><?php echo $GLOBALS['model']; ?></td>
              </tr>


              <tr>
                <td>Year of Purchase</td>
                <td style="color: black;"><?php echo $GLOBALS['yop']; ?></td>
            </tr>

              <tr>
                <td>BackUp</td>
                <td style="color: black;"> 
                  <?php 
              if($GLOBALS['backup'] == 1)
              echo "YES";
              else
              echo "NO";
            ?></td>
            </tr>

            <?php
          }
            ?>


            <?php
            if($itemType=='book'){

               echo "<img src='book/book_images/$image' width='180' height='180'float='center'/>";
                $sql1="SELECT author FROM author WHERE apid=$itemId ";
              $auth=mysqli_query($conn,$sql1);
               ?>
             
              <tr>
              <td>Item Name</td>
              <td style="color: red;" ><?php echo $itemName; ?></td>
            </tr>
            <tr>
              <td>Price</td>
              <td style="color: purple;"><?php echo $price; ?></td>
            </tr>
            <tr>
              <td>Posted Date</td>
              <td style="color: red;" ><?php echo $a; ?></td>
            </tr>
            <tr>
              <td>Condition</td>
              <td style="color: purple;"><?php echo $GLOBALS['bookCondition']; ?></td>
            </tr>

           
              

            <tr>
                <td>Authors:</td>
                <td style="color: black;">
                  <?php
                  while($a=mysqli_fetch_assoc($auth)){
                  ?>
                    <?php echo $a['author']; echo "<br/>"; ?>
                  
                  <?php
                  }
                  ?>
                </td>
              </tr>


          }
             <?php
          }
            ?>

             <tr>
              <td>Owner Detail:</td>
            </tr>
            
            <tr>
              <td>Name</td>
              <td style="color: purple;"><?php echo $owner['uname']; ?></td>
            </tr>


              <tr>
                <td>Email</td>
                <td style="color: black;"><?php echo $owner['nitc_id']; ?></td>
              </tr>

              <tr>
                <td>Phone</td>
                <td style="color: black;"><?php echo $owner['mob'];  ?></td>
              </tr>
              
          </table> 
        </div>
        

      <hr>









      <?php
      //end while
    }
      }


      ?>

     
      <!-- end product area -->

  

    <?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = $path . "/olxNITC//footer.php";
    include($path);
     ?>
  


  
  </body>
</html>