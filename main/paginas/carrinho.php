<?php
session_start();

// Inicializa a variável de total
$total = 0;

// Remove produto do carrinho
if (isset($_POST['remove'])) {
    $index = $_POST['index'];
    unset($_SESSION['cart'][$index]);
    $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindexa o array para garantir que o índice esteja correto
}

// Se o carrinho estiver vazio, redireciona o usuário de volta à página inicial
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
    header('Location: index.php'); // Redireciona para a página inicial se o carrinho estiver vazio
    exit();
}

// Calcula o total do carrinho
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $total += floatval($item['price']);
    }
}

// Armazena o total na sessão
$_SESSION['total_price'] = $total;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="./css/styles.css"> <!-- Link para o CSS -->
    <link rel="stylesheet" href="./css/carrinho.css">
</head>

<body>

    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <div class="container">
        <div class="cart">
            <h2>Produtos no Carrinho</h2>

            <!-- Lista de Produtos -->
            <div id="cart-items">
                <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                    <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                        <div class="cart-item">
                            <span class="item-name"><?php echo htmlspecialchars($item['name']); ?></span>
                            <span class="item-price">R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></span>

                            <!-- Formulário para remover o produto -->
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button type="submit" name="remove" class="btn-remove">Remover</button>
                            </form>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Seu carrinho está vazio.</p>
                <?php endif; ?>
            </div>

            <!-- Total -->
            <div class="cart-total">
                <h3>Total: R$ <?php echo number_format($total, 2, ',', '.'); ?></h3>
            </div>

            <!-- Botão de Comprar -->
            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                <div class="cart-actions">
                    <form method="POST" action="registro_pagamento.php">
                        <button type="submit" class="btn-buy">Comprar</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>
