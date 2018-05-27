<?php

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Baires Things</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
	<link rel="stylesheet" href="css/css.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two|Signika" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container">
		<?php
			include_once('header.php');
		?>
		<main>
			<div class="banner"><img src="images/banner1.png" alt=""></div>
		</main>
		<div class="separador">
			<h2 class="a">Productos Destacados</h2>
		</div>
		<div class="productos-destacados">
			<div class="producto">
				<img src="images/macbook.jpg" alt="">
				<h2>Macbook Air 13'</h2>
				<h2>$25,999</h2>
			</div>
			<div class="producto">
				<img src="images/macbook.jpg" alt="">
				<h2>Macbook Air 13'</h2>
				<h2>$25,999</h2>
			</div>
			<div class="producto">
				<img src="images/macbook.jpg" alt="">
				<h2>Macbook Air 13'</h2>
				<h2>$25,999</h2>
			</div>
			<div class="producto">
				<img src="images/macbook.jpg" alt="">
				<h2>Macbook Air 13'</h2>
				<h2>$25,999</h2>
			</div>
		</div>
    <?php
      include_once('footer.php');
    ?>
	</div>
</body>
</html>
