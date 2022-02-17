<?php

class ContaPoupanca extends Conta{
     
        public $aniversario;

        function __construct($agencia,$dataDeCriacao,$titula,$senha,$saldo,$aniversario){

            parent::__construct($agencia,$codigo,$dataDeCriacao,$titula,$senha,$saldo);
            $this->aniversario = $aniversario;
        }

     public function retirar($quantia){

        if($this->saldo >=$quantia){

            parent::retirar($quantia);
        }else{
            echo'retirada não pemitida...<br>';
            return false;
        }
        return true;
     }

}

?>
