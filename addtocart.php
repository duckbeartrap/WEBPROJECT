<?php
  include("connect.php");
  if (isset($_POST['addtocart'])){
      $userid = $_SESSION['userid'];
      $query = "SELECT ID FROM `orders` WHERE BUYER_ID=$uid";
      $result = mysqli_query($conn, $query);
      $numofrows = mysqli_num_rows($result);
      $counter = $numofrows+1;
      $modelid = $_GET['carid'];
      $price = $_POST['orderprice'];
      $rims = $_POST['rims'];
      $carpic = $_GET['carpic'];
      $img = imagecreatefrompng("SALECARS/$carpic");
      $img2 = imagecreatefrompng("SALECARS/RIMS/$rims.png");
      imagecopy($img,$img2,0,0,0,0,imagesx($img),imagesy($img));
      $pathto = "ORDERPICS/".$userid.$counter.".jpeg";
      imagejpeg($img,$pathto);
      $query = "INSERT INTO `orders` (`ID`, `BUYER_ID`, `MODEL_ID`, `PRICE`, `PICTURE`, `STATE`) VALUES (NULL, '$userid', '$modelid', '$price', '$pathto', '0')";
      $result = mysqli_query($conn, $query);
      if($result){
          header('Location:'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
          die;
      }else{
          echo "fail";
      }
  }
?>
