<?php
	require ('./database.php');
	require ('./send_mail.php');

	$name = $_POST['name'];
	$login = $_POST['login'];
	$email = $_POST['email'];
	$vorname=$_POST['vorname'];
	$password=md5($_POST['password']);
	$ppassword=md5($_POST['ppassword']);
	$pemail=$_POST['pemail'];
	$error='';
		$duplicate_email=mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS `total` FROM `users` WHERE E_MAIL='$email'"));
		$duplicate_login=mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS `total` FROM `users` WHERE LOGIN='$login'"));
		if(isset($name))
			if(isset($vorname))
				if(isset($login))
					if(isset($password))
						if(isset($ppassword))
							if(isset($email))
								if(isset($pemail))
									if($password==$ppassword)
										if($email==$pemail)
											if(intval($duplicate_email['total'])==0)
												if(intval($duplicate_login['total'])==0)
													registry_action($name,$vorname,$login,$password,$email,$conn);
												else {$error = '<script>alert("Użytkownik o podanym loginie już istnieje");$("#intro").load("app/pages/registry.php");</script>';}
											else {$error = '<script>alert("Użytkownik o podanym emailu już istnieje");$("#intro").load("app/pages/registry.php");</script>';}
										else {$error = '<script>alert("Podałeś różne maile");$("#intro").load("app/pages/registry.php");</script>';}
									else {$error =  '<script>alert("Podałeś różne hasła");$("#intro").load("app/pages/registry.php");</script>';}
								else {$error =  '<script>alert("Proszę o powtórzenie Twojego e-maila");<$("#intro").load("app/pages/registry.php");/script>';}
							else {$error =  '<script>alert("Proszę o podanie Twojego e-maila");$("#intro").load("app/pages/registry.php");</script>';}
						else {$error =  '<script>alert("Proszę o powtórzenie Twojego hasła");$("#intro").load("app/pages/registry.php");</script>';}
					else {$error =  '<script>alert("Proszę o podanie Twojego hasła");$("#intro").load("app/pages/registry.php");</script>';}
				else {$error =  '<script>alert("Proszę o podanie Twojego loginu");$("#intro").load("app/pages/registry.php");</script>';}
			else {$error =  '<script>alert("Proszę o podanie Twojego nazwiska");$("#intro").load("app/pages/registry.php");</script>';}
		else {$error =  '<script>alert("Proszę o podanie Twojego imienia");$("#intro").load("app/pages/registry.php");</script>';}
		echo $error;

	function registry_action($name,$vorname,$login,$password,$email,$conn)
	{
		$sql = "SET GLOBAL FOREIGN_KEY_CHECKS=0";
		mysqli_query($conn,$sql);
		$sql = "INSERT INTO `users`(`IMIE`, `NAZWISKO`, `LOGIN`, `HASLO`, `E_MAIL`) VALUES ('$name','$vorname','$login','$password','$email')";
		mysqli_query($conn,$sql);
		$sql = "INSERT INTO `users_chmode`(`ID_USERS`, `ID_CHMODE`) VALUES ('$login', 1)";
		mysqli_query($conn,$sql);
		header("Location:../index.php");
		$body=file_get_contents("../script/message_registry.html",TRUE);
		$subject="Dziękujemy za rejestrację";
		send_mail($email, $subject, $body);
	}
	mysqli_close($conn);
?>
