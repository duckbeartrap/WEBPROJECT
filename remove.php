<?php
  include("connect.php");
  $orderid = $_GET['orderid'];
  $price = $_GET['price'];
  $picture = $_GET['picture'];
  $query = "DELETE FROM orders WHERE ID = $orderid;";
  $result = mysqli_query($conn,$query);
  if ($result) {
    unlink($picture);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die;
  }
  else{
    echo "ERROR!";
  }
?>
