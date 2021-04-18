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
            $n1 = 3;
            $n2 = "3";

            // $r = ($n1 == $n2) ? "SIM" : "NÃO";
            // echo "As variaveis A e B são iguais? $r";
            $r = ($n1 === $n2) ? "SIM" : "NÃO";
            echo "As variaveis A e B são identicas? $r";
        ?>
    </div>
</body>
</html>