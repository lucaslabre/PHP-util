<?php

declare(strict_types = 1);

class ContaBancaria {
    private string $banco;
    private string $nomeTitular;
    private string $numAgencia;
    private string $numConta;
    private float $saldo;

    function __construct (
        string $banco, 
        string $nomeTitular, 
        string $numAgencia, 
        string $numConta, 
        float $saldo) {
            $this->banco = $banco;
            $this->nomeTitular = $nomeTitular;
            $this->numAgencia = $numAgencia;
            $this->numConta = $numConta;
            $this->saldo = $saldo;
    }

    public function obterSaldo () : float {
        return $this->saldo;
    }

    public function depositar (float $valor) {
        $this->saldo += $valor;
        echo "Depósito de: R$$valor";
        echo PHP_EOL;
        echo "Valor atual: R$$this->saldo";
    }

}

$conta = new ContaBancaria(
    'Banco do Brasil',
    'Lucas Labre',
    '3837',
    '839283-9',
    1000.00
);

$conta->depositar(300.00);

exit();

var_dump($conta);
