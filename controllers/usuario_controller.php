<?php

function usuarioController(){
    echo "6. Controller recebeu a requisição <br>";
    $usuario = usuarioService();
    echo "8. Controller recebeu os dados do service.<br>";
    echo "Usuarios encontrados:<br>";
    foreach ($usuario as $usuario){
        echo "- ", $usuario . "<br>";
    }
    
}