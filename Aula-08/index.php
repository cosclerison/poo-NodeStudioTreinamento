<?php

/**
 * [Aula - 08 - Abstração]
 * 
 */

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($s)
    {
        return $this->saldo = $s;
    }

    abstract protected function Sacar($s);

    abstract protected function Depositar($s);
}

class Itau extends Banco {

    public function Sacar($s)
    {
        $this->saldo -= $s;
        echo "<hr> Sacou: " . $s; 
    }

    public function Depositar($d)
    {
        $this->saldo += $d;
        echo "<hr> Depositou: " . $d;
    }
}

$cliente = new Itau();
$cliente->setSaldo(1000);
echo "<hr> Saldo: " . $cliente->getSaldo();
$cliente->Sacar(250);
echo "<hr> Saldo:" . $cliente->getSaldo();
$cliente->Depositar(900);
echo "<hr> Saldo: " . $cliente->getSaldo();
