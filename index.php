<?php

require_once "controller/CategoriaController.php";

//ROTAS -

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}


switch ($acao){
    case 'index':
        $cat = new CategoriaController();
        $cat->principal();
        exit;
}




