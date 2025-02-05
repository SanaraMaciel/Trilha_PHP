<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
        <title></title>
    </head>
    <body>
        <div>
            <H2>Operadores de Atribuição</H2>
            <?php
            $preco = $_GET["p"];
            
             echo "O preço do produto é R$:".number_format($preco,2);
             $preco +=($preco * 10/100);
             echo "<br/>O preço do produto com 10% de aumento é R$:".number_format($preco,2);
             
             
             // CRiando referência para variáveis:
             $a = $_GET["p"];
             $b = &$a;
             
             echo "<br/>O valor de B referenciado passa a ser o valor de A que é : ".$b;            
             
             
             // Variáveis de Variáveis: 
             // cria var. a partir do conteúdo de outra var colocando um sifrão antes da car
             
//             $site= "Curso em Video";
//             $$memoria = "dolly guaraná";
//             
//             echo "$memoria";
             
             ?>
        </div>
    </body>
</html>
<?php


