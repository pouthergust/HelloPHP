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
            /* Operadores de atribuição 
                - Adição +=
                - Subtração -=
                - Multiplicação *=
                - Divição /=
                - Modulo %=
                - concatenação .=
            */
            $price = $_GET["p"];
            echo "O preço do produto é R$ $price"; 
            $price += $price*10/100;
            echo "<br>O preço do produto com 10% de aumento é R$" . number_format($price, 2); 
            // $price -= $price*10/100;
            // echo "<br>O preço do produto com 10% de desconto é R$" . number_format($price,); 
        ?>
    </div>
</body>
</html>