<?php
if(isset($_POST['login'])){
  include('methods.php');
  $logobj = new Methods;
  $logobj->logUser();
}
  ?>
