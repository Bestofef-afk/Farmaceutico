<?php
session_start();

// Adiciona produto ao carrinho
if (isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Se não existir um carrinho, cria um
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Adiciona o produto ao carrinho
    $_SESSION['cart'][] = [
        'name' => $product_name,
        'price' => $product_price
    ];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia Online</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <h1>Farmácia Online</h1>
        <a href="carrinho.php">Ver Carrinho</a>
    </header>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto1.jpg" alt="Produto 1">
                <h2>Produto 1</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 1">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto2.jpg" alt="Produto 2">
                <h2>Produto 2</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 2">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto3.jpg" alt="Produto 3">
                <h2>Produto 3</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 3">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>
<script src="script.js"></script>
    <footer>
        <p>&copy; 2024 Farmácia Online</p>
    </footer>

</body>

</html>
