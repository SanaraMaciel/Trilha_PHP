<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        //passagem de parâmetros por valor
        function teste($x) {
            $x += 2;
            echo "<br/>o valor de X e: $x";
        }

        $a = 3;

        //passagem de parâmetros por referência
        function teste2(&$x) {
            $x += 2;
            echo "<br/>o valor de X e: $x";
        }

        $a = 3;

        //chamando a função

        print"<b>Referência<b>";
        teste($a);
        echo "<br/>o valor de A é $a";
        echo "<br/>";
        echo "<br/>";
        print"<b>Valor:</b>";
        teste2($a);
        echo "<br/>o valor de A é $a";
        ?>
    </body>
</html>
