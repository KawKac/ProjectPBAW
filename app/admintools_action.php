<?php
include 'database.php';
session_start();
if($_SESSION['chmode']!=3)
  echo "Access denied!";
else {
  $row=$_GET['row'];
  $login=$_GET['login'];
  if(!empty($_GET['chmode']))
  {
    $chmode=$_GET['chmode'];
    $sql = "UPDATE `users_chmode` SET `ID_CHMODE`='$chmode' WHERE `ID_USERS`='$login'";
    mysqli_query($conn,$sql);
  }
  if(!empty($_GET['dezaktywuj']))
  {
    $dezaktywuj=intval($_GET['dezaktywuj']);
    $sql = "UPDATE `users` SET `AKTYWNE`='$dezaktywuj' WHERE `LOGIN`='$login'";
    mysqli_query($conn,$sql);
  }
  setcookie('info','8',time()+2,'/');
  setcookie('message',"Update użytkownika: ".$login." przeprowadzono pomyślnie", time()+2,'/');
  header("Location: ../");
}
?>
