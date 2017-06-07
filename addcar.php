<?php
  if (isset($_POST['addcar'])) {
    include ("connect.php");
    $modelname = $_POST['model'];
    $price = $_POST['price'];
    $cartemp = explode(".", $_FILES["carpic"]["name"]);
    $carpicfilename = $modelname.'.'.end($cartemp);
    $rims1temp = explode(".", $_FILES["rims1"]["name"]);
    $rims1filename = $modelname.'rims1.'.end($rims1temp);
    $rims2temp = explode(".", $_FILES["rims2"]["name"]);
    $rims2filename = $modelname.'rims2.'.end($rims2temp);

    $sql = "INSERT INTO `cars` (`ID`, `MODEL`, `PRICE`, `PICTURE`) VALUES (NULL, '$modelname', '$price', '$carpicfilename');";
    $result = mysqli_query($conn,$sql);
    if ($result) {
      move_uploaded_file($_FILES["carpic"]["tmp_name"], "SALECARS/" . $carpicfilename);
      move_uploaded_file($_FILES["rims1"]["tmp_name"], "SALECARS/RIMS/" . $rims1filename);
      move_uploaded_file($_FILES["rims2"]["tmp_name"], "SALECARS/RIMS/" . $rims2filename);
      header("LOCATION: panel.php");
      echo "SUCCESS";
    }
  }
?>
