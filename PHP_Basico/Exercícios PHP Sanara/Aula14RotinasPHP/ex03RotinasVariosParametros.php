<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        // Realizar soma com múltiplos parâmetros
         
        function soma() {
            $p = func_get_args();
            $t = func_num_args();
            $s =0;
            for ($i=0; $i < $t; $i++) {
                $s = $s + $p[$i];
            }
            return $s;
        }

        $res = soma(3, 5,9,10,5);
        
        echo"<p> O Resultado da soma é: $res </p>";
        ?>
    </body>
