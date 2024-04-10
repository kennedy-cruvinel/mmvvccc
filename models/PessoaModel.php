<?php
Class PessoaModel
{
 
public $id,$namepessoa,$email,$senha;




public function savepessoa(){
    include_once 'dao/EstoqueDAO.php';
    $dao= new EstoqueDAO();
    $dao ->insertpessoas($this);
    
}

public function validalogin(){
    include_once 'dao/EstoqueDAO.php';
    $dao= new EstoqueDAO();
    $dao->validalogins($this);

}

}