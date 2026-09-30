<?php

function router($requisicao)
{
    echo "Analisando a URL.<br>";

    $rota = "/produtos";
    $parametros = "id=123";

    // Envia para o Dispatcher
    $resposta = dispatcher($rota, $parametros);

    return $resposta;
}