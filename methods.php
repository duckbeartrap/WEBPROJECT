<?php
class Methods{
public function regUser (){
  include('connect.php');
  // If the values are posted, insert them into the database.
  if (isset($_POST['register'])){
      $username = $_POST['rusername'];
      $email = $_POST['email'];
      $password = $_POST['rpassword'];
      $hashedpass = hash('sha512', $password.$username);
      $balance = $_POST['balance'];
      //check if the username already exists
      $query_user = "SELECT USERNAME FROM user WHERE USERNAME='$username';";
      $result_user = mysqli_query($conn,$query_user);
      $anything_found = mysqli_num_rows($result_user);
  if($anything_found>0){
    echo "<span class="."error".">USERNAME TAKEN</span>";
  }
  else{
      if (isset($_FILES['pic'])) {
        $name = $_FILES['pic']['name'];
        move_uploaded_file($_FILES['pic']['tmp_name'], "profilepic/".$_FILES['pic']['name']);
      }
      $query = "INSERT INTO `user` (`ID`, `USERNAME`, `PASSWORD`, `EMAIL`, `BALANCE`, `PROFILEPIC`) VALUES (NULL, '$username', '$hashedpass', '$email', '$balance', '$name')";
      $result = mysqli_query($conn, $query);
      if($result){
          echo "<span class="."error".">REGISTERED</span>";
          header("LOCATION: logreg.php");
      }else{
          echo "User Registration Failed";
      }
  }
}
}

public function logUser (){
  include('connect.php');
  session_start();
  if (isset($_POST['username']) and isset($_POST['password'])){
  //3.1.1 Assigning posted values to variables.
  $username = $_POST['username'];
  $password = $_POST['password'];
  $hashedpass = hash('sha512', $password.$username);
  //3.1.2 Checking the values are existing in the database or not
  $query = "SELECT * FROM `user` WHERE username='$username' and password='$hashedpass'";
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $arr = mysqli_fetch_row($result);
  $_SESSION['userid'] = $arr[0];
  $_SESSION['profpic'] = $arr[5];
  $_SESSION['balance'] = $arr[4];
  $count = mysqli_num_rows($result);
  //3.1.2 If the posted values are equal to the database values, then session will be created for the user.
  if ($count == 1){
    $_SESSION['username'] = $username;
    if(isset($_POST["remember"])) {
				setcookie ("member_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("member_password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["member_login"])) {
					setcookie ("member_login","");
				}
				if(isset($_COOKIE["member_password"])) {
					setcookie ("member_password","");
				}
			}

  }else{
      echo "<span class="."error".">ERROR</span>";
  }
}
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
header("Location: shop.php");
exit();
}
}
public function getOrders (){
include('connect.php');
$userid = $_SESSION['userid'];
$query = "select orders.ID, orders.PRICE, orders.PICTURE, cars.MODEL from orders, cars, user where user.ID = $userid AND STATE = '0'";
$result = mysqli_query($conn,$query);
if($result){
$row = mysqli_fetch_array($result);
while($row = mysqli_fetch_array($result)){
  $orderid = $row["ID"];
  $price = $row["PRICE"];
  $orderpic = $row["PICTURE"];
  $carmodel = $row["MODEL"];
  $list =
  "<li class='item' id= $orderid >
  <a class='edit'>
    <div class='image' style=' background: url('$orderpic');background-size:cover;background-position:center;'>
    </div>
    <span class='filename'>BMW - $carmodel | $price</span>
  </a>
  </li>";
  echo $list;
  }
}
else{
  echo "shir";
}
}
}
?>
