<?php
  include('connect.php');
  // If the values are posted, insert them into the database.
  if (isset($_POST['rusername']) && isset($_POST['rpassword'])){
      $username = $_POST['rusername'];
      $email = $_POST['email'];
      $password = $_POST['rpassword'];
      //check if the username already exists
      $query_user = "SELECT USERNAME FROM authors WHERE USERNAME='$username';";
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
      $query = "INSERT INTO `authors` (`ID`, `USERNAME`, `PASSWORD`, `EMAIL`, `PICTURE`) VALUES (NULL, '$username', '$password', NULL, '$name');";
      $result = mysqli_query($conn, $query);
      if($result){
          echo "<span class="."error".">DONUTSTERED</span>";
      }else{
          echo "User Registration Failed";
      }
  }
}

?>
