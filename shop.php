<?php session_start();
$arr = $_SESSION['profpic'];
$uid = $_SESSION['userid'];
?>
<?php
include("methods.php");
if(!empty('login')){if(isset($_POST['upload'])){include('upload.php');}} ?>
<head>
  <style>
    .profpic{
      background: url("./profilepic/<?php echo $_SESSION['profpic']; ?>");
    }

  </style>
  <link rel="stylesheet" type="text/css" href="shop.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Do Nut</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <div class="bgimage">

  </div>
  <header>
    <div class="wrapper">
    <div class="logo">
      <a href="shop.php" class="start"></a>
    </div>
    <div class="menu">
      <div class="upload" id="upload"><i class="fa fa-shopping-cart" aria-hidden="true"></i>

        <div class="cartcontain" id="cart">
          <ul class="cartitems">
          <?php
            include('connect.php');
            $userid = $_SESSION['userid'];
            $query = "select orders.ID, orders.PRICE, orders.PICTURE, cars.MODEL from orders, cars where BUYER_ID = $userid AND STATE = '0' AND orders.MODEL_ID = cars.ID ORDER BY orders.ID";
            $result = mysqli_query($conn,$query);
            if($result){
            while($row = mysqli_fetch_array($result)){
              $orderid = $row["ID"];
              $price = $row["PRICE"];
              $orderpic = $row["PICTURE"];
              $carmodel = $row["MODEL"];
              $list =
              "<li id= '$orderid'>
                <div style=' background: url(".htmlspecialchars($orderpic).");background-size:cover;background-position:center;'>
                </div>
                <span>BMW - $carmodel | $price</span>
              <a class='buy' href='buy.php?price=$price&orderid=$orderid'>
              BUY
              </a>
              <a class='remove' href='remove.php?price=$price&orderid=$orderid&picture=$orderpic'>
              REMOVE
              </a>
              </li>";
              echo $list;
              }
            }
            else{
              echo "shir";
            }
                ?>
          </ul>
        </div>
      </div>
      <div class="numofcart">
      <?php include("cart.php"); ?>
      </div>
      <a class="boughtitems" href="bought.php">BOUGHT</a>
    </div>
    <div class="loginfo">
      <div class="profpic">

      </div>
      <div class="user">
        <?php echo $_SESSION['username']." <span style='color:green;'>$".$_SESSION['balance']."</span>";
          ?>
      </div>
      <a class="logout" href="logout.php">
        LOGOUT
      </a>
    </div>
  </div>
  </header>
  <main>
    <div class="wrapper">
      <ul class="grid">
        <?php
        include('connect.php');
        $query = "select * from cars";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result)){
          $carid = $row["ID"];
          $modelname = $row["MODEL"];
          $carpic = $row["PICTURE"];
          $price = $row["PRICE"];
          $list =
          "<li class='item' id= '$carid' >
          <a href='buildurbmw.php?modelname=$modelname&carpic=$carpic&price=$price&carid=$carid' class='edit'>
            <div class='image' style=' background: url(".htmlspecialchars("./SALECARS/$carpic);background-size:cover;background-position:center;'").">
            </div>
            <span class='filename'>BMW - $modelname</span>
          </a>
          </li>";
          echo $list;
        }
         ?>
      </ul>
    </div>
  </main>
  <footer>
  	<div class="wrapper">
  		<div class="firstline">
  			<p style="color: white">BMW on Social Media: </p>
  			<div class="slogos">
  				<a href="www.facebook.com" class="facebooklogo" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
  				<a href="www.google.com" class="googlelogo" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></i></a>
  				<a href="www.twitter.com" class="twitterlogo" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></i></a>
  				<a href="www.youtube.com" class="youtubelogo" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
  				<a href="www.instagram.com" class="instagramlogo" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
  				<a href="www.linkedin.com" class="linkedinlogo" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
  				<a href="www.vine.com" class="vinelogo" target="_blank"><i class="fa fa-vine" aria-hidden="true"></i></a>
  				</div>
  				<a class="footermenu providerbtn" style="cursor: pointer; " onclick="popupfunctioncontact()">Contact</a>
  				<a class="footermenu providerbtn" style="cursor: pointer; " onclick="popupfunctioncompanyinfo()">Company Information
  				</a>
  		</div>
  	</div>
  </footer>
</body>
