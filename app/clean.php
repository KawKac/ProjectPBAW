<!DOCTYPE HTML>
<html>
	<head>
		<title>Hyperspace by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<?php
foreach (glob("assets/css/*.css") as $filename) echo "<link rel='stylesheet' href='$filename'>\n";
foreach (glob("assets/js/*.js") as $filename)	if(!($filename=="assets/js/main.js")) echo "<script src='$filename'></script>\n";
?>
	</head>
	<body class="is-preload">

			<section id="sidebar">
				<?php
					include('check.php');
					if(isset($_SESSION['newsession']))
						check($_SESSION['newsession']);
					else
						check();
				?>
			</section>

			<div id="wrapper">
					<section class="wrapper style1 fullscreen fade-up" id="intro">
						<?php
						if(!(isset($GLOBAL['info'])))$GLOBAL['info']=0;
						echo $GLOBAL['info'];
						switch ($GLOBAL['info']) {
							case 0:
								include('home.php');
								break;
							case 1:
								include('login.php');
								break;
							case 2:
								include('registry.php');
								break;
							case 3:
								include('nh.php');
								break;
							default:
								include('home.php');
								break;
						}
						?>
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
			<script src="assets/js/main.js"></script>
	</body>
</html>
