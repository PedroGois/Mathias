<?php
	function rootAcess(){
		$linha = array();
		$arq = fopen("C:/wamp64/www/Mathias/servicos/confCnx.txt", "r");
		while (!feof($arq)) {
			$linha[] = trim(fgets($arq));
		}
		return $linha;
	}

?>