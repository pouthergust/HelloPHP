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
            $v = array("A", "B", "C");

            // Inserindo e excluindo elementos no ultimo espaço
            array_push($v, 7);
            array_pop($v);
            
            // Inserindo e excluindo elementos no primeiro espaço
            array_unshift($v, 7);
            array_shift($v);
    
            // exibição
            echo "O vetor tem ". count($v) ." elementos";
            print_r($v);
            // var_dump($v);
        ?>
        </pre>
        <br>

        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>