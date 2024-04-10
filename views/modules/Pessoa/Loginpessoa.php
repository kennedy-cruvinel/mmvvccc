<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="/estoque/form" method="POST">
        <p>
            <label for="email">Email</label>   
            <input type="text" id="email" name="email" value="<?=$model->email?>">
        </p>
        <p>
            <label for="senha">Senha</label>   
            <input type="password" id="senha" name="senha" value="<?=$model->senha?>">
        </p>
        <p>
            <button type="submit" name="entrar">Entrar</button>
        </p>
    </form>
</body>
</html>