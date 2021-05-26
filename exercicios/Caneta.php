<?php
class Caneta {
    public $modelo; 
    private $cor;
    private $ponta;
    private $tampada;
    
    public function __construct($m, $c, $p) {
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }
    
    public function getModelo(){
       return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }
    
    public function rabiscar(){
        if ($this->tampada == true) {
            echo "<p>ERRO! Não posso rabiscar!<p/>";
        }else{
            echo "<p>Estou rabiscando...</p>";
        }        
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
}
