<!DOCTYPE html>
<html>
<head>
	<title>SMART ANNECY</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>
			HOW SMART IS ANNECY
		</h1>
	</header>
		<section>
			<div id="Barre"></div>
			<div id="Explication"></div>
			<div id="Menu">
				<form id="Treat" method="post" action="">
					<?php
						$Menu=array("Home Page","Pollution","Free Wifi","Recycling","Food","Education");
						foreach ($Menu as $key) {
							echo "<ul><li><input type=\"submit\" value=\"".$key."\" name=\"Menu\"></li></ul>";
						}
					?>
					</form>
				</div>
			<div id="Contenu">
				<?php
					if(!empty($_POST)){
						include_once("treat.php");
						echo "<div id=\"php\">PATATE</div>";
					}
				?>
			</div>
		</section>
	<footer>
		<div id="Bas">
			<strong>
				&copy; 2018 - Antoine Langlois - Hugo Daviet - Alexandre Wets - Jude Molissa - Henry Bergström
			</strong>
		</div>
	</footer>
</body>
</html>