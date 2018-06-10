<?php
  require_once('global.php');
  require_once('funciones\validaciones.php');
  require_once('funciones\auth.php');
  require_once('repositorios\categorias.php');

  $errores = [];


  if ($_POST) {
    $errores = validarRegistro($_POST);

    if (!$errores){
       $errores = registrar($_POST);

       if (!$_errores){
         header('location:bienvenido.php');
         exit;
       }
    }
}
 ?>

 <?php

 $pageTitle = 'Crear Cuenta';
 $css=' <link rel="stylesheet" href="css/estlilosForms.css" />';

?>
<?php
  include_once('componentes/header.php');
?>
<div class="row">
  <?php

      if($errores){
         ?>
            <div class="alert">
              <div><strong>Error!</strong></div>
              <ul>
                <?php
                  foreach ($errores as $error) {
                    ?>
                      <li><?php echo $error ?></li>
                  <?php  } ?>
              </ul>
            </div>
            <?php  } ?>

  <div class="form-container">
      <h1>Abri tu cuenta</h1>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="inline-fields">

            <label for="nombre"></label>
            <input placeholder="Ingrese Nombre" type="text" class="abc" id="nombre" name="nombre"
            value="<?php echo ($_POST['username'] ?? ''); ?>"/>

          <label for="apellido"></label>
          <input type="text" placeholder="Apellido" class="abc" id="apellido" name="apellido" value="<?php echo ($_POST['apellido'] ?? ''); ?>"  />

        </div>

        <label for="email"></label>
        <input type="text" class="abc" placeholder="Email" id="email" name="email" value="<?php echo ($_POST['email'] ?? '') ?>"  />

        <label for="contrasena"></label>
        <input type="password" class="abc" placeholder="Contrasena" id="contrasena" name="contrasena" />

        <label for="contrasena-confirm"></label>
        <input type="password" class="abc" placeholder="Ingrese Confirmacion de Contrasena" id="contrasena-confirm" name="contrasena_confirm" />

        <input type="file" name="avatar" />

        <input type="number" placeholder="Edad" />

        <label> <input type="checkbox" id="chk-terminos" name="terminos"> Acepto los términos y condiciones </label>

          <input type="submit" class="btn btn-info" value="Registrarme"/>

      </form>
    </div>

    <?php
      include_once('componentes/header.php');
    ?>

  </body>
</html>
