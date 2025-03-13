Aqui está um exemplo de como criar uma classe `ContaBancaria` em PHP, com os atributos `Titular` (nome do titular da conta) e `Saldo`. Os métodos são definidos para **Depositar**, **Sacar** e **Consultar Saldo**. Além disso, usamos modificadores de acesso (público e privado) para garantir que o saldo só possa ser alterado por métodos da classe.

### Estrutura de Arquivos:

1. **index.php** - Arquivo PHP que contém a lógica da classe e interação com o HTML.
2. **style.css** - Arquivo CSS para o estilo da página.

### **index.php** (PHP e HTML):

```php
<?php
class ContaBancaria {
    public $titular;
    private $saldo;

    // Construtor para inicializar os valores
    public function __construct($titular, $saldo_inicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldo_inicial;
    }

    // Método para depositar dinheiro
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "<p>Depósito de R$ $valor realizado com sucesso!</p>";
        } else {
            echo "<p>Valor de depósito inválido.</p>";
        }
    }

    // Método para sacar dinheiro
    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "<p>Saque de R$ $valor realizado com sucesso!</p>";
        } else {
            echo "<p>Saldo insuficiente ou valor de saque inválido.</p>";
        }
    }

    // Método para consultar o saldo
    public function consultarSaldo() {
        return $this->saldo;
    }
}

// Criando uma conta bancária para um titular
$conta = new ContaBancaria('João da Silva', 500);

// Exemplo de uso
$conta->depositar(200); // Depositar R$ 200
$conta->sacar(150);     // Sacar R$ 150
$saldo_atual = $conta->consultarSaldo(); // Consultar saldo

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Conta Bancária de <?php echo $conta->titular; ?></h1>
        <p><strong>Saldo Atual:</strong> R$ <?php echo number_format($saldo_atual, 2, ',', '.'); ?></p>
    </div>
</body>
</html>
```

### **style.css** (CSS para o estilo):

```css
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

p {
    font-size: 16px;
    margin: 5px 0;
}

strong {
    font-weight: bold;
}
```

### Explicação do código:

1. **PHP (index.php)**:
   - A classe `ContaBancaria` possui os seguintes atributos:
     - `titular`: o nome do titular da conta (público).
     - `saldo`: o saldo da conta (privado, para garantir que não seja alterado diretamente).
   - **Métodos**:
     - `depositar($valor)`: aumenta o saldo da conta com o valor fornecido, desde que o valor seja positivo.
     - `sacar($valor)`: diminui o saldo com o valor fornecido, desde que o valor seja positivo e o saldo seja suficiente.
     - `consultarSaldo()`: retorna o saldo atual da conta.
   - O **modificador de acesso `private`** foi utilizado para o saldo, garantindo que o saldo não possa ser alterado diretamente fora da classe. Somente os métodos `depositar` e `sacar` podem modificar o saldo.
   - O **modificador de acesso `public`** foi usado para o titular, já que o nome do titular pode ser acessado diretamente fora da classe.

2. **HTML**:
   - O HTML exibe as informações da conta bancária, incluindo o nome do titular e o saldo atual.
   - O PHP é utilizado para gerar dinamicamente as informações da conta.

3. **CSS (style.css)**:
   - O CSS é utilizado para estilizar a página, proporcionando um visual agradável com um fundo claro e centralizado.
   - A classe `.container` é usada para encapsular a informação da conta com um fundo branco, bordas arredondadas e uma sombra suave.

### Como funciona:

1. O código cria um objeto `ContaBancaria` com o titular "João da Silva" e um saldo inicial de R$ 500.
2. O método `depositar(200)` é chamado para adicionar R$ 200 ao saldo.
3. O método `sacar(150)` é chamado para retirar R$ 150 do saldo.
4. O método `consultarSaldo()` retorna o saldo atual, que é exibido na página HTML.

### Exemplo de saída:

Quando você acessar a página, ela exibirá algo semelhante a:

```
Conta Bancária de João da Silva
Saldo Atual: R$ 550,00
```

Se você realizar operações de depósito e saque, o saldo será atualizado de acordo com as transações realizadas.

Se precisar de mais alguma ajuda ou ajustes, sinta-se à vontade para pedir!