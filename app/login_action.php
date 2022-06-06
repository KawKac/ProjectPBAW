<?php
	include('database.php');
	$login = $_POST['login'];
	$pass = md5($_POST['password']);
	$opposit_of_login=mysqli_fetch_array(mysqli_query($conn,"SELECT `HASLO` FROM `users` WHERE `LOGIN` LIKE '$login'"));
	if($pass==$opposit_of_login['HASLO'])
	{
		session_start();
		$chmode=mysqli_fetch_array(mysqli_query($conn,"SELECT `ID_CHMODE` FROM `users_chmode` WHERE `ID_USERS` LIKE '$login'"));
		$_SESSION['chmode']=intval($chmode['ID_CHMODE']);
		$_SESSION['user']=$login;
		setcookie('info','0',time()+1800,'/');
		header("Location: ../");
	} else {
		setcookie('message','Zły login lub hasło',time()+1800,'/');
		setcookie('info','1',time()+1800,'/');
		header("Location: ../");
	}
	mysqli_close($conn);
?>
