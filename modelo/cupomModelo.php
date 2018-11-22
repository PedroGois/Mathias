<?php
function pegarDesconto($NomeCupom) {

	$aux = "SELECT Desconto FROM cupom WHERE NomeCupom= '$NomeCupom'";
	$resultado = mysqli_query($cnx = conn(), $aux);

	if (!$resultado) {
		die("Erro: " . mysqli_error($cnx));
	}

	$desc = mysqli_fetch_array($resultado);

	return $desc;
}