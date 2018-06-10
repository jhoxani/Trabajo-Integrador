<?php
  $pageTitle = 'Iniciar Sesion';
  $css= '';
  require_once('funciones/validaciones.php');
  require_once('funciones/auth.php');

  include_once('componentes/header.php');
  session_start();
  //var_dump($_SESSION);


    if (isset($_SESSION['user']) && (!empty($_SESSION))) {
      $cookie = $_SESSION['user'];
      }else{
        header("Location: iniciarSesion.php");
      }
    //var_dump($usuario);//
?>




<!--Queda:

<br><br>

<br><br>

<ul> Sprint 1
  <li> Log in lleva al registro (abri tu cuenta). Es para abrir la sesion. LISTO
  <li> Sign in lleva al logueo (iniciar sesion). Es para registrarse. LISTO
  <li> Mejorar el scroll horizontal en mobile (FAQ). LISTO
  <li> Se podria usar el logo como link al home.LISTO
  <li> Generar contenido para que no sobre espacio hasta abajo del navegador.LISTO
</ul>

<br><br>
<ul> Sprint 2
<li> *-Registracion
  <li> -Guardar Resultados en JSON . LISTO
  <li> -Validacion del lado del servidor . LISTO
  <li> -Persistencia de datos .(revisar) CASI LISTO
  <li> - subir foto de perfil . FALTA (que el archivo sea img) mejorar el formulario
<br><br>
<li> *Login
  <li> - que funcione el Login LISTP
  <li> - debe ser valido desde el servidor LISTO
  <li> - datos invalidos : persistencia en panatalla
  <li> - opcion de "recordar usuario"
<br><br>
  <li> *En esta pagina
  <li> - si no esta logueado , mostrar el formulario
  <li> - opcion parqa desloguarse
  <li> -opcion de me olvide la contraena
  <li> -editar informacion del usuario
<ul> -->


    <?php
      include_once('componentes/footer.php');
    ?>
