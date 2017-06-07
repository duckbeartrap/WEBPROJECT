<?php
  if(isset($_POST['register'])){
    include('methods.php');
    $regobj = new Methods;
    $regobj->regUser();
  }
?>
