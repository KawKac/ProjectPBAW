<?php
session_start();
include 'database.php';
if($_SESSION['chmode']!='1')
{
  echo 'Access denied!';
}
else {
  $login = $_SESSION['user'];
  $sql = "SELECT `orders`.`ID_NOOW`,`noow`.`NOOL` FROM `orders`,`noow` WHERE `noow`.`NOOW` LIKE `orders`.`ID_NOOW` AND `orders`.`ID_USER`='$login'";
  $arr=mysqli_query($conn,$sql);
  
}
 ?>
