<?php
    require_once('Triangulo.php');
    $base = $_GET['base'];
    $alt = $_GET['altura'];
    $triangulo2 = new triangulo($alt, $base);
    $area = $triangulo2->area();
    $triangulo2->imprime();
    echo $area;
?>