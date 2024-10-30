<?php
session_start(); // Inicia a sessão para acessar o carrinho

// Verifica se o carrinho está vazio
$carrinhoVazio = empty($_SESSION['carrinho']);

// Verifica se o método de requisição é POST e se foi solicitado remover um item
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remover'])) {
    $indexRemover = $_POST['remover']; // Pega o índice do item a ser removido
    if (isset($_SESSION['carrinho'][$indexRemover])) {
        unset($_SESSION['carrinho'][$indexRemover]); // Remove o item do carrinho
        $_SESSION['carrinho'] = array_values($_SESSION['carrinho']); // Reindexa o array para evitar buracos
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>
    
    <?php if ($carrinhoVazio): ?>
        <p>Seu carrinho está vazio.</p> <!-- Mensagem caso o carrinho não tenha itens -->
    <?php else: ?>
        <ul>
            <!-- Lista os itens do carrinho -->
            <?php foreach ($_SESSION['carrinho'] as $index => $item): ?>
                <li>
                    <?php echo htmlspecialchars($item['produto']); ?> - R$<?php echo htmlspecialchars($item['preco']); ?>
                    <!-- Formulário para remover o item -->
                    <form action="carrinho.php" method="post" style="display:inline;">
                        <input type="hidden" name="remover" value="<?php echo $index; ?>"> <!-- O índice do item a ser removido -->
                        <input type="submit" value="Remover"> <!-- Botão para remover o item -->
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <p>
            Total: R$ 
            <?php
            // Calcula o total do carrinho somando os preços dos produtos
            $total = array_sum(array_column($_SESSION['carrinho'], 'preco'));
            echo number_format($total, 2, ',', ''); // Formata o total para duas casas decimais
            ?>
        </p>
    <?php endif; ?>
    
    <a href="index.php">Voltar para a loja</a> <!-- Link para voltar à página inicial -->
</body>
</html>

