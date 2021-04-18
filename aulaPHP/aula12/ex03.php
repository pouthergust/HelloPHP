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
        <form action="tabuada.php" method="get">
            <label for="select">Numero: </label>
            <select name="select" id="select">
                <?php 
                    $i = 1;
                    while ($i <= 10) {
                        echo "<option value='$i'>$i</option>";
                        $i++;
                    }
                ?>
            </select>
            <button type="submit">Gerar</button>
        </form>
    </div>
</body>
</html>