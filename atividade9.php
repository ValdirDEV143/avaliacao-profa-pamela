<?php
// Função para validar o e-mail
function validarEmail($email) {
    // Verifica se o e-mail contém um "@" e um "."
    if (strpos($email, '@') !== false && strpos($email, '.') !== false) {
        return "O e-mail é válido.";
    } else {
        return "O e-mail não é válido. Ele deve conter um '@' e um '.'";
    }
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o e-mail do formulário
    $email = $_POST['email'];
    $mensagem = validarEmail($email);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de E-mail</title>
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
        input[type="email"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .mensagem {
            font-size: 16px;
            color: #333;
            font-weight: bold;
            margin-top: 20px;
        }
        .valido {
            color: #4CAF50;
        }
        .invalido {
            color: #F44336;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Validação de E-mail</h2>

        <!-- Formulário para entrada de e-mail -->
        <form method="post">
            <label for="email">Digite seu e-mail:</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" value="Validar E-mail">
        </form>

        <!-- Exibe a mensagem de validação -->
        <?php if (isset($mensagem)): ?>
            <div class="mensagem <?php echo (strpos($mensagem, 'não') !== false) ? 'invalido' : 'valido'; ?>">
                <?php echo $mensagem; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
