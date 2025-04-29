<?php
// calcular.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    
    function maiorNumero($num1, $num2, $num3) {
        
        $numeros = array($num1, $num2, $num3);


        return max($numeros);
    }

    
    $maior = maiorNumero($num1, $num2, $num3);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Maior Número</title>
</head>
<body>
    <h1>Resultado</h1>
    <p>O maior número entre <?php echo $num1; ?>, <?php echo $num2; ?> e <?php echo $num3; ?> é: <strong><?php echo $maior; ?></strong></p>
    <a href="3index.php">Voltar</a>
</body>
</html>



