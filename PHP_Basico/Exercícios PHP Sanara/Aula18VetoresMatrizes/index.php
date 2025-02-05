<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            // Array declaração
            $n = Array(3, 5, 8, 2);
            echo "Array declaração<br/>";
            print_r($n);

            // função range
            $c = range(5, 20, 2);
            echo "função range<br/>";
            print_r($c);

            echo "<br/>";

            // função foreach
            echo "Foreach";
            $c = range(5, 20, 2);
            foreach ($c as $v) {
                echo " $v ";
            }
            echo "<br/>";
            echo "<br/>";

            //chaves personalizadas
            echo "Chaves personalizadas";
            $c = array(
                3 => 5,
                1 => 8,
                2 => 7,
                6 => 8);
            echo "<br/>";
            print_r($c);

            echo "<br/>";

            //unset
            echo "Unset para remover elementos";
            $c = array(
                3 => 5,
                1 => 8,
                2 => 7,
                6 => 8);
            echo "<br/>";
            unset($c[2]);
            print_r($c);

            echo "<br/>";

            //chaves associativas
            echo "Foreach associativo";
            $vetor = array(
                "nome" => "sanara",
                "idade" => "24",
                "peso" => "64"
            );
            echo "<br/>";
            foreach ($vetor as $k => $c) {
                echo "O campo  $k possui o conteúdo: $c";
                echo "<br/>";
            } // $k chave $c conteúdo que possui a chave
            
            //
            
            
            ?>
        </pre>
    </body>
</html>
