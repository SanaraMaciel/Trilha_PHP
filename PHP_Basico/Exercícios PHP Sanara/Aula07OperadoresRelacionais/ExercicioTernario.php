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
           $tipo = $_GET["op"];
           echo "os valores passados foram $n1 e $n2";
           $r = ($tipo == "s")?$r = $n1 +$n2 : $n1 *$n2 ;        
           echo "<br/>O Resultado será:  $r ";
                           
           ?>
        </div>
    </body>
</html>


