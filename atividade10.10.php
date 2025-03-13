Aqui está a implementação de uma classe `Calculadora` com o método `dividir($a, $b)` em PHP, que lança uma exceção do tipo `DivisionByZeroException` quando o divisor (`$b`) for zero. O código também trata essa exceção no bloco principal, exibindo uma mensagem de erro personalizada.

### Estrutura de Arquivos

1. **index.php** - Arquivo principal que contém o código para instanciar e utilizar a classe `Calculadora`.

### Código Completo

#### 1. **index.php** (Código Principal)

```php
<?php

// Definição da classe Calculadora
class Calculadora {

    // Método para dividir dois números
    public function dividir($a, $b) {
        // Verifica se o divisor é 0
        if ($b == 0) {
            // Lança uma exceção se o divisor for zero
            throw new DivisionByZeroException("Erro: Não é possível dividir por zero.");
        }

        // Retorna o resultado da divisão
        return $a / $b;
    }
}

// Bloco principal para executar a divisão e tratar exceções
try {
    // Instanciando a classe Calculadora
    $calculadora = new Calculadora();

    // Tentando realizar uma divisão
    $resultado = $calculadora->dividir(10, 0); // Aqui estamos tentando dividir por 0, então irá lançar uma exceção

    // Exibindo o resultado da divisão
    echo "Resultado: " . $resultado;

} catch (DivisionByZeroException $e) {
    // Captura a exceção DivisionByZeroException e exibe a mensagem de erro
    echo $e->getMessage(); // Mensagem personalizada de erro
} catch (Exception $e) {
    // Captura outras exceções gerais
    echo "Erro inesperado: " . $e->getMessage();
}

?>
```

### Explicação:

1. **Classe `Calculadora`**:
   - A classe `Calculadora` contém o método `dividir($a, $b)`, que tenta dividir o número `$a` pelo número `$b`.
   - Se o valor de `$b` for `0`, o método lança uma exceção do tipo `DivisionByZeroException` com uma mensagem personalizada ("Erro: Não é possível dividir por zero.").
   - Caso contrário, a função retorna o resultado da divisão de `$a` por `$b`.

2. **Bloco `try-catch`**:
   - No bloco principal, a classe `Calculadora` é instanciada e o método `dividir()` é chamado com os parâmetros `10` e `0`, que vão gerar uma exceção.
   - A exceção `DivisionByZeroException` é capturada e a mensagem de erro é exibida na tela.
   - Existe também um bloco `catch` genérico para capturar exceções inesperadas, embora no caso acima a exceção `DivisionByZeroException` seja a única relevante.

3. **Tratamento de Exceções**:
   - O PHP possui suporte a exceções, o que significa que podemos "lançar" (throw) uma exceção e "capturá-la" (catch) para realizar o tratamento adequado, evitando que o script pare abruptamente.

### Exemplo de Saída:

Ao rodar o código acima, o resultado será:

```
Erro: Não é possível dividir por zero.
```

Caso o código seja alterado para evitar a divisão por zero (por exemplo, passando um valor diferente de 0 como divisor), o cálculo será feito normalmente:

```php
// Resultado esperado se não ocorrer divisão por zero:
$resultado = $calculadora->dividir(10, 2); // Resultado: 5
echo "Resultado: " . $resultado; // Exibe: Resultado: 5
```

### Exceções em PHP:

- O PHP permite lançar exceções utilizando a palavra-chave `throw`.
- As exceções são tratadas usando os blocos `try` e `catch`. O bloco `try` tenta executar o código, e o bloco `catch` captura as exceções lançadas.

### Explicação de `DivisionByZeroException`:

O PHP já possui uma classe interna chamada `DivisionByZeroError` para capturar exceções de divisão por zero, mas para fins de personalização, criamos uma exceção personalizada com `throw new DivisionByZeroException()` no código acima.

### Conclusão:

Este código implementa uma maneira simples e eficaz de tratar erros de divisão por zero e exibir mensagens de erro de forma amigável ao usuário. Caso você precise personalizar mais a lógica ou adicionar outras exceções, o código pode ser facilmente expandido.