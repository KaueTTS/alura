<?php

class Conta
{
    private int $saldoEmCentavos = 0;
    private string $nomeTitular = "Titular";
    private string $numeroConta = "0000-0";


    public function depositar(int $valorADepositar): void {
        if ($valorADepositar > 0) {
            $this->saldoEmCentavos += $valorADepositar;
        }
    }

    public function sacar(int $valorASacar): void {
        if ($valorASacar > 0 && $valorASacar <= $this->saldoEmCentavos) {
            $this->saldoEmCentavos -= $valorASacar;
        }
    }


    public function setSaldoEmCentavos(int $saldoEmCentavos): void
    {
        $this->saldoEmCentavos = $saldoEmCentavos;
    }
    public function getSaldoEmCentavos(): int
    {
        return $this->saldoEmCentavos;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }
    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }
    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}