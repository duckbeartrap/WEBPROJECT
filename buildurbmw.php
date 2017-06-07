<?php session_start();
$arr = $_SESSION['profpic'];
$uid = $_SESSION['userid'];
?>
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
  <main style="margin-top:20px;">

    <div class="containphotos">
      <div class="car" style=' background: url("./SALECARS/<?php echo $_GET['carpic']?>"); background-size:cover;'>
      </div>
      <div class="rims" id="rims" style="background-size:cover;">
      </div>
    </div>
    <div class="options">
      <form method="post" style="position:relative;">
        <div id="price">
           <span id='finalprice' style='color:green;'><?php echo "$".$_GET['price'];?></span>
        </div>
      <ul class="optionsul">
        <li id="opt1">
          M - Rims
        </li>
        <li id="opt2">
          V - Rims
        </li>
        <li id="opt3">
          Standard
        </li>
        <li id="opt3">
          <input type="text" id="rimsval" name="rims" style="display:none;" value=""/>
          <input type="text" id="orderprice" name="orderprice" style="display:none;" value="<?php echo $_GET['price']; ?>"/>
          <input type="submit" name="addtocart" value="Add To Cart"/>
        </li>
      </ul>
      <?php include("addtocart.php");?>
      </form>
      <script>
      $(document).ready(function(){
          $("#opt1").click(function(){
              $("#rims").css("background","url('./SALECARS/RIMS/<?php echo $_GET['modelname']."rims1";?>.png')").css("background-size","cover");
              $("#rimsval").val('<?php echo $_GET['modelname']."rims1";?>');
              $("#finalprice").html('<?php $finprice =$_GET['price'] + 2000;  echo "$".$finprice; ?>');
              $("#orderprice").val('<?php echo $finprice;?>');
          });
          $("#opt2").click(function(){
              $("#rims").css("background","url('./SALECARS/RIMS/<?php echo $_GET['modelname']."rims2";?>.png')").css("background-size","cover");
              $("#rimsval").val('<?php echo $_GET['modelname']."rims2";?>');
              $("#finalprice").html('<?php $finprice =$_GET['price'] + 2500;  echo "$".$finprice; ?>');
              $("#orderprice").val('<?php echo $finprice;?>');
          });
          $("#opt3").click(function(){
              $("#rims").css("background","");
              $("#rimsval").val('standard');
              $("#finalprice").html('<?php $finprice =$_GET['price'];  echo "$".$finprice; ?>');
          });
      });
      </script>
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
