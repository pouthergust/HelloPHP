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
            $start = isset($_GET["start"]) ? $_GET["start"] : 0;
            $end = isset($_GET["end"]) ? $_GET["end"] : 0;
            $increment = isset($_GET["increment"]) ? $_GET["increment"] : 0;

            while ($start <= $end){
                echo "$start " ;
                $start += $increment;
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>