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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Do Nut</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="stylepanel.css"/>
</head>
<body>
  <div class="bgimage">

  </div>
  <header>
    <div class="wrapper">
    <div class="logo">
      <a href="panel.php" class="start"></a>
    </div>
      <a class="logout" href="logout.php">
        LOGOUT
      </a>
  </div>
  </header>
  <div class="naming">
    ADD CARS
  </div>
  <main>
    <form id="regform" action="addcar.php" method="post" enctype="multipart/form-data">
      <input type="text" name="model" placeholder="Car Model" required/>
      <input type="number" name="price" placeholder="Price" required/>
      <span class="naming">Car Pic</span>
      <input type="file" name="carpic" required/>
      <span class="naming">RIMS</span>
      <input type="file" name="rims1" required/>
      <input type="file" name="rims2" required/>
      <input type="submit" name="addcar" value="ADD CAR" class="button"/>
    </form>
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
