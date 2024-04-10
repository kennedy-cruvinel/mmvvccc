<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Produtos</legend>
        
        <form method="post"action="/estoque/form/save">

<input type="hidden" value="<?=$model->idprodutos?>" name="idprodutos"/>

        <label for="nome"> nome</label>
        <input id="nome" name="nome" value="<?=$model->nome?>"type="text">

        <label for="descricao"> descrição</label>
        <input id="descricao" name="descricao"value="<?=$model->descricao?>"type="text">


        <label for="quantidade"> quantidade</label>
        <input id="quantidade" name="quantidade"value="<?=$model->quantidade?>"type="text">


        <label for="preco"> preço</label>
        <input id="preco" name="preco"value="<?=$model->preco?>"type="text">


        <label for="categoria"> categoria</label>
        <input id="categoria" name="categoria"value="<?=$model->categoria?>"type="text">

        <button type="submit">Cadastrar</button>
        </form>
    </fieldset>
    
</body>
</html>