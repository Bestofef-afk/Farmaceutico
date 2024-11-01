<?php
session_start();
$total = 0;

// Remove produto do carrinho
if (isset($_POST['remove'])) {
    $index = $_POST['index'];
    unset($_SESSION['cart'][$index]);
    $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindexa o array
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <h1>Carrinho de Compras</h1>
        <a href="index.php">Continuar Comprando</a>
    </header>

    <div class="container">
        <div class="cart">
            <h2>Produtos no Carrinho</h2>
            <div id="cart-items">
                <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                    <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                        <div class="cart-item">
                            <span class="item-name"><?php echo $item['name']; ?></span>
                            <span class="item-price">R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></span>
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button type="submit" name="remove" class="btn-remove">Remover</button>
                            </form>
                        </div>
                        <?php $total += $item['price']; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Seu carrinho está vazio.</p>
                <?php endif; ?>
            </div>
            <div class="cart-total">
                Total: R$ <?php echo number_format($total, 2, ',', '.'); ?>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Farmácia Online</p>
    </footer>

</body>

</html>