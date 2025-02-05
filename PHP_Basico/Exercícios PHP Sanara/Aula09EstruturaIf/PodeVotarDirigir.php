<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;



        if ($i >= 18) {
            $v = "Já pode Votar!";
            $d = "Já pode Dirigir!";
        } else {
            $v = "Não pode Votar!";
            $d = "Não pode Dirigir!";
        }
        echo "Você nasceu em  $a e terá $i anos !";

        echo "<br/> com essa idade você $v e tambem $d ";
        ?>
    </body>
</html>

