<?php
session_start();
session_unset();
session_destroy();
setcookie('info','0',time()+1800,'/');
setcookie('user','',time()+1800,'/');
header("Location:../");
?>
