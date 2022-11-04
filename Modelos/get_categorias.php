
<?php
include_once __DIR__ . "/Modelos/conectaBD.php";

function consultaCategorias($dbconn)
{
    $result = pg_query($dbconn, "select name from categorias");
    $array_categorias =pg_fetch_all($result);
    return $array_categorias;
}
?>

