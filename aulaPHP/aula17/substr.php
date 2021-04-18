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
            $frase = "Estou apredendo PHP no curso em video de PHP";
            $sub = substr($frase, 0, 5); 
            // $sub = substr($frase, 6); 
            // $sub = substr($frase, 0, -5); 
        
            echo "$sub ";
            
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>