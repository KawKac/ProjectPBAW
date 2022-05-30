<?php
session_start();
unset($_SESSION['newsession']["login"]);
unset($_SESSION['newsession']["password"]);
$_SESSION['newsession']['info']=0;
header("Location:../");
?>
