<?php
function router(){
    echo "2. Router está analisando a URL.<br>";
    $rota = "/produtos";
    $parametros = "id=123";

    $resposta = dispatcher($rota, $parametros); //envia a rota e parametros para o dispatcher
    return $resposta;
    }