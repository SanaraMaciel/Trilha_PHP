<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
     <link rel="stylesheet" href="_css/estilo.css">
        <title></title>
    </head>
    <body>
        <div>
            <h2> Situação do Eleitor</h2>
            <?php
           $ano = $_GET["ano"];
           $idade = 2017 -$ano;
           echo "Quem nasceu em  $ano tem $idade anos de idade" ;
           
           $tipo = ($idade <=18 || $idade >65)?"Não Precisa Votar": "O voto é obrigatório";
           
            echo"<br/> Dessa forma o seu  $tipo";
                      
           ?>
        </div>
    </body>
</html>
