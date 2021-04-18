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
            $name = isset($_GET["name"]) ? $_GET["name"] : "Nome não configurado";
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : "Ano não configurado";
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "Sexo não configurado";
            $idade = date("Y") - $ano;

            echo "$name é $sexo e tem $idade anos";
        ?>
        <br>
        <a href="ex02.html"> Voltar </a>
    </div>
</body>
</html>