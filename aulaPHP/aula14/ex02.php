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
            function soma($a, $b) {
                return $a + $b;
            }
            $x = 4;
            $y = 5;
            $r = soma($x,$y);
            echo "O resultado é $r"

        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>