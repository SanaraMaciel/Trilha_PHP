<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // criar Procedure que some 2 procedimentos
        
        function soma($a, $b)
        {
            $s = $a+$b;
           echo"<p> O Resultado da soma é: $s</p>";
        }
        //chamada da função
        soma(3,3);
        soma(8,4);
        $x=9;
        $y=5;
        soma($x,$y);
        ?>
    </body>
</html>
