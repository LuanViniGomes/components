<?php

function middleware($requisicao)
{
    echo "2. Middleware está verificando a requisição.<br>";
    $permitido = true;

    if ($permitido) {

        echo "3. Middleware permitiu continuar.<br>";

        // Envia para o Router
        $resposta = router($requisicao);

        return $resposta;
    }

    return "Acesso bloqueado.";
}