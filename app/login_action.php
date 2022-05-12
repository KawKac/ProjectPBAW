<?php
	include 'database.php';
	session_start();
	if(isset($_POST['login'])&&isset($_POST['pass'])){
		$login=$_POST['login'];
    $pass=$md5($_POST['pass']);

    if(mysql_query($conn)&&mysql_query(`SELECT CASE WHEN EXISTS (select * from users where login='$login') THEN 'TRUE' ELSE 'FALSE' END;`))
		  $duplicate=mysql_query($conn,"select haslo from users where login='$login';");

    elseif ($duplicate.equals($pass))
      session_start();

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
