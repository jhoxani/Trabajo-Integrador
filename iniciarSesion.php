<?php
require_once('global.php');
$pageTitle = 'Iniciar Sesion';
$css= '<link rel="stylesheet" href="css/estlilosForms.css" />';
 ?>

<?php

require_once('funciones/validaciones.php');
 require_once('funciones/auth.php');

$errores = [];

if ($_POST) {

    $errores = validarLogin($_POST);

    if (!$errores) {

        $errores = loguear($_POST);

        if (!$errores) {
            header('location: bienvenido.php');
            exit;
        }
    }

}

?>


    <?php
        include_once('componentes/header.php');
    ?>

    <div class="form-container">

      <div class="row">
          <?php
            if ($errores) {
          ?>
              <div class="alert">
                  <div><strong>Error!</strong></div>
                  <ul>
                      <?php
                      foreach($errores as $error) {
                      ?>
                          <li><?php echo $error ?></li>
                      <?php } ?>
                  </ul>
              </div>
          <?php } ?>

      <h1>Iniciar Sesion</h1>
      <form action="" method="post">
        <label for="email"></label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo ($_POST['email'] ?? '') ?>" placeholder="Ingrese Email">
        <label for="contrasena"></label>
        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese Contraseña">
        <button type="submit">Iniciar Sesion</button>
      </form>
    </div>

    <?php
			include_once('componentes/header.php');
		?>
  </body>
</html>
