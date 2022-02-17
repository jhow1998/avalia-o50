<?php


class Pessoa{

    public $codigo;
    public $nome;
    public $altura;
    public $idade;
    public $nascimento;
    public $escolaridade;
    public $salario;


    //metodo destrutor

    function __construct($codigo,$nome,$altura,$idade,$nascimento,$escolaridade,$salario){

        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->nascimento = $nascimento;
        $this->escolaridade = $escolaridade;
        $this->salario = $salario;

    }

    function __destruct(){
        echo "Objeto {$this->nome} finalizando...<br>";
    }




    //metodo crescer
    public function crescer($centimentros){
        if($centimetros > 0){
            $this->altura += $centimetros;  
        }          
    }


    //metodo formar
    public function formar($titulacao){

        $this->escolaridade = $titulacao;        
    }


    //metodo formar
    public function envelhecer($anos){
        if($anos > 0){
            $this->idade += $anos;  
        }                 
    }


}

?>