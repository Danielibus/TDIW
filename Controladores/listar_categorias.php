<?php
include_once __DIR__ . "/modelos/conectaBD.php";
include_once __DIR__ ."/../modelos/get_cateorias.php";
$connection=connectaBD();
$resultat_categorias = consultaCategorias($connection);
include_once __DIR__ . "/vistas/listar_categorias.php";
