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
            function test(&$x) {
                $x += 2;
                echo "O valor de X é $x";
            }

            $a = 3;
            test($a);
            echo "<br>Valor de A é $a";

        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>