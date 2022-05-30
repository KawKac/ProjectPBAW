<?php
	include('database.php');
	$login = $_POST['login'];
	$pass = md5($_POST['password']);
	$opposit_of_login=mysqli_query($conn,"SELECT `HASLO` FROM `users` WHERE `LOGIN=$login`");
	if($pass==$opposit_of_login)
	{
		$chmode=mysqli_query($conn,"SELECT `ID_CHMODE` FROM `user_chmode` WHERE `ID_USER`=$login");
		setcookie('chmode',$chmode,time()+1800);
		setcookie('user',$login,time()+1800);
		setcookie('info',0,time()+1800);
		session_start();
		header("Location: ../");
	} else {
		setcookie('info',1,time()+1800);
		header("Location: ../");
	}
?>
