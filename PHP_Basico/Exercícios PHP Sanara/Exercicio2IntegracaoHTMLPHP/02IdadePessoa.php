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
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "Não Informado";
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset($_GET["sexo"])? $_GET["sexo"]:"Não informado";

            $idade = date("Y") - $ano;

            echo "A idade de $nome é $idade e seu sexo é $sexo: ";
            ?>
            <!--            //link para voltar -->
            <a href="02Idade.html"> Voltar </a>
        </div>
    </body>
</html>