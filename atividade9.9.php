Aqui está o código completo e explicações detalhadas de como implementar o exercício 9, onde você cria duas classes PHP em namespaces diferentes e as utiliza no arquivo principal.

### Estrutura de Arquivos

1. **index.php** - Arquivo principal, onde as classes serão importadas e instanciadas.
2. **Usuario.php** - Arquivo com a classe `Usuario` no namespace `App\Controle`.
3. **Produto.php** - Arquivo com a classe `Produto` no namespace `App\Models`.
4. **style.css** - Arquivo CSS para estilização da página.

### 1. **index.php** (Arquivo principal com a importação das classes)

```php
<?php
// Autoloading de classes (se estiver usando PSR-4 ou autoload manualmente)
require_once 'Usuario.php';
require_once 'Produto.php';

use App\Controle\Usuario;   // Importando a classe Usuario do namespace App\Controle
use App\Models\Produto;     // Importando a classe Produto do namespace App\Models

// Criando instâncias das classes
$usuario = new Usuario("João", 30);
$produto = new Produto("Camiseta", 49.90);

// Exibindo informações
echo "<h2>Informações do Usuário:</h2>";
echo "<p>Nome: " . $usuario->getNome() . "</p>";
echo "<p>Idade: " . $usuario->getIdade() . "</p>";

echo "<h2>Informações do Produto:</h2>";
echo "<p>Produto: " . $produto->getNome() . "</p>";
echo "<p>Preço: " . $produto->getPreco() . "</p>";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespace e Classes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Exemplo de Uso de Namespaces em PHP</h1>
        <p>Veja as informações do usuário e do produto acima!</p>
    </div>
</body>
</html>
```

### 2. **Usuario.php** (Classe `Usuario` no namespace `App\Controle`)

```php
<?php
namespace App\Controle;

class Usuario {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}
?>
```

### 3. **Produto.php** (Classe `Produto` no namespace `App\Models`)

```php
<?php
namespace App\Models;

class Produto {
    private $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}
?>
```

### 4. **style.css** (CSS para estilização da página)

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

h2 {
    font-size: 20px;
    margin-top: 20px;
}

p {
    font-size: 18px;
    font-weight: bold;
}
```

### Como Funciona o Código:

1. **Estrutura de Diretórios e Arquivos**:
   - O arquivo principal é o `index.php`. Ele contém o código PHP que importa e utiliza as classes `Usuario` e `Produto`.
   - As classes `Usuario.php` e `Produto.php` estão em namespaces diferentes (`App\Controle` e `App\Models` respectivamente).

2. **Namespaces**:
   - O PHP utiliza namespaces para organizar o código e evitar conflitos de nomes. No exemplo, temos dois namespaces: `App\Controle` e `App\Models`. 
   - As classes `Usuario` e `Produto` são definidas dentro desses namespaces, e no arquivo `index.php` importamos essas classes utilizando a palavra-chave `use`.

3. **Instanciando Objetos**:
   - No `index.php`, criamos um objeto da classe `Usuario` e outro da classe `Produto`. Esses objetos são então utilizados para exibir as informações do usuário e do produto na página.

4. **CSS**:
   - O arquivo `style.css` serve para adicionar uma estilização básica à página, centralizando o conteúdo e dando um visual limpo e moderno.

### Exemplo de Saída na Página:

A página exibirá as seguintes informações:

```
Exemplo de Uso de Namespaces em PHP

Informações do Usuário:
Nome: João
Idade: 30

Informações do Produto:
Produto: Camiseta
Preço: 49.9
```

### Explicação de Namespaces:

1. **Namespaces no PHP**:
   - Um namespace em PHP é uma forma de organizar classes, funções e constantes em grupos lógicos. Isso ajuda a evitar conflitos quando diferentes bibliotecas ou pacotes utilizam os mesmos nomes para suas classes.
   - No exemplo, temos dois namespaces diferentes: `App\Controle` e `App\Models`.

2. **Importação de Classes com `use`**:
   - A palavra-chave `use` é usada para importar classes de namespaces específicos no PHP. Isso facilita o acesso às classes sem precisar escrever o caminho completo do namespace toda vez.

3. **Exibindo as Informações**:
   - O arquivo `index.php` mostra as informações do usuário e do produto utilizando `echo`. O conteúdo é gerado em PHP e exibido diretamente na página HTML.

### Como Rodar o Código:

1. Coloque os arquivos `index.php`, `Usuario.php`, `Produto.php` e `style.css` na mesma pasta.
2. Acesse o arquivo `index.php` em um servidor local ou servidor web para ver a saída.

Se precisar de mais explicações ou ajustes, fique à vontade para perguntar!