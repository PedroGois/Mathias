
<?php
require_once "./servicos/CnxReadConf.php";
function conn() {
	$dados = rootAcess();
    $cnx = mysqli_connect($dados[0],$dados[1], $dados[2],$dados[3]);
    if (!$cnx) die('Deu errado a conexao!');

    mysqli_set_charset($cnx,"utf8");
    return $cnx;
}
