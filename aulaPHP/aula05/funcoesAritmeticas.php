<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /* Operadores Aritmeticos
                - Adição +
                - Subtração -
                - Multiplicação * 
                - Divição /
                - Modulo %
            */
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $s = $n1 + $n2;
            echo "<h2>Valores recebidos: $n1 e $n2</h2>";
            echo "O valor absoluto de $n2 é ". abs($n2); 
            echo "<br>A potenciação de $n1<sup>$n2</sup> é ". pow($n1, $n2); 
            echo "<br>A raiz quadrada de $n1 é ". sqrt($n1); 
            echo "<br>O valor arrendonado de $n2 é ". round($n2); //ceil, floor
            echo "<br>A parte inteira de $n2 é ". intval($n2);
            echo "<br>O valor de $n2 em moeda é R$". number_format($n2, 2, ",", ".");
        ?>
    </div>
</body>
</html>