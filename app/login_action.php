<?php
	include('database.php');
	$login = $_POST['login'];
	$pass = md5($_POST['password']);
	$opposit_of_login=mysqli_query($conn,"SELECT `HASLO` FROM `users` WHERE `LOGIN=$login`");
	if($pass==$opposit_of_login)
	{
		$_SESSION['newsession']['newsession']=$login;
		$_SESSION['newsession']['chmode']=mysqli_query($conn,"SELECT `ID_CHMODE` FROM `user_chmode` WHERE `ID_USER`=$login");
		session_start();
		header("Location: ../");
	} else {
		$_SESSION['newsession']['info']=1;
		header("Location: ../");
	}
?>
