<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            // Matriz declaração
            echo "Array declaração<br/>";
            $n = Array(array(2, 3),
                array(5, 3),
                array(2, 8));
            print_r($n);

            echo "<br/>";

            // função var_dump mostra o conteúdo e o tipo do vetor mostra tbm a qtd de elementos
            echo "var_dump para mostrar conteúdo e tipo <br/>";
            $n = Array(array(5, 7),
                array(5, 9),
                array(5, 2));
            var_dump($n);

            echo "<br/>";

            //contagem de itens do vetor
            $n = array("A", "b", "c", "d");
            echo "quantidade de elementos:";
            echo" O vetor tem " . count($n) . " elementos";

            echo "<br/>";

            //colocar elemento no final do vetor 
            $n = array("A", "b", "c", "d");
            $n[] = "O";
            echo "<br/>";
            echo "adicionando elemento no último nó do vetor:<br/>";
            print_r($n);

            //colocar elemento no inicio do vetor 
            $n = array("A", "b", "c", "d");
            array_unshift($n, "L");
            echo "<br/>";
            echo "adicionando 1° elemento no início do vetor:<br/>";
            print_r($n);

            //deletar elemento no inicio do vetor 
            $n = array("A", "b", "c", "d");
            array_search($n);
            echo "<br/>";
            echo "removendo 1° elemento no início do vetor:<br/>";
            print_r($n);

            //ordenando vetores 
            $n = array("A", "f", "c", "j");
            sort($n);
            echo "<br/>";
            echo "ordenando vetores:<br/>";
            print_r($n);


            //ordenando vetores asort
            $n = array("A", "f", "c", "j");
            asort($n);
            echo "<br/>";
            echo "ordenando vetores asort:<br/>";
            print_r($n);

            //ordenação 
            for ($i = 0; $i <= 10; $i++) {
                if ($i % 3 == 0)
                    continue;
                echo $i . "-";
            }
            echo "Fim";

            function f($v, $n) {
                if ($n <= 0)
                    return 1;
                else
                    return $v[$n - 1] * f($v, $n - 2) + 1;
            }

            $a = array(0, 1, 2, 3);
            print (f($a, 4));
            
            ?>
        </pre>
    </body>
</html>
