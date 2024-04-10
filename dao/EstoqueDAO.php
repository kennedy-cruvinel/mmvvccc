<?php
class EstoqueDAO
{
    private $conexao;
    Public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=mvc_patrick";
        $this->conexao = new PDO($dsn, 'root', '');
        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function insert(EstoqueModel $model)
    {
        $sql = "INSERT INTO produtos (nome, descricao, quantidade, preco, categoria) VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->quantidade);
        $stmt->bindValue(4, $model->preco);
        $stmt->bindValue(5, $model->categoria);
        $stmt->execute();
    }
    public function insertpessoas(PessoaModel $model)
    {
        $sql = "INSERT INTO usuarios (namepessoa, email, senha) VALUES (?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->namepessoa);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        $stmt->execute();

        
    }

    public function validalogins(PessoaModel $model)
    {
        $sql = "SELECT *FROM usuarios WHERE email=:email";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':email',$this->email);
        $stmt->execute();

        if($stmt->rowCount()){
            $result=$stmt->fetch();

            if($result['senha']===$this->senha){

                
            }


        }



    }

    
    public function update(EstoqueModel $model)
    {
        $sql = "UPDATE produtos SET nome=?, descricao=?, quantidade=?, preco=?, categoria=? WHERE idprodutos=?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->quantidade);
        $stmt->bindValue(4, $model->preco);
        $stmt->bindValue(5, $model->categoria);
        $stmt->bindValue(6, $model->idprodutos);
        $stmt->execute();
    }
    public function select()
    {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();   
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectById(int $idprodutos)
    {
        $sql = "SELECT * FROM produtos WHERE idprodutos=?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $idprodutos);
        $stmt->execute();
        return $stmt->fetchObject("EstoqueModel");
    }
    public function delete(int $idprodutos)
    {
        $sql ="DELETE FROM produtos WHERE idprodutos=?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $idprodutos);
        $stmt->execute();
    }
}
?>
