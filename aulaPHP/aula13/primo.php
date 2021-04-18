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
            $num = isset($_GET["primo"]) ? $_GET["primo"] : 0;
            $par = $num % 2;

            echo "<h1>Analisando multiplo de $num</h1>";
            echo "Valores multiplos: ";
            $v = 0;
                for ($i =  1; $i <= $num; $i++) {
                    if ($num % $i == 0) {
                        $v++;
                        echo "$i ";
                    }
                }
            echo "<br>Total de multiplos: $v<br>";
            echo ($par == 0 ? "Resultado: $num <span class='foco'>NÃO É PRIMO</span>" : "Resultado: $num <span class='foco'>É PRIMO</span>");
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>