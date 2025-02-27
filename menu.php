

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
    <header>
        <form method ="post">
            <label for="num1">Número 1:</label>
            <input type="number" id="num1" name="num1" required>
            <br><br>
            <label for="num2">Número 2:</label>
            <input type="number" id="num2" name="num2" required>
            <br><br>
            <input type="submit" value="Calcular">

        </form>
    </header>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            
            $soma = $num1 + $num2;
            $subtracao = $num1 - $num2;
            $multiplicacao = $num1 * $num2;
            $divisao = ($num2 != 0) ? $num1 / $num2 : "Indefinido";


            echo "<h3>Resultados:</h3>";
            echo "Soma: $soma (Tipo: " . gettype($soma) . ")<br>";
            echo "Subtração: $subtracao (Tipo: " . gettype($subtracao) . ")<br>";
            echo "Multiplicação: $multiplicacao (Tipo: " . gettype($multiplicacao) . ")<br>";
            echo "Divisão: $divisao (Tipo: " . gettype($divisao) . ")<br>";
            echo "<br>";

        }
    ?>
</body>
</html>
