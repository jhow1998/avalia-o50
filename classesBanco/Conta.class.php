<?php

class Conta{

    public $agencia;
    public $codigo; 
    public $dataDeCriação; 
    public $titula; 
    public $senha;  
    public $cancelada;
    
    //metodo retirar

    public function __construct($agencia,$codigo,$dataDeCriacao,$titula,$senha,$saldo){

        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->dataDeCriacao = $dataDeCriacao;
        $this->titula = $titula;
        $this->senha = $senha;
        

        //chama de metodos 
        $this->depositar($saldo);
        $this->cancelada = false;


    }

    function __destruct(){

        echo "Objeto conta {$this->codigo} de {$this->titula->nome} finalizada....<br>";
    }



    public function retirar($quantia){
        if($quantia > 0 ){
            $this->saldo -= $quantia;
        }
    }

    //metodo depositar
    public function depositar($quantia){
        if($quantia > 0 ){
            $this->saldo += $quantia;
        }
    }


    //metodo depositar
    public function obterSaldo() {

      return $this->saldo; 
       
    }


}



?>