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
            $num = isset($_GET["select"]) ? $_GET["select"] : 0;

            echo "<h1>Mostrando a tabuada de $num</h1>";
            for ($i = 1; $i <= 10; $i++) {
                echo "$num X $i = ". ($num * $i) ."<br>";
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>