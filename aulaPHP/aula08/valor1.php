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
            $value = $_GET["v"];
            $rq = sqrt($value);

            echo "O valor enviado foi $value <br>";
            echo "A raiz quadrada é " . number_format($rq, 2);
        ?>
        <br>
        <a href="ex01.html"> Voltar </a>
    </div>
</body>
</html>