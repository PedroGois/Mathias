<?php
function pegarDesconto($NomeCupom) {

	$aux = "SELECT desconto FROM cupom WHERE NomeCupom= '$NomeCupom'";
	$resultado = mysqli_query($cnx = conn(), $aux);

	if (!$resultado) {
		die("Erro: " . mysqli_error($cnx));
	}

	$desc = mysqli_fetch_assoc($resultado);

	return $desc;
}