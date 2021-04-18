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
            $t = "Uma texto bem grande mesmo para testar a função Wordwrap do PHP";
            $count = str_word_count($t, 0);
            // $count = str_word_count($t, 1);  // Gera um vetor com cada palavra(print_r)
            // $count = str_word_count($t, 2);  // Gera um vetor com cada caractere(print_r)
            echo $count;
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>