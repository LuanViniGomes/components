<?php

function middleware($requisicao)
{
    echo "Verificando a requisição.<br>";
    $permitido = true;
    if ($permitido) {

        echo "Acesso Permitido.<br>";

        // Envia para o Router
        $resposta = router($requisicao);

        return $resposta;
    } else {
    return "Acesso bloqueado.";
    }

}