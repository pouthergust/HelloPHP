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
          $score1 = $_GET["n1"];
          $score2 = $_GET["n2"];
          $m = ($score1+$score2)/2;
        //   $pass = $m >= 6 ? "APROVADO" : "REPROVADO";

          echo "A média entre $score1 e $score2 é $m <br>";
          echo "O aluno foi ". ($m >= 6 ? "APROVADO" : "REPROVADO");
          
        ?>
    </div>
</body>
</html>