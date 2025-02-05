<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
        <title></title>
    </head>
    <body>
        <div>
            <h2> Situação do Aluno</h2>
            <?php
           $n1 = $_GET["a"];
           $n2 = $_GET["b"];
           $media = ($n1 + $n2)/2;
           echo "A média entre $n1 e $n2 é : $media";
           
           $situacao = ($media <= 6)?"Reprovado": "Aprovado";
           echo "<br/>A Situação do Aluno é :  $situacao ";
                           
           // Calculando o operador ternário dentro do própio echo :
           //basta concatenar o operador ternário dentro da expressão
           
           echo "<br/> A Situação do Aluno é : ".(($media <= 6)?"Reprovado":"Aprovado");
                      
           ?>
        </div>
    </body>
</html>


