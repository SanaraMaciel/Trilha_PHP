<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // funções de string em php

        $prod = "leite";
        $preco = 1.20;

        printf("O preco do produto $prod eh : R$ $preco");
        //ou
        printf("<br/>");
        printf("O %s custa R$ %.2f", $prod, $preco);

        //funçao print_r
        $r[0] = 4;
        $r[1] = 8;
        $r[2] = 3;
        echo"<br/>";
        echo"print_r retorna o que tem no vetor";
        echo"<br/>";
        print_r($r);

        //função Wordwrap 
        echo"<br/>";
        $string = "A adição do código a seguir (conhecido como snippet de acompanhamento JavaScript) aos modelos do seu site é a maneira mais fácil de começar a usar a analytics.js.";
        $res = wordwrap($string, 5, "<br>\n", false); //5 indica o n° que vc quer q quebre.//false gera a quebra por palavra se ela tiver 
        //menos que 5 letras.
        echo $res;

        //função strlen retorna o tam de uma string

        $txt = "Curso em vídeo";
        $res = strlen($txt);
        echo "<br/>$res";

        echo"<br/>";

        //função str_word_count

        $txt = "Eu vou estudar php";
        $count = str_word_count($txt, 0);
        echo "<br/> $count";

        //função explode
        $site = "Curso em video";
        $vetor = explode(" ", $site);
        print_r($vetor);

        //função strtolower
        $nome = "Sanara Felício";
        $res = strtolower($nome);
        echo "<br/> $res";

        //função ucfirst
        $nome = "sanara felício";
        $res = ucfirst($nome);
        echo "<br/> $res";

        //função ucwords
        $nome = "sanara felício";
        $res = ucwords($nome);
        echo "<br/> $res";

        //função strpos
        $nome = "estou aprendendo dollynês";
        $pos = strpos($nome, "dollynês"); //dollynês é o argumento q se procura
        echo "<br/> A string foi encontrada na posição $pos";

        //função substr
        $nome = "sanara felício";
        $sub = substr($nome,0,6); //0 posição inicial e 6 é o valor que vc vai andar ou seja andar 6 letras 
        echo "<br/> $sub"; // se colocar apenas um valor ele pega a partir da posição e completa até o final
        //se colocar com valor negativo -5 ele pega as 5 últimas letras da frase. 
        
        
        ?> 
    </body>
</html>
