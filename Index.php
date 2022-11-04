<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaki Moda</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/ajax.js"></script>
    <link rel="stylesheet" type="text/css" href="/CSS/estil.css?version=50">
</head>
<?php
    
$accio = $_GET['accio'] ?? NULL;
switch ($accio) {
    default:
        include __DIR__.'/resource_listar_categorias.php';
        break; }

?>  