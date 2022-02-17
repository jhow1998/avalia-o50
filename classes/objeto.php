<?php
    //insere a classe
    include_once '../classes/produto.class.php';

    //cria um objeto
    $produto1 = new Produto;
    $produto2 = new Produto;

    //atribuir valores
    $produto1->Codigo = 4001;
    $produto1->Descricao = 'CD - The Best of Eric Clapton ';

    $produto2->Codigo = 4003;
    $produto2->Descricao = 'Jogo - Sonic Riders Zero Gravity';

    //imprime informações de etiqueta
    $produto1->ImprimiEtiqueta();
    $produto2->ImprimiEtiqueta();



?>