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
            // VARIAVEIS REFERENCIADAS
            $a = 3;
            $b = &$a;
            $b += 5;

            // VARIAVEIS VARIANTES
            $site = "CursoemVideo";
            $$site = "CursoPHP"; // nome que essa variavel recebe é CursoemVideo

            echo "variavel site é $site";
            echo "<br> variavel CursoemVideo é $CursoemVideo";

            // echo "a Vale $a";
            // echo "<br> b vale $b";
            
        ?>
    </div>
</body>
</html>