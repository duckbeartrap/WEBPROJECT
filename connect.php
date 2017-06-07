<?php
$conn = mysqli_connect('localhost', 'root', '', 'project');
if (!$conn){
  die("Database Connection Failed" . mysqli_error($conn));
}
 ?>
