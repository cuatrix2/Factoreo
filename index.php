<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Factorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Factorial</h1>

        <form action="factorial.php" method="post">
            <label for="numero">Ingrese un número:</label>
            <input type="text" name="numero" id="numero" required>
            <button type="submit">Calcular Factorial</button>
        </form>
    </div>
</body>
</html>