<?php
session_start(); // Inicia a sessão

// Verifica se o carrinho já foi criado
// Se não existir, inicia um array vazio
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Loja Online</title>
</head>
<body>
    <h1>Bem-vindo à Diamond Drugs Farmaceuticos!!</h1>
    <h2>Produtos</h2>
    <ul>
        <!-- Exibe cada produto disponivel -->
        <li>
            Produto 1 - R$10.00
            <form action="produtos.php" method="post">
                <!-- Campos ocultos para enviar o nome e o preço do produto -->
                <input type="hidden" name="produto" value="Produto 1">
                <input type="hidden" name="preco" value="10.00">
                <input type="submit" value="Adicionar ao Carrinho"> <!-- Botão para adicionar ao carrinho -->
            </form>
        </li>
        <li>
            Produto 2 - R$20.00
            <form action="produtos.php" method="post">
                <input type="hidden" name="produto" value="Produto 2">
                <input type="hidden" name="preco" value="20.00">
                <input type="submit" value="Adicionar ao Carrinho">
            </form>
        </li>
    </ul>
    <a href="carrinho.php">Ver Carrinho</a> <!-- Link para visualizar o carrinho -->
</body>
</html>

