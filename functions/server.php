<?php 
function servidorHttp(){
    echo "1. Servidor HTTP recebeu a requisição.<br>";
    $resposta = middleware(); //chama o middleware
    echo "<br>9-Servidor HTTP enviou a resposta para o cliente:<br>"; //servidor recebeu a resposta de outros componentes
    echo $resposta; //exibe a resposta
    
}