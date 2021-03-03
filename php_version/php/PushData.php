<?php
require_once('Interface_PushData.php');


class PushData implements Interface_PushData{
    private $callDb;
    private $nome;
    private $peso;
    private $altura;
    private $gorduraCorp;
    private $imc;

    public function sendData(){
        $query = "insert into clients (nome,peso,altura,gorduraCorp,imc) values ({$this->getNome()},{$this->getPeso()},{$this->getAltura()},{$this->getGorduraCorp()},{$this->getImc()});";

        $this->getCallDb()->ExecDb($query);
    }


    private function getCallDb(){
        return $this->callDb;
    }
    private function getNome(){
        return $this->nome;
    }
    private function getPeso(){
        return $this->peso;
    }
    private function getAltura(){
        return $this->altura;
    }
    private function getGorduraCorp(){
        return $this->gorduraCorp;
    }
    private function getImc(){
        return $this->imc;
    }

    private function setCallDb($c){
        $this->callDb = $c;
    }
    private function setNome($n){
        $this->nome = $n;
    }
    private function setPeso($p){
        $this->peso = $p;
    }
    private function setAltura($a){
        $this->altura = $a;
    }
    private function setGorduraCorp($g){
        $this->gorduraCorp = $g;
    }
    private function setImc($peso,$altura){
        $this->imc = $peso / ($altura * $altura);
    }

    function __construct($c,$n,$p,$a,$g){
        $this->setCallDb($c);
        $this->setNome($n);
        $this->setPeso($p);
        $this->setAltura($a);
        $this->setGorduraCorp($g);
        $this->setImc($p,$a);
    }
}