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
            /* OPERADORES RELACIONAIS
                - Maior >
                - Menor <
                - Maior ou igual >=
                - Menor ou igual <=
                - Diferente <> ou !=
                - Igual ==
                - Identico ===
                - Unario expressão?verdadeiro:falso
            */
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $type = $_GET["op"];
            echo "Os valores passados foram $n1 e $n2 <br>";
            $r = ($type == "s") ? $n1+$n2 : $n1*$n2;
            echo "O resultado será $r";
        ?>
    </div>
</body>
</html>