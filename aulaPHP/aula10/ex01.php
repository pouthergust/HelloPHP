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
            $num = isset($_GET["num"]) ? $_GET["num"] : "0";
            $oper = isset($_GET["oper"]) ? $_GET["oper"] : "1";

            switch ($oper) {
                case 1:
                    $r = $num * 2;
                    break;
                case 2: 
                    $r = $num ^ 3;
                    break;
                case 3:
                    $r = sqrt($num);
            }
            echo "O resultado da operação solicitada é $r";
        ?>
        <br>
        <a href="ex01.html">Voltar</a>
    </div>
</body>
</html>