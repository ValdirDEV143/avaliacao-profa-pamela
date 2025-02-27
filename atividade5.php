Aqui está um exemplo de código em HTML e PHP que armazena os 10 primeiros números da sequência de Fibonacci em um array e os exibe na tela:

```php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>
    <h1>Os 10 primeiros números da sequência de Fibonacci</h1>

    <?php
    // Função para gerar os primeiros N números da sequência de Fibonacci
    function fibonacci($n) {
        $fib = [0, 1]; // Primeiros dois números da sequência

        // Calcula os próximos números da sequência até atingir o valor N
        for ($i = 2; $i < $n; $i++) {
            $fib[] = $fib[$i - 1] + $fib[$i - 2];
        }

        return $fib;
    }

    // Gera os 10 primeiros números de Fibonacci
    $sequencia_fibonacci = fibonacci(10);

    // Exibe os números na tela
    echo "<ul>";
    foreach ($sequencia_fibonacci as $numero) {
        echo "<li>$numero</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
```

### Explicação do código:

1. **HTML**:
    - A estrutura HTML é simples, com um título e um espaço onde os números da sequência de Fibonacci serão exibidos.

2. **PHP**:
    - A função `fibonacci($n)` é responsável por gerar os primeiros `n` números da sequência de Fibonacci. Ela começa com os dois primeiros números (0 e 1) e depois calcula os números subsequentes, armazenando-os em um array.
    - A variável `$sequencia_fibonacci` armazena os 10 primeiros números da sequência de Fibonacci.
    - Usamos um `foreach` para percorrer o array e exibir cada número dentro de uma lista não ordenada (`<ul>`).

### Como funciona:
- Quando você acessar essa página, o PHP calcula e exibe os 10 primeiros números da sequência de Fibonacci na tela em uma lista.
  
Esse código deve ser executado em um servidor que suporte PHP, como o XAMPP, WAMP ou diretamente em um servidor online.