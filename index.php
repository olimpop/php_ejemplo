<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>informacion de prueba</title>
    </head>
    <body>
        
<?php
       // Obtener el primer carácter de un string
    $str = 'Esto es una prueba.';
    $primero = $str[0];
    echo $str;
    // Obtener el tercer carácter de un string
    $tercero = $str[2];

    // Obtener el último carácter de un string
    $str = 'Esto sigue siendo una prueba.';
    $último = $str[strlen($str)-1];
    echo $str;
    // Modificar el último carácter de un string
    $str = 'Mira el mar';
    $str[strlen($str)-1] = 'l';
    echo $str;
?>

    </body>
</html>