<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Factorial</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 50px;
        }

        .result-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            margin: 0 0 15px;
            color: #333;
        }

        .error {
            color: #d9534f;
        }
    </style>
</head>
<body>
    <h1>Resultado del Factorial</h1>

    <?php
    function calcularFactorial($numero) {
        if ($numero == 0 || $numero == 1) {
            return 1;
        } else {
            return $numero * calcularFactorial($numero - 1);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        // Validar que se haya ingresado un número
        if (!is_numeric($numero)) {
            echo '<div class="result-container error"><p>Por favor, ingrese un número válido.</p></div>';
        } else {
            echo '<div class="result-container">';
            echo "<p>Proceso de cálculo del factorial para <strong>$numero</strong>:</p>";
            
            // Mostrar el número ingresado
            echo "<p>Se ha ingresado el número <strong>$numero</strong>.</p>";

            // Inicializar el resultado
            $resultado = 1;

            // Calcular el factorial
            for ($i = 1; $i <= $numero; $i++) {
                $resultado *= $i;
                echo "<p>Paso $i: Multiplicar por $i, el resultado es <strong>$resultado</strong>.</p>";
            }

            // Mostrar el resultado final
            echo "<p>Paso " . ($numero + 1) . ": El factorial de <strong>$numero</strong> es <strong>$resultado</strong>.</p>";
            
            echo '</div>';
        }
    }
    ?>
</body>
</html>
