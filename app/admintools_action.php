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
    setcookie('message',"<div class='alert alert-success' role='alert'>Update użytkownika: <b>".$login."</b> przeprowadzono pomyślnie</div>", time()+1,'/');
  }
  else
  {
    setcookie('message',"<div class='alert alert-danger' role='alert'>Nie udało zmienić się uprawnień</div>", time()+1,'/');
  }
  if(!empty($_GET['dezaktywuj']))
  {
    $dezaktywuj=intval($_GET['dezaktywuj']);
    $sql = "UPDATE `users` SET `AKTYWNE`='$dezaktywuj' WHERE `LOGIN`='$login'";
    mysqli_query($conn,$sql) or die($mysqli_error($conn));
    setcookie('message',"<div class='alert alert-success' role='alert'>Update użytkownika: <b>".$login."</b> przeprowadzono pomyślnie</div>", time()+1,'/');
  }
  else {
    setcookie('message',"<div class='alert alert-danger' role='alert'>Nie udało się (dez-)aktywować konta</div>", time()+1,'/');
  }
  setcookie('info','8',time()+1,'/');
  header("Location: ../");
}
?>
