<?
function pegarDesconto($NomeCupom) {

		$aux = "SELECT desconto FROM pedido WHERE NomeCupom= '$NomeCupom'";
		$resultado = mysqli_query(conn(), $aux);
		$desc = mysqli_fetch_array($resultado);

    }
}