<?php

function servidorHttp()
{
    // Servidor recebeu a requisição
    echo "1. Servidor HTTP recebeu a requisição.<br>";

    // Representa a requisição recebida
    $requisicao = "GET /produtos?id=123";

    // Envia para o Middleware
    $resposta = middleware($requisicao);

    // Envia a resposta para o cliente
    echo "<br>9. Servidor HTTP enviou a resposta para o cliente:<br>";
    echo $resposta;
}