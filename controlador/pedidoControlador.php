<?php

require "modelo/pedidoModelo.php";
/** user */
function index() {
    $dados["pedidos"] = pegarTodosPedidos();
    exibir("pedido/listar", $dados);
}
/** user */
function comprar($total) {
        alert(adicionarPedido($total));
        redirecionar("pedido/index");
}
/** user */
function deletar($id) {
    alert(deletarPedido($id));
    redirecionar("Pedido/index");
}
/** user */
function editar($id) {
    if (ehPost()) {
        $NomeProd = $_POST["nome"];
        $Descricao = $_POST["descricao"];
        $Preco = $_POST["preco"];
        alert(editarPedido($id, $NomeProd, $Descricao, $Preco));
        redirecionar("Pedido/index");
    } else {
        $dados['pedido'] = pegarPedidoPorId($id);
        $dados['acao'] = "./pedido/editar/$id";
        exibir("pedido/formulario", $dados);
    }
}
/** user */
function visualizar($id) {
    $dados['pedido'] = pegarPedidoPorId($id);
    exibir("pedido/visualizar", $dados);
}