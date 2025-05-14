<?php

class Conta {
    private $agencia;
    private $conta;
    private $saldo;

    public function depositar($valor){
        $this -> saldo += $valor;
    }

    public function sacar($valor){
        if ($this -> saldo >= $valor){
            $this -> saldo -= $valor;
        }
    }

    public function saldo(){
        return $this -> saldo;
    }

    function getAgencia(){
        return $this -> agencia;
    }

    function getConta(){
        return $this -> conta;
    }

    function getSaldo(){
        return $this -> saldo;
    }

    function setAgencia(){
        $this -> agencia = $agencia;
    }

    function setConta(){
        $this -> conta = $conta;
    }

    function setSaldo(){
        $this -> saldo = $saldo;
    }
}

?>