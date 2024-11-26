<?php
session_start();
require_once("navbar.php");
require_once("produtos.php");
// Inclui o arquivo de produtos

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
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>

  <!-- Carrossel de Promoções -->
<div class="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../imagens/produtos/banner1.png" alt="Promoção 1">
        </div>
        <div class="carousel-item">
            <img src="../imagens/produtos/banner2.png" alt="Promoção 2">
        </div>
        <div class="carousel-item">
            <img src="../imagens/produtos/banner3.png" alt="Promoção 3">
        </div>
    </div>
    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>
    
    <!-- Indicadores -->
    <div class="indicators">
        <span class="indicator active" onclick="currentSlide(0)"></span>
        <span class="indicator" onclick="currentSlide(1)"></span>
        <span class="indicator" onclick="currentSlide(2)"></span>
    </div>
</div>

<?php
// Exibir a navegação das categorias
echo '<nav class="cnav"><ul>';
foreach ($categorias as $categoria => $produtos) {
    echo '<li><a href="#' . strtolower($categoria) . '">' . $categoria . '</a></li>';
}
echo '</ul></nav>';

// Exibir produtos por categoria
foreach ($categorias as $categoria => $produtos) {
    // Exibir a seção para cada categoria
    echo '<section id="' . strtolower($categoria) . '">';
    echo "<h2 class='categoria-title'>$categoria</h2>";
    echo "<div class='product-grid'>";
    
    // Exibir os produtos dentro da categoria
    foreach ($produtos as $product) {
        ?>
        <div class="product-card">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <h2><?php echo $product['name']; ?></h2>
            <p class="price">R$ <?php echo $product['price']; ?></p>
            <form method="POST">
                <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
            </form>
        </div>
        <?php
    }
    echo "</div></section>";
}
?>

      

 
  

    
    <script src="script.js"></script>
    <footer>
    <?php include_once("footer.php"); ?>
    </footer>
    
</body>
</html>
