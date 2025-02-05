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

        if ($i < 16) 
        {
            $v = "Não Vota!";
        } else 
        {
            if (($i >= 16 && $i < 18) || $i > 65)
            {
                $v = "Voto é Facultativo";
            } else 
            {
                $v = "Voto Obrigatório!";
            }
        }
        
        echo "<br/>Você nasceu em  $a e terá $i anos ! <br/> e portanto $v";
       
        ?>
        <a href="01PodeDirigirVotar.html">Voltar</a>
    </body>
</html>



