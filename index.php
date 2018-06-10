<?php
require_once('global.php');
$pageTitle = 'Index';
$css= '<link rel="stylesheet" href="css/css.css">';

 ?>

		<?php
			include_once('componentes/header.php');
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
      <div class="separador">
        <img src="images/arservicios.jpg" alt="">
      </div>
		</div>
    <?php
      include_once('componentes/footer.php');
    ?>
	</div>
</body>
</html>
