<?php

//ESSA PÁGINA NÃO PRECISA DE CSS E SÓ SERVE DE SCRIPT PARA ADICIONAR ITENS NO CARRINHO

session_start(); // Inicia a sessão para acessar o carrinho

// Verifica o método de requisição
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pega o nome do produto e o preço enviados pelo formulário
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];

    // Adiciona o produto ao carrinho na sessão
    // Cada item é um array com produto e preco
    $_SESSION['carrinho'][] = ['produto' => $produto, 'preco' => $preco];
}

// Após adicionar o produto, redireciona para a página inicial
header('Location: index.php');
exit(); // Finaliza o script
?>

