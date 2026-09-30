<?php

function produtoController($parametros)
{
    echo "Recebendo a requisição.<br>";

    // Chama o Service
    $produtos = produtoService();

    // Service forneceu os produtos
    echo "Fornecendo os produtos.<br>";

    // Cria a resposta
    $resposta = "Produtos encontrados:<br>";

    // Mostra os produtos
    foreach ($produtos as $produtos) {
        $resposta .= "---> " . $produtos . "<br>";
    }

    return $resposta;
}