<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="./aulaPHP/_css/estilo.css">
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        span {
            color:red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <?php 
            $c = 1;
            while ($c<=18) {
                echo $c. "<br>"; $c++;
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>