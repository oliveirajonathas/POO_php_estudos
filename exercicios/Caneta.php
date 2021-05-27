<?php
class Caneta {
    public $modelo; 
    private $cor;
    private $ponta;
    private $tampada;
    function __construct($modelo, $cor, $tampada) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->setTampada($tampada);
    }
    function getModelo() {
        return $this->modelo;
    }

    function getCor() {
        return $this->cor;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getTampada() {
        return $this->tampada;
    }

    function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    function setCor($cor): void {
        $this->cor = $cor;
    }

    function setPonta($ponta): void {
        $this->ponta = $ponta;
    }

    function setTampada($tampada): void {
        $this->tampada = $tampada;
    }


}
