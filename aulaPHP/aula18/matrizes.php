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
        <pre>
        <?php 
            $matriz = array(array(2,3), array(1,5), array(4,7));

            $matriz[0][1] = $matriz[2][1];
            print_r($matriz);
        ?>
        </pre>
        <br>

        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>