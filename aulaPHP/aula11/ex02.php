<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="./aulaPHP/_css/estilo.css">
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        span {
            color:red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <form action="ex02pt2.php">
            <?php 
            $c = 1;
            while ($c <= 5 ){
                echo 
                "<label for='v$c'>Valor $c: </label>
                <input type='number' min='0' max='100' value='0' name='v$c'><br>";
                $c++;
            }
            ?>
            <button type="submit">Enviar</button>
        </form>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>