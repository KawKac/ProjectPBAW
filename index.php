<?php
	if(!(isset($_COOKIE['info'])))setcookie('info','0',time()+1800);
	if(!(isset($_COOKIE['chmode'])))setcookie('chmode','0',time()+1800);
	if(!(isset($_COOKIE['user'])))setcookie('user','0',time()+1800);
	include ('app/clean.php');
 ?>
