<?php

function produtoController($parametros)
{
    echo "6. Controller recebeu a requisição.<br>";

    // Chama o Service
    $produtos = produtoService();

    // Service forneceu os produtos
    echo "7. Service forneceu os produtos.<br>";

    // Cria a resposta
    $resposta = "8. Produtos encontrados:<br>";

    // Mostra os produtos
    foreach ($produtos as $produtos) {
        $resposta .= "---> " . $produtos . "<br>";
    }

    return $resposta;
}