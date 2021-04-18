<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="./aulaPHP/_css/estilo.css">
</head>
<body>
    <div>
        <?php 
        /* OPERADORES LOGICOS
            - AND &&
            - OR ||
            - XOR 
            - NOT !
        */
        $ano = $_GET["ano"];
        $idade = 2021 - $ano;
        $vote = $idade >= 18 && $idade < 65 ? "OBRIGATORIO" : "NÃO OBRIGATORIO";

        echo "Quem nasceu em $ano tem idade de $idade anos<br>";
        echo "O voto é $vote";

        ?>
    </div>
</body>
</html>