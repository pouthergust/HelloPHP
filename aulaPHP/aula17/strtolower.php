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
            $nome = "Gabriel Henrique";
            echo "Seu nome é ". strtolower($nome);
            // echo "Seu nome é ". strtoupper($nome);
            // echo "Seu nome é ". ucfirst($nome);
            // echo "Seu nome é ". ucwords($nome);
            
            // echo "Seu nome é ". strrev($nome);
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>