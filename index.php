<?php

include 'controllers/EstoqueController.php';


$url=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
require_once 'controllers/PessoaController.php';

switch($url)
{

case '/':
    echo "Pagina Inicial";
    break;
case '/estoque':
    EstoqueController::index();
    break;
case '/estoque/form':
    EstoqueController::form(); ;
     break;

case '/pessoa':
      PessoaController::indexpessoa();
        break;

case '/pessoa/form':
       PessoaController::formpessoa();
        break;


case '/pessoa/form/save':
        PessoaController::savepessoa();
        break;

case '/estoque/form/save';
EstoqueController::save();
        break;


        default:
        echo "FALHOU";
        break;
    

}



?>