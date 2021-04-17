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
            /* TYPECAST
                - inteiro (int), (integer)
                - real (real), (float), (double)
                - caractere (string)
                - logico (???) true = 1 / false = vazio        
            */
            $phrase = "Hello World!";
            $name = (string) "Gabriel";
            $years = 21;
            echo "<h1>$name de $years anos diz $phrase</h1>"; // para concatenação é usado "."
        ?>
    </div>
</body>
</html>