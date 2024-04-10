<?php
class EstoqueController
{
    public static function index()
    {
        include 'models/EstoqueModel.php';
        $model = new EstoqueModel();
        $model->getAllRows();
        include 'views/modules/Estoque/ListaEstoque.php';
    }

    public static function form()
    {
        include 'models/EstoqueModel.php';
        $model = new EstoqueModel();

        if (isset($_GET['idprodutos']))
            $model = $model->getById((int)$_GET['idprodutos']);
        include 'views/modules/Estoque/FormEstoque.php';
    }

    public static function save()
    {
        include 'models/EstoqueModel.php';

        $model = new EstoqueModel();

        $model->idprodutos =  $_POST['idprodutos'];
        $model->nome = $_POST['nome'];
        $model->descricao = $_POST['descricao'];
        $model->quantidade = $_POST['quantidade'];
        $model->preco = $_POST['preco'];
        $model->categoria = $_POST['categoria'];
        $model->save();
        header("Location: /estoque");
    }

    public static function login(){
        include 'models/Estoquemodel.php';

        $model = new EstoqueModel();

        $model->namepessoa = isset($_POST['namepessoa']) ? $_POST['namepessoa'] : null;
        $model->email = isset($_POST['email']) ? $_POST['email'] : null;
        $model->senha = isset($_POST['senha']) ? $_POST['senha'] : null;
        $model->savepessoas();
        include 'views/modules/Pessoa/cadastro.php';

        header("location: /pessoa");
    }
}
?>
