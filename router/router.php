<?php
function router(){
    echo "2. Router está analisando a URL.<br>";
    $rota = "/usuarios";
    $parametros = "id=123";
    middleware($rota);
}