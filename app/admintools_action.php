<?php
include 'database.php';
session_start();
if($_SESSION['chmode']!=3)
  echo "Access denied!";
else {
  $login=$_GET['login'];
  if(!empty($_GET['chmode']))
  {
    $chmode=$_GET['chmode'];
    $sql = "UPDATE `users_chmode` SET `ID_CHMODE`='$chmode' WHERE `ID_USERS`='$login'";
    mysqli_query($conn,$sql);
    setcookie('message',"<div class='alert alert-success' role='alert'>Update użytkownika: <b>".$login."</b> przeprowadzono pomyślnie</div>", time()+2,'/');
  }
  if(!empty($_GET['dezaktywuj']))
  {
    $dezaktywuj=intval($_GET['dezaktywuj']);
    $sql = "UPDATE `users` SET `AKTYWNE`='$dezaktywuj' WHERE `LOGIN`='$login'";
    mysqli_query($conn,$sql);
    setcookie('message',"<div class='alert alert-success' role='alert'>Update użytkownika: <b>".$login."</b> przeprowadzono pomyślnie</div>", time()+2,'/');
  }
  setcookie('info','8',time()+2,'/');
  header("Location: ../");
}
?>
