
<?php
require_once "./servicos/CnxReadConf.php";
function conn() {
	$dados = rootAcess();
    $cnx = mysqli_connect($dados[0],"root","",$dados[1]);
    if (!$cnx) die('Deu errado a conexao!');

    mysqli_set_charset($cnx,"utf8");
    return $cnx;
}