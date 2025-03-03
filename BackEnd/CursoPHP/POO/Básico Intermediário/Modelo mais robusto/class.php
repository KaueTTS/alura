<?php

require 'enum.php';

class Conta
{
    private int $saldoEmCentavos;

    public function __construct(
        public readonly string $nomeTitular,
        public readonly TipoConta $tipo,
    ) {
        $this->saldoEmCentavos = 0;
    }

    public function depositar(int $valorADepositar): string
    {
        if ($valorADepositar > 0) {
            $this->saldoEmCentavos += $valorADepositar;
            return "\n\nValor depositado: {$valorADepositar} centavos";
        }
    }

    public function sacar(int $valorASacar): string
    {
        if ($valorASacar > 0 && $valorASacar < $this->saldoEmCentavos) {
            $this->saldoEmCentavos -= $valorASacar;
            return "\n\nValor sacado: {$valorASacar} centavos";
        } else {
            return "\n\nSaldo insuficiente para saque ou valor inválido";
        }
    }

    public function getSaldo(): string
    {
        return "\n\nSaldo atual no banco: {$this->saldoEmCentavos} centavos";
    }
}

$conta = new Conta('João', TipoConta::Poupanca);
echo $conta->getSaldo();
echo $conta->depositar(100);
echo $conta->getSaldo();
echo $conta->sacar(50);
echo $conta->getSaldo();