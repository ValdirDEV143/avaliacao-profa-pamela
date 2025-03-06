Claro! Abaixo está o código em PHP, HTML e CSS que resolve o problema de remover as vogais de uma string fornecida:

### 1. Código PHP
```php
<?php
// Função para remover as vogais de uma string
function removerVogais($string) {
    // Usando a função str_ireplace para remover as vogais (tanto maiúsculas quanto minúsculas)
    $stringSemVogais = str_ireplace(['a', 'e', 'i', 'o', 'u', 'á', 'é', 'í', 'ó', 'ú', 'ã', 'õ'], '', $string);
    return $stringSemVogais;
}

// Verificando se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entrada = $_POST['entrada'];
    $resultado = removerVogais($entrada);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Vogais de String</title>
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
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .resultado {
            font-size: 16px;
            color: #333;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Remover Vogais</h2>
        <form method="post">
            <label for="entrada">Digite uma palavra:</label>
            <input type="text" id="entrada" name="entrada" required>
            <input type="submit" value="Remover Vogais">
        </form>

        <?php if (isset($resultado)): ?>
            <div class="resultado">
                Resultado: <?php echo $resultado; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
```

### Explicação:

- **Função `removerVogais($string)`**: 
  - A função recebe uma string como parâmetro e usa a função `str_ireplace` para remover as vogais (tanto minúsculas quanto maiúsculas).
  - A lista de caracteres que serão removidos inclui as vogais simples (`a, e, i, o, u`) e as acentuadas (`á, é, í, ó, ú, ã, õ`).

- **HTML**:
  - A interface tem um campo de texto para o usuário digitar a palavra.
  - Após o envio do formulário, o PHP processa a entrada e exibe o resultado.

- **CSS**:
  - A página é estilizada para ficar mais agradável visualmente, com o formulário centralizado, bordas arredondadas e uma sombra leve.

### Como funciona:
1. O usuário digita uma palavra no campo de texto e clica no botão "Remover Vogais".
2. O PHP processa essa palavra, removendo as vogais, e exibe o resultado na página.

Este código deve ser executado em um servidor que suporte PHP, como o XAMPP ou similar, para funcionar corretamente.