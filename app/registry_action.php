<?php
	require ('./database.php');
	require ('./send_mail.php');
	error_reporting(E_ALL ^ E_NOTICE);
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
	if(!empty($name))
		if(!empty($vorname))
			if(!empty($login))
				if(!empty($password))
					if(!empty($ppassword))
						if(!empty($email))
							if(!empty($pemail))
								if($password==$ppassword)
									if($email==$pemail)
										if(intval($duplicate_email['total'])==0)
											if(intval($duplicate_login['total'])==0)
												registry_action($name,$vorname,$login,$password,$email,$conn);
											else {$error = 'Użytkownik o podanym loginie już istnieje';setcookie('message',$error,time()+1800,'/');setcookie('info','2',time()+1800,'/');header("Location:../");}
										else {$error = 'Użytkownik o podanym emailu już istnieje';setcookie('message',$error,time()+1800,'/');setcookie('info','2',time()+1800,'/');header("Location:../");}
									else {$error = 'Podałeś różne maile';setcookie('message',$error,time()+1800,'/');setcookie('info','2',time()+1800,'/');header("Location:../");}
								else {$error =  'Podałeś różne hasła';setcookie('message',$error,time()+1800,'/');setcookie('info','2',time()+1800,'/');header("Location:../");}
							else {$error =  'Proszę o powtórzenie Twojego e-maila';setcookie('message',$error,time()+1800,'/');setcookie('info','2',time()+1800,'/');header("Location:../");}
						else {$error =  'Proszę o podanie Twojego e-maila';setcookie('message',$error,time()+1800,'/');setcookie('info','2',time()+1800,'/');header("Location:../");}
					else {$error =  'Proszę o powtórzenie Twojego hasła';setcookie('message',$error,time()+1800,'/');setcookie('info','2',time()+1800,'/');header("Location:../");}
				else {$error =  'Proszę o podanie Twojego hasła';setcookie('message',$error,time()+1800,'/');setcookie('info','2',time()+1800,'/');header("Location:../");}
			else {$error =  'Proszę o podanie Twojego loginu';setcookie('message',$error,time()+1800,'/');setcookie('info','2',time()+1800,'/');header("Location:../");}
		else {$error =  'Proszę o podanie Twojego nazwiska';setcookie('message',$error,time()+1800,'/');setcookie('info','2',time()+1800,'/');header("Location:../");}
	else {$error =  'Proszę o podanie Twojego imienia';setcookie('message',$error,time()+1800,'/');setcookie('info','2',time()+1800,'/');header("Location:../");}

	function registry_action($name,$vorname,$login,$password,$email,$conn)
	{
		setcookie('info','3',time()+1800,'/');
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
