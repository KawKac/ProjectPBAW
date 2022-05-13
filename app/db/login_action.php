<?php
	include('database.php');
	function login($login, $pass)
	{
    if(mysql_query($conn)&&mysql_query(`SELECT CASE WHEN EXISTS (select * from users where login='$login') THEN 'TRUE' ELSE 'FALSE' END;`))
			{
				$duplicate=mysql_query($conn,"select haslo from users where login='$login';");
				echo ('<script type="text/javascript">
				$(`
					<div class="alert alert-danger" role="alert">
						Błąd podczas logowania
					</div>
				`).appendTo(body);');
			}
				if ($duplicate.equals($pass))
				{
					echo ('<script type="text/javascript">
					$(`
						<div class="alert alert-success" role="alert">
							Pomyślnie zalogowano!
						</div>
					`).appendTo(body);');

					session_start();
				}
				else {  }
		else
    {
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
