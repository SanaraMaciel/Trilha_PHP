<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
        <title></title>
    </head>
    <body>
        <div>
            <H2>Operadores de Atribuição</H2>
            <?php
            $a = $_GET["a"];
            $b = $_GET["b"];
            $c;
           //Adição
            $a += $b;
            echo "$a<br/>";
           //Subtração
            $a -= $b;
            echo "$a<br/>";
           //Multiplicação
            $a *= $b;
            echo "$a<br/>";
           //Divisão
            $a /= $b;
            echo "$a<br/>";
           //Módulo 
            $a %= $b;
            echo "$a<br/>";
           //Concatenação 
            $a .= $b;
           echo "$a<br/>";
            ?>
        </div>
    </body>
</html>
