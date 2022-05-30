<?php
session_start();
unset($_SESSION["login"]);
unset($_SESSION["password"]);
$_SESSION['info']=0;
header("Location:../");
?>
