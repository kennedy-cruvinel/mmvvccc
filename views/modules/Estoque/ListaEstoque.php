<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem do Estoque</title>
</head>
<body>
<table>
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>DESCRIÇÃO</th>
    <th>QUANTIDADE</th>
    <th>PREÇO</th>
    <th>CATEGORIA</th>
</tr>
<?php foreach($model->rows as $item ): ?>
<tr>
<td><?=$item->idprodutos?></td>
<td>
    <a href="/estoque/form?id=<?=$item->idprodutos  ?>"><?=$item->nome?></a>

</td>
<td><?=$item->descricao?></td>
<td><?=$item->quantidade?></td>
<td><?=$item->preco?></td>
<td><?=$item->categoria?></td>
</tr>
<?php endforeach ?>
</table>
    
</body>
</html>