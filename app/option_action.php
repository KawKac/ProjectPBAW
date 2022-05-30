<?php
include('database.php');
$login=$_COOKIE['user'];
$i=intval('0');
if(isset($_POST['password'])){$sql[$i]="UPDATE `users` SET `HASLO` = \'".md5($_POST['password'])."\' WHERE `LOGIN`='$login'";$i++;}
elseif(isset($_POST['telefon'])){$sql[$i]="UPDATE `users` SET `TELEFON` = \'".$_POST['telefon']."\' WHERE `LOGIN`='$login'";$i++;}
elseif(isset($_POST['email'])){$sql[$i]="UPDATE `users` SET `E_MAIL` = \'".$_POST['email']."\' WHERE `LOGIN`='$login'";$i++;}
elseif(isset($_POST['ulica'])){$sql[$i]="UPDATE `users` SET `ULICA` = \'".$_POST['ulica']."\' WHERE `LOGIN`='$login'";$i++;}
elseif(isset($_POST['budynek'])){$sql[$i]="UPDATE `users` SET `NUMER` = \'".$_POST['budynek']."\' WHERE `LOGIN`='$login'";$i++;}
elseif(isset($_POST['mieszkania'])){$sql[$i]="UPDATE `users` SET `MIESZKANIA` = \'".$_POST['mieszkania']."\' WHERE `LOGIN`='$login'";$i++;}
elseif(isset($_POST['miasto'])){$sql[$i]="UPDATE `users` SET `MIASTO` = \'".$_POST['miasto']."\' WHERE `LOGIN`='$login'";$i++;}
elseif(isset($_POST['kp'])){$sql[$i]="UPDATE `users` SET `KOD` = \'".$_POST['kp']."' WHERE `LOGIN`='$login'";$i++;}
elseif(isset($_POST['panstwo'])){$sql[$i]="UPDATE `users` SET `PANSTWO` =\'".$_POST['panstwo']"' WHERE `LOGIN`='$login'";$i++;}
else $sql[$i]=NULL;
$i=intval('0');
while($sql[$i])
  {mysqli_query($conn,$sql[$i]);$i++;}
mysqli_close($conn);
 ?>
