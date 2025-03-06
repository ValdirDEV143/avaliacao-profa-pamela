<?php
// Verifica se o formulário foi enviado e processa os dados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // Exibe a mensagem personalizada
    $mensagem = "Olá, " . htmlspecialchars($nome) . "! Você tem " . htmlspecialchars($idade) . " anos.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Interação</title>
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
            width: 350px;
            text-align: center;
        }
        h2 {
            color: #333;
            font-size: 24px;
        }
        label {
            font-size: 16px;
            color: #333;
        }
        input[type="text"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .mensagem {
            font-size: 18px;
            color: #333;
            font-weight: bold;
            margin-top: 20px;
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulário de Interação</h2>

        <!-- Formulário HTML -->
        <form method="post">
            <label for="nome">Seu nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="idade">Sua idade:</label>
            <input type="number" id="idade" name="idade" required min="1">

            <input type="submit" value="Enviar">
        </form>

        <!-- Exibe a mensagem personalizada -->
        <?php if (isset($mensagem)): ?>
            <div class="mensagem">
                <?php echo $mensagem; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
