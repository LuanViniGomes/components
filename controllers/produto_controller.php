<?php

function produtoController(){

    echo "6. Controller recebeu a requisição <br>";

    $produto = produtoService(); // O Controller chama o Service para obter os produtos
    echo "8. Controller recebeu os dados do service.<br>";
    echo "Produtos Encontrados:<br>"; //Resposta que é mostrada

    foreach ($produto as $produto){ //Percorre todos os produtos
        echo "- ", produto . "<br>"; //Coloca cada produto nas respostas
    }
    
}