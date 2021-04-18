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
            function soma() {
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;

                for($i=0; $i<$t; $i++){
                    $s += $p[$i];
                }

                return $s;
            }

            $r = soma(5, 6, 7, 8);
            echo "O resultado é $r"

        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>