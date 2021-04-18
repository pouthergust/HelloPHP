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
            $p = "Leite";
            $pr = 4.5;
            /* IMPRIMIR STRINGS COM FORMATAÇÃO 
                - %s (string) 
                - %f (float/real)
                - %d (decimal)
                - %u (decimal sem sinal)
            */
            printf("O %s custa R$%.2f", $p, $pr);

        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>