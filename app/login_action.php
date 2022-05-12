<?php
	include 'database.php';
	session_start();
	if($_POST['type']==1){
		$login=$_POST['login'];
    $pass=$_POST['pass'];
    $pass=$.md5($pass);

    if(mysqli_query($conn),"SELECT CASE WHEN EXISTS (select * from users where login='$login') THEN 'TRUE' ELSE 'FALSE' END")
		  $duplicate=mysqli_query($conn,"select haslo from users where login='$login'");

    elseif ($duplicate.equals($pass))
      $_SESSION.session_start();

		else
    {
      ?>
        $(`
          <div class="alert alert-danger" role="alert">
            Zły login lub hasło
          </div>
        `).appendTo(body);
      <?php
		}
		mysqli_close($conn);
	}
?>
