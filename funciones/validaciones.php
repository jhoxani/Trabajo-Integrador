<?php
require_once('repositorios/usuarios.php');

function validarRegistro($datos)
{
    $errores = [];

    if (trim($datos['nombre']) == '') {
        $errores['nombre'] = 'Debe ingresar su Nombre';
    }

    if (trim($datos['apellido']) == '') {
        $errores['apellido'] = 'Debe ingresar su Apellido';
    }


    if (strlen($datos['contrasena']) < 4) {
        $errores['contrasena'] = 'La contraseña debe tener al menos 4 caracteres';
    } elseif ($datos['contrasena'] != $datos['contrasena_confirm']) {
        $errores['contrasena_confirm'] = 'La Contraseña y su confirmación deben coincidir';
    }


    if ($_FILES['avatar']['error'] == UPLOAD_ERR_NO_FILE) {
        $errores['avatar'] = 'Debe cargar una imagen de perfil';
    }

    if (!isset($datos['terminos'])) {
        $errores['terminos'] = 'Debe aceptar los Términos y Condiciones';
    }

    if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'Debe ingresar un Email válido';

        
    }elseif (buscarUsuario(EMAIL_FIELD, $datos['email'])) {
       $errores['email'] = 'El Email ingresado ya existe';
    }

    
   


    return $errores;
}

function validarLogin($datos)
{
    $arrayDeErrores = [];

  if (empty($datos['contrasena'])) {
        $arrayDeErrores[] = 'Ingrese un password';
    }

    return $arrayDeErrores;
}


