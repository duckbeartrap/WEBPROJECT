<?php
  session_start();
  include("connect.php");
  $orderid = $_GET['orderid'];
  $price = $_GET['price'];
  $query = "UPDATE orders SET STATE = '1' WHERE ID = $orderid;";
  $result = mysqli_query($conn,$query);
  if ($result) {
    $newbalance = $_SESSION['balance'] - $price;
    $uid = $_SESSION['userid'];
    $query2 = "UPDATE user SET BALANCE = $newbalance WHERE ID = $uid;";
    $result = mysqli_query($conn,$query2);
    if ($result) {
      $_SESSION['balance'] = $newbalance;
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      die;
    }
    else{
      echo "error";
    }
  }
  else{
    echo "ERROR!";
  }
?>
