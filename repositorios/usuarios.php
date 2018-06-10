<?php

require_once('json.php');

define('USUARIOS_KEY', 'usuarios');
define('EMAIL_FIELD', 'email');
define('USERNAME_FIELD', 'username');


function guardarUsuario($datos)
{
  $usuarios = obtenerContenido(USUARIOS_KEY);

  $usuarios[] = $datos;

  guardarContenido(USUARIOS_KEY, $usuarios);
}

function buscarUsuario($campo, $valor)
{
  $usuarios = obtenerContenido(USUARIOS_KEY);
  /*var_dump($usuarios);*/
  foreach ($usuarios as $usuario) {
        if($usuario[$campo] == $valor){
          return $usuario;
        }
  }

return false;

}

 ?>
