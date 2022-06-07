<?php
session_start();
include('database.php');
$login=$_SESSION['user'];
$i=intval('0');
if(!empty($_POST['password'])&&!empty($_POST['ppassword'])&&($_POST['password']==$_POST['ppassword'])){$sql[$i]="UPDATE `users` SET `HASLO` = '".md5($_POST['password'])."' WHERE `LOGIN`='$login'";$i++;}
if(!empty($_POST['telefon'])){$sql[$i]="UPDATE `users` SET `TELEFON` = '".$_POST['telefon']."' WHERE `LOGIN`='$login'";$i++;}
if(!empty($_POST['email'])){$sql[$i]="UPDATE `users` SET `E_MAIL` = '".$_POST['email']."' WHERE `LOGIN`='$login'";$i++;}
if(!empty($_POST['ulica'])){$sql[$i]="UPDATE `users` SET `ULICA` = '".$_POST['ulica']."' WHERE `LOGIN`='$login'";$i++;}
if(!empty($_POST['budynek'])){$sql[$i]="UPDATE `users` SET `NUMER` = '".$_POST['budynek']."' WHERE `LOGIN`='$login'";$i++;}
if(!empty($_POST['mieszkania'])){$sql[$i]="UPDATE `users` SET `MIESZKANIA` = '".$_POST['mieszkania']."' WHERE `LOGIN`='$login'";$i++;}
if(!empty($_POST['miasto'])){$sql[$i]="UPDATE `users` SET `MIASTO` = '".$_POST['miasto']."' WHERE `LOGIN`='$login'";$i++;}
if(!empty($_POST['kp'])){$sql[$i]="UPDATE `users` SET `KOD` = '".$_POST['kp']."' WHERE `LOGIN`='$login'";$i++;}
if(!empty($_POST['panstwo'])){$sql[$i]="UPDATE `users` SET `PANSTWO` ='".$_POST['panstwo']."' WHERE `LOGIN`='$login'";$i++;}
$sql[$i]=FALSE;
$i=intval('0');
while($sql[$i])
{echo $sql[$i];mysqli_query($conn,$sql[$i]);$i++;}
mysqli_close($conn);
setcookie('info','4',time()+1800,'/');
header("Location: ../")
 ?> 
