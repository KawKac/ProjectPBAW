<?php
	include ('database.php');
	include ('send_mail.php');
	function registry_action_validation($name,$vorname,$login,$password,$ppassword,$email,$pemail)
	{
		$duplicate_email=mysqli_query($conn,"select * from users where email='$email'");
		$duplicate_login=mysqli_query($conn,"select * from users where login='$login'");
		if(isset($name))
			if(isset($vorname))
				if(isset($login))
					if(isset($password))
						if(isset($ppassword))
							if(isset($email))
								if(isset($pemail))
									if($password==$ppasword)
										if($email==$pemail)
											if(!(mysqli_num_rows($duplicate_email)>0))
												if(!(mysqli_num_rows($duplicate_login)>0))
													registry_action($name,$vorname,$login,$password,$email);
												else echo `<script>alert("Użytkownik o podanym loginie już istnieje");</script>`;
											else echo `<script>alert("Użytkownik o podanym emailu już istnieje");</script>`;
										else echo `<script>alert("Podałeś różne maile");</script>`;
									else echo `<script>alert("Podałeś różne hasła");</script>`;
								else echo `<script>alert("Proszę o powtórzenie Twojego e-maila");</script>`;
							else echo `<script>alert("Proszę o podanie Twojego e-maila");</script>`;
						else echo `<script>alert("Proszę o powtórzenie Twojego hasła");</script>`;
					else echo `<script>alert("Proszę o podanie Twojego hasła");</script>`;
				else echo `<script>alert("Proszę o podanie Twojego loginu");</script>`;
			else echo `<script>alert("Proszę o podanie Twojego nazwiska");</script>`;
		else echo `<script>alert("Proszę o podanie Twojego imienia");</script>`;
	}

	function registry_action($name,$vorname,$login,$password,$email)
	{
		$sql = "INSERT INTO `users`(`IMIE`, `NAZWISKO`, `LOGIN`, `HASLO`, `E_MAIL`) VALUES (`$name`,`$vorname`,`$login`,`$password`,`$email`)";
		mysqli_query($conn,$sql);
		$sql = "INSERT INTO `users_chmode`(`ID_USERS`, `ID_CHMODE`) VALUES (`$login`,1)";
		mysqli_query($conn,$sql);
		$body=file_get_contents("../script/message_registry.php",TRUE);
		$subject="Dziękujemy za rejestrację";
		send_mail($email, $subject, $body);
		echo `<script>alert("Dziękujemy za rejestrację, teraz możesz zalogować się na swoje konto");</script>`;
	}
	mysqli_close();
?>
