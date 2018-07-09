<?php
require_once('global.php');
$pageTitle = 'Home';
$css= '<link rel="stylesheet" href="css/css.css">';
include_once('conexion.php');

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

		<?php 
		
		$consulta = $db->prepare("SELECT * FROM productos LIMIT 20 ");
			//	$id = 1;
			//$title = "Avatar";
			//	$consulta->bindParam(':id', $id, PDO::PARAM_INT);
			//	$consulta->bindParam(':title', $title, PDO::PARAM_STR);
		
				$consulta->execute();
				$productos = $consulta->fetchAll(PDO::FETCH_ASSOC);
		
	//	var_dump($productos);

		foreach ($productos as $producto) 
		{?>
			<div class="producto">
				<img src="images/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
				<h2><?php echo $producto['nombre']; ?></h2>
				<h2><?php echo $producto['precio']; ?></h2>
			</div>
		<?php }
		?>
		

		</div>
    <?php
      include_once('componentes/footer.php');
    ?>
	</div>
</body>
</html>
