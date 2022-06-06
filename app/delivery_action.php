<?php
include("database.php");
$delivery=$_POST['delivery'];
$sql=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `orders` WHERE `ID_NOOW`='$delivery'"));
setcookie('delivery',$sql,date()+1800,'/');
setcookie('info','7',date()+1800,'/');
header("Location: ../");
?>
