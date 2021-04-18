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
            $day = isset($_GET["day"]) ? $_GET["day"] : "8";

            switch ($day) {
               
                case 2: 
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar";
                    break;
                case 7:
                case 8:
                    echo "Bora descansar";
                    break;
                default:
                    echo "Dia invalido";
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>