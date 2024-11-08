<?php
session_start();
require_once("navbar.php");

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
    <link rel="stylesheet" href="index.css">
    
</head>

<body>

   

    <!-- Carrossel de Promoções -->
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="promo1.jpg" alt="Promoção 1">
            </div>
            <div class="carousel-item">
                <img src="promo2.jpg" alt="Promoção 2">
            </div>
            <div class="carousel-item">
                <img src="promo3.jpg" alt="Promoção 3">
            </div>
        </div>
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>

    <!-- Grade de Produtos -->
    <div class="product-grid">
        <?php 
        $products = [
        
            ['name' => 'Produto 1', 'price' => '29.90', 'image' => '../imagens/produtos/aguaoxigenada.webp'],
            ['name' => 'Produto 2', 'price' => '19.90', 'image' => '../imagens/produtos/alcoolSpray.webp'],
            ['name' => 'Produto 3', 'price' => '39.90', 'image' => '../imagens/produtos/amoxicilina.webp'] ,
            ['name' => 'Produto 4', 'price' => '29.90', 'image' => '../imagens/produtos/anador.webp'],
            ['name' => 'Produto 5', 'price' => '29.90', 'image' => '../imagens/produtos/ApracurDuo.webp'],
            ['name' => 'Produto 6', 'price' => '19.90', 'image' => '../imagens/produtos/apresolinaHidralazina.webp'],
            ['name'=> 'Produto 7', 'price'=> '39.90', 'image'=> '../imagens/produtos/autotesteCovid.webp'],
            ['name'=> 'Produto 8', 'price'=> '39.90', 'image'=> '../imagens/produtos/bezafibrato.webp'],
            ['name'=> 'Produto 9', 'price'=> '39.90', 'image'=> '../imagens/produtos/BolsaDeAguaquente.webp'],
            ['name'=> 'Produto 10', 'price'=> '39.90', 'image'=> '../imagens/produtos/bromazepam.webp'],
            ['name'=> 'Produto 11', 'price'=> '39.90', 'image'=> '../imagens/produtos/buscofem.webp'],
            ['name'=> 'Produto 12', 'price'=> '39.90', 'image'=> '../imagens/produtos/buscopan.webp'],
            ['name'=> 'Produto 13', 'price'=> '39.90', 'image'=> '../imagens/produtos/cefadrin.webp'],
            ['name'=> 'Produto 14', 'price'=> '39.90', 'image'=> '../imagens/produtos/cimegripe.webp'],
            ['name'=> 'Produto 15', 'price'=> '39.90', 'image'=> '../imagens/produtos/ciprofibrato.webp'],
            ['name'=> 'Produto 16', 'price'=> '39.90', 'image'=> '../imagens/produtos/compressaDeGaze.webp'],
            ['name'=> 'Produto 17', 'price'=> '39.90', 'image'=> '../imagens/produtos/curativoHidrocoloide.webp'],
            ['name'=> 'Produto 18', 'price'=> '39.90', 'image'=> '../imagens/produtos/decipraxOxalato.webp'],
            ['name'=> 'Produto 19', 'price'=> '39.90', 'image'=> '../imagens/produtos/deprasil.webp'],
            ['name'=> 'Produto 20', 'price'=> '39.90', 'image'=> '../imagens/produtos/desloratadina.webp'],
            ['name'=> 'Produto 21', 'price'=> '39.90', 'image'=> '../imagens/produtos/desodorantevichy.webp'],
            ['name'=> 'Produto 22', 'price'=> '39.90', 'image'=> '../imagens/produtos/dexalgen.webp'],
            ['name'=> 'Produto 23', 'price'=> '39.90', 'image'=> '../imagens/produtos/diazepam.webp'],
            ['name'=> 'Produto 24', 'price'=> '39.90', 'image'=> '../imagens/produtos/dipirona.webp'],
            ['name'=> 'Produto 25', 'price'=> '39.90', 'image'=> '../imagens/produtos/dorflex.webp'],
            ['name'=> 'Produto 26', 'price'=> '39.90', 'image'=> '../imagens/produtos/doril.webp'],
            ['name'=> 'Produto 27', 'price'=> '39.90', 'image'=> '../imagens/produtos/Esalerg.webp'],
            ['name'=> 'Produto 28', 'price'=> '39.90', 'image'=> '../imagens/produtos/esomeprazol.webp'],
            ['name'=> 'Produto 29', 'price'=> '39.90', 'image'=> '../imagens/produtos/esparadrapo.webp'],
            ['name'=> 'Produto 30', 'price'=> '39.90', 'image'=> '../imagens/produtos/extratodepropolis.webp'],
            ['name'=> 'Produto 31', 'price'=> '39.90', 'image'=> '../imagens/produtos/fendizoatoDeCloperastina.webp'],
            ['name'=> 'Produto 32', 'price'=> '39.90', 'image'=> '../imagens/produtos/fitaMicroporosa.webp'],
            ['name'=> 'Produto 33', 'price'=> '39.90', 'image'=> '../imagens/produtos/floralDeBach.webp'],
            ['name'=> 'Produto 34', 'price'=> '39.90', 'image'=> '../imagens/produtos/grip7.webp'],
            ['name'=> 'Produto 35', 'price'=> '39.90', 'image'=> '../imagens/produtos/inalador.webp'],
            ['name'=> 'Produto 36', 'price'=> '39.90', 'image'=> '../imagens/produtos/insulina.webp'],
            ['name'=> 'Produto 37', 'price'=> '39.90', 'image'=> '../imagens/produtos/losartanaeHidroclorotiazida.webp'],
            ['name'=> 'Produto 38', 'price'=> '39.90', 'image'=> '../imagens/produtos/luftalGel.webp'],
            ['name'=> 'Produto 39', 'price'=> '39.90', 'image'=> '../imagens/produtos/maxalginaDipirona.webp'],
            ['name'=> 'Produto 40', 'price'=> '39.90', 'image'=> '../imagens/produtos/monitordepressão.webp'],
            ['name'=> 'Produto 41', 'price'=> '39.90', 'image'=> '../imagens/produtos/multigrip.webp'],
            ['name'=> 'Produto 42', 'price'=> '39.90', 'image'=> '../imagens/produtos/naireBilastina.webp'],
            ['name'=> 'Produto 43', 'price'=> '39.90', 'image'=> '../imagens/produtos/naldeconMulti.webp'],
            ['name'=> 'Produto 44', 'price'=> '39.90', 'image'=> '../imagens/produtos/neosaldina.webp'],
            ['name'=> 'Produto 45', 'price'=> '39.90', 'image'=> '../imagens/produtos/omeprasol.webp'],
            ['name'=> 'Produto 46', 'price'=> '39.90', 'image'=> '../imagens/produtos/oximetro.webp'],
            ['name'=> 'Produto 47', 'price'=> '39.90', 'image'=> '../imagens/produtos/permetrina.webp'],
            ['name'=> 'Produto 48', 'price'=> '39.90', 'image'=> '../imagens/produtos/prednisona.webp'],
            ['name'=> 'Produto 49', 'price'=> '39.90', 'image'=> '../imagens/produtos/rinosoro.webp'],
            ['name'=> 'Produto 50', 'price'=> '39.90', 'image'=> '../imagens/produtos/risperidona.webp'],
            ['name'=> 'Produto 51', 'price'=> '39.90', 'image'=> '../imagens/produtos/rivaroxabana.webp'],
            ['name'=> 'Produto 52', 'price'=> '39.90', 'image'=> '../imagens/produtos/soroFisiologico.webp'],
            ['name'=> 'Produto 53', 'price'=> '39.90', 'image'=> '../imagens/produtos/sprayparagarganta.webp'],
            ['name'=> 'Produto 54', 'price'=> '39.90', 'image'=> '../imagens/produtos/suplementoAlimentar.webp'],
            ['name'=> 'Produto 55', 'price'=> '39.90', 'image'=> '../imagens/produtos/telmisartana.webp'],
            ['name'=> 'Produto 56', 'price'=> '39.90', 'image'=> '../imagens/produtos/TermometroDigital.webp'], 
            ['name'=> 'Produto 57', 'price'=> '39.90', 'image'=> '../imagens/produtos/tornozeleira.webp'],
            ['name'=> 'Produto 58', 'price'=> '39.90', 'image'=> '../imagens/produtos/traumacAerossol.webp'],
            ['name'=> 'Produto 59', 'price'=> '39.90', 'image'=> '../imagens/produtos/tylenol.webp'],
            ['name'=> 'Produto 60', 'price'=> '39.90', 'image'=> '../imagens/produtos/valsartana.webp'],
            ['name'=> 'Produto 61', 'price'=> '39.90', 'image'=> '../imagens/produtos/vitaminaD.webp'],
        ];

        foreach ($products as $product) {
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
        ?>
    </div>

    <script src="script.js"></script>

    <footer>
        <p>&copy; 2024 Farmácia Online</p>
    </footer>

</body>
</html>
