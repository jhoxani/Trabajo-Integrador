<?php

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta chatset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	  <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Signika" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css" />
    <link rel="stylesheet" href="css/estlilosForms.css" />
    <link rel="stylesheet" href="css/mediaQueriesForms.css" />
    <title>Iniciar Sesion</title>
  </head>
  <body>

    <div class="container">
      <?php
        include_once('header.php');
      ?>
    </div>
    <div class="form-container">
      <h1>Iniciar Sesion</h1>
      <form>
        <input type="text" placeholder="Nombre de usuario o Email" />
        <input type="password" placeholder="Contrasena" />
        <button type="button">Iniciar Sesion</button>
      </form>
    </div>

    <?php
			include_once('header.php');
		?>

  </body>
</html>
