<?php
    require "./modelo/cupomModelo.php";

/** anon */
function index(){
    echo "blablab";
}
function Calcularcupom() {
    
    if (ehPost()) {
        $NomeCupom = $_POST["cupom"];
        $desconto = pegarDesconto($NomeCupom);
        return $desconto;
    }
}
 
?>