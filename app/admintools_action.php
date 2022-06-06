<?php
session_start();
if($_SESSION['chmode']!=3)
  echo "Access denied!";
else {
  $wynik = $_COOKIE['wynik'];

}
?>
