<?php 
require "./servicos/carrinhoServico.php";
require "./modelo/produtoModelo.php";
require "./modelo/cupomModelo.php";

/** anon */
function index(){
	if (ehPost()) {
		$NomeCupom = $_POST["cupom"];
		$desconto = pegarDesconto($NomeCupom);
		$dados["desconto"] = $desconto;
		
		$total = $total - $desconto;
	}

	if (!empty($_SESSION["carrinho"])) {
		$carrinho = $_SESSION["carrinho"];
		$dados["carrinho"] = pegarVariosProdutosPorId($carrinho);

		exibir("produto/carrinho",$dados);
	}else{
		exibir("produto/carrinho");
	}
}

/** anon */
function adicionar($id){
	addCarrinho($id);
	exibir("produto/index");
}	

/** anon */
function deletar($id){
	unset($_SESSION["carrinho"][$id]);
	redirecionar("carrinho/index");
}

?>


