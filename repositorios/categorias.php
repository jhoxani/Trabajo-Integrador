<?php

define('CATEGORIAS_KEY', 'categorias');

function listCategorias(){
  $categoriasJson = file_get_content('datos/' . CATEGORIAS_KEY .'.json' );

  $categorias = json_decode($categoriasJson, true);

  return $categorias[CATEGORIAS_KEY];
}

 ?>
