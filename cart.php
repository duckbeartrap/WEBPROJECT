<?php
  include("connect.php");
  $uid = $_SESSION['userid'];
  $query = "SELECT ID FROM `orders` WHERE BUYER_ID=$uid AND STATE = '0'";
  $result = mysqli_query($conn, $query);
  $numofitems = mysqli_num_rows($result);
  echo "$numofitems";
?>
