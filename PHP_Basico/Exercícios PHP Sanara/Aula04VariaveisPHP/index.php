<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
        <title></title>
    </head>
    <body>
        <div>
            <?php
            $n = 4;
            // utilizando typecast : $nome = (string)"Dollynho!";
            $nome = "Dollynho!";
            echo "$nome <br/>";
            echo "$n</br>";
            
            // concatenação de variáveis
            $nome = "Dollynho";
            $idade = 8;
            
            echo $nome . " tem ". $idade. " anos <br/>";
            //ou
            echo ("$nome tem $idade anos! "); 
    // isso é possivel pq o echo suporta + de 1 parâm. e o print/printf somente 1 parâm.
         //não use aspas simples pois o php não sabe decifrar as var. 
         // é case sensitive I <> i
                  
            ?>
        </div>
    </body>
</html>
