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
            echo "A soma entre $n1 + $n2 é igual ". ($n1 + $n2); 
            echo "<br>A subtração entre $n1 + $n2 é igual ". ($n1 - $n2); 
            echo "<br>A multiplicação entre $n1 + $n2 é igual ". ($n1 * $n2); 
            echo "<br>A divisão entre $n1 + $n2 é igual ". ($n1 / $n2); 
            echo "<br>O modulo entre $n1 + $n2 é igual ". ($n1 % $n2); 
            echo "<br>A media entre $n1 + $n2 é igual ". (($n1 + $n2) / 2); 
        ?>
    </div>
</body>
</html>