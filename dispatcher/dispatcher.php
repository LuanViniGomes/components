<?php

function dispatcher($rota, $parametros)
{
    echo "5. Dispatcher decidiu qual controller deve executar.<br>";

    if ($rota == "/produtos") {

        // Chama o Controller de produtos
        $resposta = produtoController($parametros);

        return $resposta;
    }

    return "Rota não encontrada.";
}