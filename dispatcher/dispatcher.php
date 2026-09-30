<?php

function dispatcher($rota)
{

    echo "5. Dispatcher decidiu qual controller deve executar.<br>";
    if($rota === "/produto") {
    $resposta= produtoController(); //Chama o controller responsavel pelos produtos

    return $resposta; //retorna a resposta

    }
    return "Rota não encontrada"; //caso nao exista a rota
}