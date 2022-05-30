<?php
	include('database.php');
	$login = $_POST['login'];
	$pass = md5($_POST['password']);
	$opposit_of_login=mysqli_fetch_array(mysqli_query($conn,"SELECT `HASLO` FROM `users` WHERE `LOGIN` LIKE '$login'"));
	if($pass==$opposit_of_login['HASLO'])
	{
		$chmode=mysqli_fetch_array(mysqli_query($conn,"SELECT `ID_CHMODE` FROM `users_chmode` WHERE `ID_USERS` LIKE '$login'"));
		setcookie("chmode",null);
		setcookie('user',null);
		setcookie('info',null);
		setcookie("chmode",intval($chmode['ID_CHMODE']),time()+1800);
		setcookie('user',$login,time()+1800);
		setcookie('info','0',time()+1800);
		print_r($_COOKIE);
		session_start();
		header("Location: ../");
	} else {
		setcookie('info','1',time()+1800);
		header("Location: ../");
	}
	mysqli_close($conn);
?>
