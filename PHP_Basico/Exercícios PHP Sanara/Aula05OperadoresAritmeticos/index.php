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
            echo "<h2>Aula sobre Operadores Aritmeticos<br/></h2>";
            
            $n1= 5;
            $n2 = 20;
            $resultado = $n1+$n2;
            echo "O Resultado da soma dos numeros eh: $resultado<br/>";
            // ou 
           echo "O Resultado da soma dos numeros eh: ". ($n1+ $n2);
            
            // recebendo os parâmetros direto da url do navegador
            // no navegador colocar após o php: php?a=5&b=8
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            
            echo "O Resultado da soma dos numeros eh: ". ($n1+ $n2);
            echo "<br/>O Resultado da subtração dos numeros eh: ". ($n1 - $n2);
            echo "<br/>O Resultado da multiplicação dos numeros eh: ". ($n1 * $n2);
            echo "<br/>O Resultado da divisão dos numeros eh:". ($n1 / $n2);
            echo "<br/>O Resultado do módulo dos numeros eh: ". ($n1 % $n2);
                    
            
            
            
            ?>
        </div>
    </body>
</html>
