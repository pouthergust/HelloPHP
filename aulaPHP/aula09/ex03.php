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
            $score1 = isset($_GET["score1"]) && ($_GET["score1"] >= 0 && $_GET["score1"] <= 10) ? number_format($_GET["score1"], 1) : "[nota invalida]";
            $score2 = isset($_GET["score2"]) && ($_GET["score2"] >= 0 && $_GET["score2"] <= 10) ? number_format($_GET["score2"], 1) : "[nota invalida]";
            $m = ($score1 + $score2)/2;
            // $pass = $m <= 5 ? "REPROVADO" : "APROVADO";

            if ($m <= 5) {
                $pass = "REPROVADO";
            } elseif ($m >= 5 && $m < 7) {
                $pass = "de RECUPERAÇÃO";
            } else {
                $pass = "APROVADO";
            }

            echo "A média entre <span>$score1</span> e <span>$score2</span> é <span>$m</span><br>";
            echo "O aluno está <span>$pass</span>";

        ?>
        <br>
        <a href="ex03.html">Voltar</a>
    </div>
</body>
</html>