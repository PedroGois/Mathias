    <meta charset="utf-8">
<h2>Listar Produtos Carrinho</h2>
<table class="table">
    <thead>
        <tr>
            <TH>IDPRODUTO</TH>
            <th>NOME</th> 
            <th>PREÇO</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php 
    if(isset($carrinho)) {
        $total=0;
        $bruto=0;
        foreach ($carrinho as $produto){ 
    ?>
    <tr>
        <td><?=$produto['CodProduto']?></td>        
        <td><?=$produto['NomeProd']?></td>
        <td><?=$produto['Preco']?></td>
        <?= 
        $bruto=$bruto + $produto['Preco'];
        ?>
        <td><a href="./carrinho/deletar/<?=$produto['CodProduto']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php 
        }

    }else{
        echo "<h1>Seu carrinho está vazio<h1>";
    }
    ?>
</table>
    <br><br>

<form method="POST" action="">
    
    <div class="form-group">
        <label for="cupom">Cupom</label>
        <input id="cupom" class="form-control" type="text" name="copum">
    </div>

    <input type="submit" name="cupom">
    <!-- <button type="submit" class="btn btn-primary">Usar</button> -->

</form>


   <?php

   $total=$bruto-$desconto;
   if (isset($carrinho)) {
            echo "O Total e da sua compra em reais é: ". $total;
            $pedido["PrecoTotal"]=$total;
    ?>
    <a href="./pedido/comprar/<?=$pedido['PrecoTotal']?>" class="btn btn-danger">Comprar</a>
<?php  
}
    ?>