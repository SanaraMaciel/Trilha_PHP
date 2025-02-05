<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <?php
            $valor = $_GET["v"];
            $raiz = sqrt($valor);

            echo "A raiz quadrada do valor $valor é de : " . $raiz;
            ?>
            <!--            //link para voltar -->
            <a href="01Exercicio.html"> Voltar </a>
        </div>
    </body>
</html>