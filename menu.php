<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="menu.php" method="GET">
        <input type="text" name="valor1" type="submit" placeholder="Digite o primeiro número"> <br> <br>
        <input type="text" name="valor2" type="submit" placeholder="Digite o segundo número"> <br> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

$primeiro_valor = $_GET['valor1'];
$segundo_valor = $_GET['valor2'];

if (is_numeric($primeiro_valor) && is_numeric($segundo_valor)){
    $soma_numeros = $primeiro_valor + $segundo_valor;
    echo "<br>";
    echo "Soma: " . $soma_numeros;
}

if (is_numeric($primeiro_valor) && is_numeric($segundo_valor)){
    $subtracao_numeros = $primeiro_valor - $segundo_valor;
    echo "<br>";
    echo "Subtração: " . $subtracao_numeros;
}

if (is_numeric($primeiro_valor) && is_numeric($segundo_valor)){
    $multiplicacao_numeros = $primeiro_valor * $segundo_valor;
    echo "<br>";
    echo "Multiplicação: " . $multiplicacao_numeros;
}

if (is_numeric($primeiro_valor) && is_numeric($segundo_valor)){
    $divisao_numeros = $primeiro_valor / $segundo_valor;
    echo "<br>";
    echo "Divisão: " . $divisao_numeros;
    echo "<h3>Resultados:</h3>";
    echo "Soma: $soma (Tipo: " . gettype($soma) . ")<br>";
    echo "Subtração: $subtracao (Tipo: " . gettype($subtracao) . ")<br>";
    echo "Multiplicação: $multiplicacao (Tipo: " . gettype($multiplicacao) . ")<br>";
    echo "Divisão: $divisao (Tipo: " . gettype($divisao) . ")<br>";
    echo "<br>";
}

else{
    echo "<br>";
    echo "Inválido. Digite números inteiro";
}



?>