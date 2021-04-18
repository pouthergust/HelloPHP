<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        $text = isset($_GET["text"]) ? $_GET["text"] : "[TEXTO GENERICO]";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "[TAMANHO NÃO DEFINIDO]";
        $color = isset($_GET["color"]) ? $_GET["color"] : "[COR NAO DEFINIDA]";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        span.txt {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $color; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php 
            echo "<span class='txt'>$text</span>";
        ?>
        <br>
        <a href="ex03.html"> Voltar </a>
    </div>
</body>
</html>