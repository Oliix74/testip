<!DOCTYPE html>
<html>
<head>
	<title>Mon site Web</title>
</head>
<body>
	<h1>Bienvenue sur mon site Web</h1>
	<p>Votre adresse IP est : 
		<?php
		$ip = $_SERVER['REMOTE_ADDR'];
		echo $ip;
		?>
	</p>
</body>
</html>
