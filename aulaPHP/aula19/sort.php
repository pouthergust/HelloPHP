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
        <pre>
        <?php 
            $n = array(4, 3, 5, 7);
                        
            // Organizando elementos do array
            sort($n);

            // Organizando ao contrario
            rsort($n);

            // Organizando de maneira associativa
            asort($n);

            // Organizando de maneira associativa ao contrario
            arsort($n);

            // Organizando indices
            ksort($n);

            // Organizando indices ao contrario
            krsort($n);
        ?>
        </pre>
        <br>

        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>