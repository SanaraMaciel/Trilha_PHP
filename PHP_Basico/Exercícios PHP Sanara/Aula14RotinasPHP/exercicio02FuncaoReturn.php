<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        // criar Procedure que some 2 procedimentos

        function soma($a, $b) {
            $s = $a + $b;
            return $s;
        }

        //ou apenas retornando a expressão
        function soma2($a, $b) {
           return $a + $b;
        }

        //chamada da função
        $x = 3;
        $y = 4;
        $res = soma($x, $y);

        echo"<p> O Resultado da soma é: $res</p>";
        ?>
    </body>