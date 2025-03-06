<?php
// Função para formatar a data no formato desejado
$dataAtual = strftime("%A, %d de %B de %Y", time());

// Traduzir os nomes dos meses e dias para português
setlocale(LC_TIME, 'pt_BR.utf8', 'pt_BR', 'portuguese');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e Hora Atual</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h2 {
            color: #333;
            font-size: 24px;
        }
        .data {
            font-size: 20px;
            font-weight: bold;
            color: #4CAF50;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data e Hora Atual</h2>
        <div class="data">
            <?php echo $dataAtual; ?>
        </div>
    </div>
</body>
</html>
