Implemente no ex03:
Crie uma função que calcule o valor das parcelas de um empréstimo. Utilize o DivisionByZeroException para tratar erro caso a quantidade de parcela seja = 0.

Resposta:
<?php
class ContaBancaria {
    // Atributos da classe
    private $titular;   
    private $saldo;
    private $emprestimo; 
    private $parcela;

    // Construtor para inicializar os atributos
    public function __construct($titular, $saldoInicial = 0, $parcela = 0, $emprestimo = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
        $this->parcela = $parcela;   
        $this->emprestimo = $emprestimo; 
    }

    // Método para depositar dinheiro
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ {$valor} realizado com sucesso. Saldo atual: R$ {$this->saldo}.<br>";
        } else {
            echo "Valor de depósito inválido.<br>";
        }
    }

    // Método para sacar dinheiro
    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ {$valor} realizado com sucesso. Saldo atual: R$ {$this->saldo}.<br>";
        } else {
            echo "Saldo insuficiente ou valor inválido para saque.<br>";
        }
    }

    // Método para consultar o saldo
    public function consultarSaldo() {
        echo "O saldo da conta de {$this->titular} é R$ {$this->saldo}.<br>";
    }

    // Método para calcular o valor da parcela
    public function calcularValorParcela($parcela, $emprestimo){
        if ($parcela == 0) {
            throw new DivisionByZeroError("Erro: O número de parcelas não pode ser 0.");
        }
        return $emprestimo / $parcela;
    }
}

// Criando uma instância da classe ContaBancaria
$conta = new ContaBancaria("João da Silva", 1000); 

// Consultar saldo inicial
$conta->consultarSaldo();

// Realizar um depósito
$conta->depositar(500);

// Realizar um saque
$conta->sacar(300);

// Consultar saldo final
$conta->consultarSaldo();

// Calcular valor da parcela

try {
    $valorParcela = $conta->calcularValorParcela(0, 600);  
    echo "Valor da parcela: R$ {$valorParcela}<br>";
} catch (DivisionByZeroError $e) {
    echo $e->getMessage();  
}
?>