<?php

function servidorHttp()
{
    echo "HTTP recebeu a requisição.<br>";

    // Representa a requisição recebida
    $requisicao = "GET/produtos?id=123";

    // Envia para o Middleware
    $resposta = middleware($requisicao);

    // Envia a resposta para o cliente
    echo "<br>HTTP enviou a resposta para o cliente:<br>";
    echo $resposta;
}