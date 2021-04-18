<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="./aulaPHP/_css/estilo.css">
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : "[ANO NAO DEFINIDO]";
            $idade = date("Y") - $ano;

            echo "Você nasceu em $ano e tem $idade anos<br>";
            if ($idade < 16) {
                $v = "não pode votar";
                $d = "não pode dirigir";
            } elseif ($idade >= 16 && $idade < 18 || $idade >= 65) {
                    $v = "tem o voto opcional";
                    $d = "não pode dirigir";
                } else {
                    $v = "já pode votar";
                    $d = "já pode dirigir";
                }
            

            echo "Então você $v e $d";

        ?>
        <br>
        <a href="ex01.html">Voltar</a>
    </div>
</body>
</html>