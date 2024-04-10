
<?php
class PessoaController
{

public static function indexpessoa(){
    include 'views/modules/Pessoa/Loginpessoa.php';
        
}

public static function formpessoa(){

    include 'views/modules/Pessoa/cadastro.php';
}

public static function savepessoa(){
include_once 'models/PessoaModel.php';
$model=new PessoaModel();
$model->namepessoa=$_POST['namepessoa'];
$model->email=$_POST['email'];
$model->senha=$_POST['senha'];

$model->savepessoa();
header("Location: /pessoa");
     
}

}