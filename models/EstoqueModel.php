<?php

Class EstoqueModel
{
public $idprodutos, $nome, $descricao, $quantidade, $preco, $categoria;
public $rows; 

public $id,$namepessoa,$email,$senha;

public function save()
{
include_once 'dao/EstoqueDAO.php';
$dao= new EstoqueDAO();
if (empty($this->idprodutos))
    {
        $dao ->insert($this);


    }

    else

    {
        $dao ->update($this);
        
    }

    $dao ->insert($this);

}
public function getAllRows()
{
include_once 'dao/EstoqueDAO.php';
$dao= new EstoqueDAO();
$this->rows=$dao->select();
}
public function getById(int $idprodutos)
{

    include 'dao/EstoqueDAO.php';
    $dao= new EstoqueDAO();
    $obj=$dao->selectById($idprodutos); 

    return($obj) ? $obj:new EstoqueModel();

    
}


}
