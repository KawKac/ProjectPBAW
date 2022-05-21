<?php
	include('database.php');
	include('./check.php');
	function login($login, $pass)
	{
		$opposit_of_login=mysqli_query($conn,"SELECT `HASLO` FROM `users` WHERE `LOGIN=$login`");
    if($opposite_of_login == $pass)
			{
				echo ('<div class="alert alert-danger" role="alert">
						Zły login lub hasło
					</div>');
					echo `<script>$("#intro").html("");
				  $("#intro").load("home.php");</script>`;
			}
				elseif ($duplicate.equals($pass))
				{
					echo ('<script type="text/javascript">
					$(`
						<div class="alert alert-success" role="alert">
							Pomyślnie zalogowano!
						</div>
					`).appendTo(body);');
					$default=mysqli_query($conn,"SELECT `ID_CHMODE` FROM `users_chmode` WHERE `ID_USERS`=$login");
					session_start();
					$_SESSION['newsession']=$default;
					header("Location:../index.php");
				}
		else
    {
			header("Location:../index.php");
			?>
			<script type="text/javascript">
			$(`
				<div class="alert alert-danger" role="alert">
					Zły login lub hasło
				</div>
			`).appendTo(body);
			</script>
      <?php
		}
		mysqli_close($conn);
	}
?>
