<?php  

?>

<!DOCTYPE html>
<html>
  <head>
  	<title><?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
  	<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
  	<link href="https://fonts.googleapis.com/css?family=Lobster+Two|Signika" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">;
    <?php echo $css; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

    <body>
    	<div class="container">
            <header>
                <div class="header">
                  <a href="index.php"><h1>Baires Things</h1></a>
                  <form action="" method="post" class="asd">
                    <input class="border-input" type="text" name="busqueda">
                    <label for="busqueda"><i class="fas fa-search"></i></label>
                  </form>
                </div>
                <nav>
                  <div class="nav">
                    <a href="index.php" class="a-nav">inicio</a>
                    <a href="faq.php" class="a-nav">faq</a>
                    <a href="#" class="a-nav">productos</a>
                  </div>
                <?php if(isset($_SESSION)){   ?>
                  <div class="login">
                    <a href="crearCuenta.php" class="a-nav">sing in</a>
                    <a href="iniciarSesion.php" class="a-nav">log in</a>
                    <a href="" class="a-nav"><i class="fas fa-shopping-cart hover"></i></a>
                  </div>
                <?php }else{ ?>
                  <div class="login">
                    <a href="logout.php" class="a-nav">Logout</a>
                    <a href="miPerfil.php" class="a-nav">Mi Perfil</a>
                  </div>
                <?php } ?>
                </nav>
            </header>
