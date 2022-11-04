 <?php
require_once __DIR__ . '/Modelos/conectaBD.php';
require_once __DIR__ . '/Modelos/consultaImagenPortada.php'; //falta crear //imagenes que irán saliendo en la portada 
$connexion=conectaBD();
$res=consultaPortada($connexion),
require_once __DIR__ . '/Vistas/mostrarPortada.php' //fata crear
?>