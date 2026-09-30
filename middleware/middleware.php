<?php

function middleware($rota){
    echo "2. Middleware está verificando a r    equisição.<br>";
    $permitido = true;

    if ($permitido){
        echo "3. Middleware permitiu continuar.<br>";
        $resposta= router(); 
        return $resposta; //mostra a resposta

    } else {
        echo "3. Middleware bloqueou a requisição.<br>";
    }
}