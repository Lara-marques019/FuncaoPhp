<!-- index.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Maior Número</title>
</head>
<body>
    <h1>Informe três números para calcular o maior</h1>
    <form action="3calcular.php" method="POST">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br><br>

        <label for="num3">Número 3:</label>
        <input type="number" name="num3" required><br><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>
