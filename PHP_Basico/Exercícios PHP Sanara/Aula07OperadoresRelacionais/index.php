<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
        <title></title>
    </head>
    <body>
        <div>
            <h2> Operadores Relacionais de Comparações em PHP</h2>
            <?php
           $n1 = $_GET["a"];
           $n2 = $_GET["b"];
          
           //Operadores ternários coloca na expressão o valor q se quer achar como se fosse um if
          
           // maior
           $maior = $n1 >$n2?$n1:$n2;
           echo $maior;
            
           //menor
           $menor = $n1 < $n2?$n1:$n2;
           echo "<br/>$menor"
           
           ?>
        </div>
    </body>
</html>
