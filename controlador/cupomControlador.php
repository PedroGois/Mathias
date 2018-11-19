<?php
    require "./modelo/cupomModelo.php";

function Calcularcupom() {
    
    if (ehPost()) {
        $NomeCupom = $_POST["cupom"];
        $desconto = pegarDesconto($NomeCupom);

        echo $desconto;
    }
}
 
?>