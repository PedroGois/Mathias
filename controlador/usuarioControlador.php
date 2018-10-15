<?php

require_once "modelo/usuarioModelo.php";
/** user */
function index() {
     exibir("usuario/formulario");
}

/** user */
function listar($id) {
    $dados["usuario"] = pegarUsuarioPorId($id);
    exibir("usuario/listar", $dados);
}
/** anon */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarUsuario($nome, $email, $senha));
        redirecionar("usuario/index");
    } else {
        exibir("usuario/formulario");
    }
}
/** user */
function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("usuario/index");
}
/** user */
function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        alert(editarUsuario($id, $nome, $email));
        redirecionar("usuario/index");
    } else {
        $dados['usuario'] = pegarUsuarioPorId($id);
        $dados['acao'] = "./usuario/editar/$id";
        exibir("usuario/formulario", $dados);
    }
}
/** user */
function visualizar($id) {
    $dados['usuario'] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}