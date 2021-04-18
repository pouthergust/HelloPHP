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
            $vetor = array(3, 5 , 6, 7);
            // Chaves Personalizadas
            $vetor2 = array(3=>"A", 5=>"B" , 6=>"C", 7=>"D");
            // alocando espaço adicional
            $vetor[] = 9;
            // desalocando espaço adicional
            unset($vetor[3]);
            // print_r($vetor);

            //Chaves associativas
            $pessoa = array("nome" => "Gabriel", "idade" => 21, "peso" => 85.4);
            foreach($pessoa as $campo => $valor) {
                echo "O valor de $campo é $valor<br>";
            }
        ?>
        </pre>
        <br>

        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>