<?php
include("database.php");
$d=$_POST["delivery"];
$sql=mysqli_query($conn,"SELECT `STATUS` FROM `orders` WHERE `ID_NOOW`='$d'")or die(mysqli_error($conn));
$row=mysqli_num_rows($sql);
setcookie('wrapper','7',time()+1,'/');
setcookie('message','Zamówienie nie istnieje',time(),'/');
header("Location: ../");
