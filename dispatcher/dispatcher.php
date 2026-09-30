<?php

function dispatcher($rota, $parametros)
{
    echo "Decidindo qual controller deve ser executado.<br>";

    if ($rota === "/produtos") {

        // Chama o Controller de produtos
        $resposta = produtoController($parametros);

        return $resposta;
    }

    return "Rota não encontrada.";
}