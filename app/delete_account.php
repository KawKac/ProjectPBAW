<?php
include('database.php');
$login=$_COOKIE['user'];
mysqli_query($conn,"DELETE FROM `users` WHERE `LOGIN`='$login'");
mysqli_close($conn);
header('Location: app/logout.php');
?>
