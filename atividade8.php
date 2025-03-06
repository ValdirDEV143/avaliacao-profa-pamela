<?php
// Caminho do arquivo
$arquivo = "notas.txt";

// Verificar se o arquivo existe
if (file_exists($arquivo)) {
    // Abrir o arquivo para leitura
    $conteudo = file_get_contents($arquivo);
} else {
    // Se o arquivo não existir, exibir uma mensagem
    $conteudo = "O arquivo não foi encontrado.";
}

// Verificar se o formulário foi enviado para adicionar o texto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Abrir o arquivo para adicionar o texto no final
    $arquivoAberto = fopen($arquivo, "a"); // "a" é para adicionar no final do arquivo
    if ($arquivoAberto) {
        fwrite($arquivoAberto, "\nFinal do conteúdo");
        fclose($arquivoAberto); // Fechar o arquivo após escrever
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura e Escrita em Arquivos</title>
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
            width: 400px;
            text-align: center;
        }
        h2 {
            color: #333;
            font-size: 24px;
        }
        .conteudo {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
            white-space: pre-wrap; /* Para manter quebras de linha */
            text-align: left;
            border: 1px solid #ddd;
            padding: 10px;
            height: 150px;
            overflow-y: scroll;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Conteúdo do Arquivo</h2>

        <!-- Exibindo o conteúdo do arquivo -->
        <div class="conteudo">
            <?php echo nl2br($conteudo); ?>
        </div>

        <!-- Formulário para adicionar "Final do conteúdo" ao arquivo -->
        <form method="post">
            <input type="submit" value="Adicionar 'Final do conteúdo'">
        </form>
    </div>
</body>
</html>
