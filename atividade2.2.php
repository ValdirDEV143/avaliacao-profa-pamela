Aqui está um exemplo de como criar a classe `Pessoa` em PHP, com os atributos `Nome`, `Idade` e `Sexo`, além do método `falar()` para imprimir uma frase com o nome e a idade da pessoa. Vou incluir também o HTML e o CSS para a apresentação na página.

### Estrutura de Arquivos:

1. **index.php** - Arquivo PHP para a lógica de exibição e criação do objeto.
2. **style.css** - Arquivo CSS para o estilo da página.

### **index.php** (PHP e HTML):

```php
<?php
class Pessoa {
    public $nome;
    public $idade;
    public $sexo;

    // Construtor para inicializar os valores
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    // Método falar que imprime uma frase com o nome e a idade
    public function falar() {
        echo "<p>Olá, meu nome é " . $this->nome . " e eu tenho " . $this->idade . " anos.</p>";
    }
}

// Criando um objeto da classe Pessoa
$pessoa = new Pessoa('João', 25, 'Masculino');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações da Pessoa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Informações da Pessoa</h1>
        <?php
            // Chamando o método falar() para exibir a frase
            $pessoa->falar();
        ?>
    </div>
</body>
</html>
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
   - A classe `Pessoa` é definida com três propriedades: `nome`, `idade` e `sexo`.
   - O método `falar()` imprime uma frase contendo o nome e a idade da pessoa.
   - O construtor é usado para inicializar essas propriedades quando um objeto da classe `Pessoa` é criado.

2. **HTML**:
   - A estrutura HTML exibe a frase gerada pelo método `falar()` na página.
   - O PHP é utilizado para gerar o conteúdo dinâmico e exibir as informações.

3. **CSS (style.css)**:
   - O CSS é usado para estilizar a página, deixando-a com uma aparência mais agradável e bem estruturada. Ele centraliza o conteúdo na tela, com um fundo branco e bordas arredondadas.

### Como funciona:

1. Ao acessar a página `index.php`, o código PHP cria um objeto da classe `Pessoa` com o nome "João", idade 25 e sexo "Masculino".
2. O método `falar()` é chamado para exibir uma frase como: "Olá, meu nome é João e eu tenho 25 anos."
3. As informações são exibidas dentro de uma estrutura de página HTML com o estilo aplicado via CSS.

### Exemplo de saída na página:

```
Informações da Pessoa
Olá, meu nome é João e eu tenho 25 anos.
```

Esse código pode ser facilmente modificado para aceitar outros valores, adicionar mais funcionalidades ou modificar o estilo conforme necessário.

Se precisar de mais alguma coisa, é só falar!