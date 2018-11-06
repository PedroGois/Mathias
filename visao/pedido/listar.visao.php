    <meta charset="utf-8">
<h2>Listar Pedido</h2>

<table class="table">
    <thead>
        <tr>
            <th>CodPedido</th>
            <th>PRECO</th>
            <th>VIEW</th>
        </tr>
    </thead>
    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td><?=$pedido['CodPedido']?></td>        
        <td><?=$pedido['PrecoTotal']?></td>
        <td><a href="./pedido/visualizar/<?=$pedido['CodPedido']?>" class="btn btn-secondary">view</a></td>
    </tr>
    <?php endforeach; ?>
</table>

