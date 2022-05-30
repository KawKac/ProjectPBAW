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
											else {$error = '<script>alert("Użytkownik o podanym loginie już istnieje");header("Location:../");$("#intro").load("registry.php");</script>';header("Location:../");setcookie('info','2',time()+1800);}
										else {$error = '<script>alert("Użytkownik o podanym emailu już istnieje");header("Location:../");$("#intro").load("registry.php");</script>';header("Location:../");setcookie('info','2',time()+1800);}
									else {$error = '<script>alert("Podałeś różne maile");header("Location:../");$("#intro").load("registry.php");</script>';header("Location:../");setcookie('info','2',time()+1800);}
								else {$error =  '<script>alert("Podałeś różne hasła");header("Location:../");$("#intro").load("registry.php");</script>';header("Location:../");setcookie('info','2',time()+1800);}
							else {$error =  '<script>alert("Proszę o powtórzenie Twojego e-maila");header("Location:../");<$("#intro").load("registry.php");/script>';header("Location:../");setcookie('info','2',time()+1800);}
						else {$error =  '<script>alert("Proszę o podanie Twojego e-maila");header("Location:../");$("#intro").load("registry.php");</script>';header("Location:../");setcookie('info','2',time()+1800);}
					else {$error =  '<script>alert("Proszę o powtórzenie Twojego hasła");header("Location:../");$("#intro").load("registry.php");</script>';header("Location:../");setcookie('info','2',time()+1800);}
				else {$error =  '<script>alert("Proszę o podanie Twojego hasła");header("Location:../");$("#intro").load("registry.php");</script>';header("Location:../");setcookie('info','2',time()+1800);}
			else {$error =  '<script>alert("Proszę o podanie Twojego loginu");header("Location:../");$("#intro").load("registry.php");</script>';header("Location:../");setcookie('info','2',time()+1800);}
		else {$error =  '<script>alert("Proszę o podanie Twojego nazwiska");header("Location:../");$("#intro").load("registry.php");</script>';header("Location:../");setcookie('info','2',time()+1800);}
	else {$error =  '<script>alert("Proszę o podanie Twojego imienia");header("Location:../");$("#intro").load("registry.php");</script>';header("Location:../");setcookie('info','2',time()+1800);}
	echo $error;

	function registry_action($name,$vorname,$login,$password,$email,$conn)
	{
		setcookie('info','3',time()+1800);
		$sql = "INSERT INTO `users_chmode`(`ID_USERS`, `ID_CHMODE`) VALUES ('$login', 1)";
		mysqli_query($conn,$sql);
		$sql = "INSERT INTO `users`(`IMIE`, `NAZWISKO`, `LOGIN`, `HASLO`, `E_MAIL`) VALUES ('$name','$vorname','$login','$password','$email')";
		mysqli_query($conn,$sql);
		header("Location:../");
		$body=file_get_contents("message_registry.html",TRUE);
		$subject="Dziękujemy za rejestrację";
		send_mail($email, $subject, $body);
	}
	mysqli_close($conn);
?>
