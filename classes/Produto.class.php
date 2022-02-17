<?php

class Produto{

    public $Codigo;
    public $Descricao;
    public $Preco;
    public $Quantidade;


    public function ImprimiEtiqueta(){
        print 'Código:'.$this->Codigo.'<br>';
        print 'Descrição:'.$this->Descricao.'<br><br>';
    }

}



?>