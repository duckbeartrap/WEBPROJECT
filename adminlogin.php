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
    <h1>Admin Login</h1>
  </header>
  <main>
    <div class="wrapper">
      <form class="" id="logform" method="post">
        <input type="text" name="username" placeholder="Username"/>
        <input type="password" name="password" placeholder="Password"/>
        <input type="submit" name="login" value="login" class="button"/>
      </form>

      <?php
      if(!empty('login')){
        include('connect.php');
        session_start();
        if (isset($_POST['username']) and isset($_POST['password'])){
        //3.1.1 Assigning posted values to variables.
        if ($_POST['username'] == 'admin') {


        $username = $_POST['username'];
        $password = $_POST['password'];
        //3.1.2 Checking the values are existing in the database or not
        $query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";

        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $arr = mysqli_fetch_row($result);
        $_SESSION['userid'] = $arr[0];
        $_SESSION['profpic'] = $arr[5];
        $_SESSION['balance'] = $arr[4];
        $count = mysqli_num_rows($result);
        //3.1.2 If the posted values are equal to the database values, then session will be created for the user.
        if ($count == 1){
          $_SESSION['username'] = $username;

        }else{
            echo "<span class="."error".">ERROR</span>";
        }
      }
      if (isset($_SESSION['username'])){
      $username = $_SESSION['username'];
      header("Location: panel.php");
      exit();
      }
      }
      }

      ?>
    </div>
  </main>
</body>
