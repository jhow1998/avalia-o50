<?php

class ContaCorrente extends Conta{
    
    public $limite;


    function __construct($agencia,$dataDeCriacao,$titula,$senha,$saldo,$limite){
        parent::__construct($agencia,$codigo,$dataDeCriacao,$titula,$senha,$saldo);
        $this->limite = $limite;
    }

    function retirar($quantia){
        $cpmf = 0.05;

        if($this->saldo + $this->limite >= $quantia){
            parent::retirar($quantia);
            parent::retirar($quantia * $cpmf);
        }else{
            echo "retirada não permitida";
            return false;
        }
            return true;
    }
}


?>