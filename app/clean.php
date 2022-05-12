<!DOCTYPE HTML>

<html>
	<head>
		<title>Hyperspace by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<?php
foreach (glob("assets/css/*.css") as $filename) echo "<link rel='stylesheet' href='$filename'>\n";
?>
	</head>
	<body class="is-preload">

			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#" id="0">Welcome</a></li>
							<li><a href="#" id="1">Zaloguj</a></li>
							<li><a href="#" id="2">Zarejestruj się</a></li>
							<li><a href="#" id="3">Sprawdź zamówienie</a></li>
						</ul>
					</nav>
				</div>
			</section>

			<div id="wrapper">
					<section class="wrapper style1 fullscreen fade-up" id="intro">
						<!-- Tutaj wszystkie inne pliki będą się wczytywać -->
					</section>
			</div>

			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						<li>Created by: Kacper Kawala</li>
					</ul>
				</div>
			</footer>

<?php
	foreach (glob("assets/js/*.js") as $filename)	echo "<script src='$filename'></script>\n";
?>
			<script type="text/javascript">
				$(document).ready(function(){
					$("#intro").load("app/home.php")
				});
			</script>
	</body>
</html>
