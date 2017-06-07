<head>
  <link rel="stylesheet" type="text/css" href="style0.css"/>
  <title>Do Nut</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <div class="bgimage">

  </div>
  <header>
    <div class="logo">
      <a href="index.php" class="home"></a>
    </div>
    <h1>BENVE</h1>
  </header>
  <main>
    <div class="wrapper">
      <div class="rorl">
        <a  id="log" class="login selected">Login</a>
        <a  id="reg" class="register">Register</a>
        <script src="app.js"></script>
      </div>
      <form class="" id="logform" method="post">
        <input type="text" name="username" placeholder="Username" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>"/>
        <input type="password" name="password" placeholder="Password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>"/>
        <input type="submit" name="login" value="login" class="button"/>
        <label for="remember-me">Remember me</label>
        <input style="height:20px; width:20px; float:left;" type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
      </form>
      <form id="regform" class="hidden" method="post" enctype="multipart/form-data">
        <input type="text" name="rusername" placeholder="Username" required/>
        <input type="password" name="rpassword" placeholder="Password" required/>
        <input type="text" name="email" placeholder="Email"/>
        <input type="number" name="balance" placeholder="balance" required/>
        <input type="file" name="pic" placeholder="pic" />
        <input type="submit" name="register" value="register" class="button"/>
      </form>
      <?php
      if(!empty('login')){
        include("login.php");
      }
      if(!empty('register')){
        include("register.php");
      }
      ?>
    </div>
  </main>
</body>
