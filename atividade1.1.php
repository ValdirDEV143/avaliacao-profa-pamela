<!-- Aqui está o exemplo equivalente em PHP, HTML e CSS para criar uma classe `Carro` com as propriedades solicitadas e exibir as informações do carro:

### Estrutura de Arquivos:

1. **index.php** - Arquivo PHP para a lógica de exibição.
2. **style.css** - Arquivo CSS para o estilo da página.

### **index.php** (PHP e HTML):

```php
<!-- <!-- <?php -->
// class Carro {
//     public $marca;
//     public $modelo;
//     public $ano_fabricacao;

//     // Construtor para inicializar os valores
//     public function __construct($marca, $modelo, $ano_fabricacao) {
//         $this->marca = $marca;
//         $this->modelo = $modelo;
//         $this->ano_fabricacao = $ano_fabricacao;
//     }

//     // Método para exibir as informações
//     public function exibir_informacoes() {
//         echo "<p><strong>Marca:</strong> " . $this->marca . "</p>";
//         echo "<p><strong>Modelo:</strong> " . $this->modelo . "</p>";
//         echo "<p><strong>Ano de Fabricação:</strong> " . $this->ano_fabricacao . "</p>";
//     }
// }

// // Criando um objeto da classe Carro
// $meu_carro = new Carro('Toyota', 'Corolla', 2022);
// ?> -->

<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Carro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Informações do Carro</h1>
        <?php
            // Exibindo as informações do carro
            $meu_carro->exibir_informacoes();
        ?>
    </div>
</body>
</html> -->
```

### **style.css** (CSS para estilo):

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
   - A classe `Carro` é definida com três propriedades: `marca`, `modelo` e `ano_fabricacao`, que são passadas ao objeto por meio do construtor.
   - O método `exibir_informacoes()` imprime as informações do carro.
   - Um objeto `meu_carro` é criado com os dados de um carro e, em seguida, as informações do carro são exibidas dentro da estrutura HTML.

2. **HTML**:
   - A estrutura HTML exibe as informações do carro na página. O PHP é usado para injetar as informações diretamente na página.

3. **CSS (style.css)**:
   - Estiliza a página com uma aparência limpa e moderna. A `container` centraliza o conteúdo na tela, com um fundo branco, bordas arredondadas e uma sombra sutil.

### Como funciona:

1. Quando você acessar a página `index.php`, ela cria o objeto `meu_carro` e chama o método `exibir_informacoes()`.
2. O PHP gera o HTML com as informações do carro e o CSS aplica o estilo para uma boa apresentação.

### Exemplo de saída:

A página gerada no navegador será semelhante a:

```
Informações do Carro
Marca: Toyota
Modelo: Corolla
Ano de Fabricação: 2022
```

Essa estrutura pode ser facilmente personalizada para adicionar mais funcionalidades ou estilos, caso seja necessário. Se tiver mais alguma dúvida ou precisar de ajustes, é só falar! -->





