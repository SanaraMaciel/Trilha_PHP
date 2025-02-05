<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><?php
        $n = isset($_GET['val'])?$_GET['val']:0;
        
        $sc = $n;
        
        $fat;

        if ($n == 0 || $n == 1) {
            $fat = 1;
            echo 'Por definição o valor do fatorial é : ' . $fat;
            
        } else {
            do {
                $fat = $n * ($n--);
            } while ($n>=$sc);
            
             echo 'O valor do Fatorial de é : '.$fat;
        }
       
        ?>
        <a href="Fatorial.html">Voltar</a>
    </body>
</html>


