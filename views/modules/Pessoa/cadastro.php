<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<fieldset>
    <legend>Cadastro de Produtos</legend>
    
    <form method="post" action="/pessoa/form/save">
        <input type="hidden" value="<?=$model->id?>" name="id"/>

        <label for="namepessoa">Nome</label>
        <input id="namepessoa" name="namepessoa" value="<?=$model->namepessoa?>" type="text">

        <label for="email">Email</label>
        <input id="email" name="email" value="<?=$model->email?>" type="text">

        <label for="senha">Senha</label>
        <input id="senha" name="senha" value="<?=$model->senha?>" type="password">

        <button type="submit">Cadastrar</button>
    </form>
</fieldset>
</body>
</html>
