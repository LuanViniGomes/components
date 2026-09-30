<?php

function router($requisicao)
{
    echo "4. Router está analisando a URL.<br>";

    $rota = "/produtos";
    $parametros = "id=123";

    // Envia para o Dispatcher
    $resposta = dispatcher($rota, $parametros);

    return $resposta;
}