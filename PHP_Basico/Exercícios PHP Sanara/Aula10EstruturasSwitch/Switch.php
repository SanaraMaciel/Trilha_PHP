<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $op = isset($_GET["op"]) ? $_GET["op"] : 1;

        switch ($op) {
            case 1:
                $r = $n * 2;
                break;
            case 2 :
                $r = $n ^ 3;
                break;
            case 3 :
                $r = sqrt($n); // ou $n ^ 1/2;
        }
        echo "O resultado da operação solicitada foi <span class='foco'>$r</span>";
        ?>
        <br/>
        <a href="Switch.html">Voltar</a>
    </body>
</html>
