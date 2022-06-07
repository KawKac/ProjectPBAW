<?php
include('database.php');
$login=$_SESSION['user'];
mysqli_query($conn,"UPDATE `users` SET `AKTYWNE`='0' WHERE `LOGIN`='$login'");
mysqli_close($conn);
header('Location: app/logout.php');
?>
