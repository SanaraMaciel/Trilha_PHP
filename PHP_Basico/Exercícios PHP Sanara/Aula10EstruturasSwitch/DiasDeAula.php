<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;


        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Nesses dias temos que Estudar !!";
                break;
            case 7 :
            case 8 :
                echo "Final de Semana chegou! , não precisa ir estudar!!";
                break;
            Default:
                echo "Dia da semana Inválido!";
        }
        ?>
        <br/>
        <!-- //texto em java script que faz o link voltar pra uma página anterior (-1)-->
        <!--<a href="javascript:history.go-1"class="botao">Voltar</a>-->
        
        <a href="DiasDeAula.html"class="botao">Voltar</a>
    </body>
</html>
