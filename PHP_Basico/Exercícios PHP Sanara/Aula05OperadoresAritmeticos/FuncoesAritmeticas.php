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
            echo "<h2>Aula sobre Operadores Aritmeticos Funções <br/></h2>";
          
            $v1 = $_GET["a"];
            $v2 = $_GET["b"];
            echo "<h3>Valores Recebidos: $v1 e $v2</h3>";
            // Abs - Absoluto
            echo "O Valor Absoluto de $v2 é: ". abs($v2); // valores abs eliminam o sinal negativo nesse caso da var. v2.
            // pow Potência!
            echo "<br/>(Potência) O Valor de $v1<sup>$v2</sup> é: ". pow($v1,$v2); // tag <sup> eleva um n° pelo outro(html) 
           // Raiz Quadrada
            echo "<br/>A Raíz Quadrada de $v1 é : ". sqrt($v1);
            // funão round pra arredondamentos
            echo "<br/>O valor arredondado de $v1 é : ". round($v1);
            // existe 2 funções no lugar do round que são Ceil e Floor Ceil arredonda pra cima e Floor arredonda pra baixo
            //----------------------------          
            // Função pra mostrar sempre a parte inteira intval
            echo "<br/>A parte inteira de $v2 é : ". intval($v2);
            
            //NUmber format para formatar n° em forma de moeda
            echo "<br/>O valor $v2 em moeda é R$: ".number_format($v2);
                    
//   Não aceitou essa sintaxe no netBeans versão php??? echo "<br/>O valor $v2 em moeda é R$: ".number_format($v2 , 2 ,",");
// par 1 : variável , par 2: n° de casas depois da virgula, par 3: separador como vírgula
            
            ?>
        </div>
    </body>
</html>

