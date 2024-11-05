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
            <div class="card">
                <img src="produto4.jpg" alt="Produto 4">
                <h2>Produto 4</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 4">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto5.jpg" alt="Produto 5">
                <h2>Produto 5</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 5">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto6.jpg" alt="Produto 6">
                <h2>Produto 6</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 6">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto7.jpg" alt="Produto 7">
                <h2>Produto 7</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 7">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto8.jpg" alt="Produto 8">
                <h2>Produto 8</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 8">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto9.jpg" alt="Produto 9">
                <h2>Produto 9</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 9">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto10.jpg" alt="Produto 10">
                <h2>Produto 10</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 10">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto11.jpg" alt="Produto 11">
                <h2>Produto 11</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 11">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto12.jpg" alt="Produto 12">
                <h2>Produto 12</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 12">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto13.jpg" alt="Produto 13">
                <h2>Produto 13</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 13">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto14.jpg" alt="Produto 14">
                <h2>Produto 14</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 14">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto15.jpg" alt="Produto 15">
                <h2>Produto 15</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 15">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto16.jpg" alt="Produto 16">
                <h2>Produto 16</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 16">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto17.jpg" alt="Produto 17">
                <h2>Produto 17</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 17">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto18.jpg" alt="Produto 18">
                <h2>Produto 18</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 18">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto19.jpg" alt="Produto 19">
                <h2>Produto 19</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 19">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto20.jpg" alt="Produto 20">
                <h2>Produto 20</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 20">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto21.jpg" alt="Produto 21">
                <h2>Produto 21</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 21">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto22.jpg" alt="Produto 22">
                <h2>Produto 22</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 22">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto23.jpg" alt="Produto 23">
                <h2>Produto 23</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 23">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto24.jpg" alt="Produto 24">
                <h2>Produto 24</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 24">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto25.jpg" alt="Produto 25">
                <h2>Produto 25</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 25">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto26.jpg" alt="Produto 26">
                <h2>Produto 26</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 26">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto27.jpg" alt="Produto 27">
                <h2>Produto 27</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 27">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto28.jpg" alt="Produto 28">
                <h2>Produto 28</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 28">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto29.jpg" alt="Produto 29">
                <h2>Produto 29</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 29">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto30.jpg" alt="Produto 30">
                <h2>Produto 30</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 30">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto31.jpg" alt="Produto 31">
                <h2>Produto 31</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 31">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto32.jpg" alt="Produto 32">
                <h2>Produto 32</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 32">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto33.jpg" alt="Produto 33">
                <h2>Produto 33</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 33">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto34.jpg" alt="Produto 34">
                <h2>Produto 34</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 34">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto35.jpg" alt="Produto 35">
                <h2>Produto 35</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 35">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto36.jpg" alt="Produto 36">
                <h2>Produto 36</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 36">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto37.jpg" alt="Produto 37">
                <h2>Produto 37</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 37">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto38.jpg" alt="Produto 38">
                <h2>Produto 38</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 38">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto39.jpg" alt="Produto 39">
                <h2>Produto 39</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 39">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto40.jpg" alt="Produto 40">
                <h2>Produto 40</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 40">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto41.jpg" alt="Produto 41">
                <h2>Produto 41</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 41">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto42.jpg" alt="Produto 42">
                <h2>Produto 42</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 42">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto43.jpg" alt="Produto 43">
                <h2>Produto 43</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 43">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto44.jpg" alt="Produto 44">
                <h2>Produto 44</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 44">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto45.jpg" alt="Produto 45">
                <h2>Produto 45</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 45">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto46.jpg" alt="Produto 46">
                <h2>Produto 46</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 46">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto47.jpg" alt="Produto 47">
                <h2>Produto 47</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 47">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto48.jpg" alt="Produto 48">
                <h2>Produto 48</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 48">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto49.jpg" alt="Produto 49">
                <h2>Produto 49</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 49">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto50.jpg" alt="Produto 50">
                <h2>Produto 50</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 50">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto51.jpg" alt="Produto 51">
                <h2>Produto 51</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 51">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto52.jpg" alt="Produto 52">
                <h2>Produto 52</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 52">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto53.jpg" alt="Produto 53">
                <h2>Produto 53</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 53">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto54.jpg" alt="Produto 54">
                <h2>Produto 54</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 54">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto55.jpg" alt="Produto 55">
                <h2>Produto 55</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 55">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto56.jpg" alt="Produto 56">
                <h2>Produto 56</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 56">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto57.jpg" alt="Produto 57">
                <h2>Produto 57</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 57">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto58.jpg" alt="Produto 58">
                <h2>Produto 58</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 58">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto59.jpg" alt="Produto 59">
                <h2>Produto 59</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 59">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto60.jpg" alt="Produto 60">
                <h2>Produto 60</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 60">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-grid">
            <div class="card">
                <img src="produto61.jpg" alt="Produto 61">
                <h2>Produto 61</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 61">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto62.jpg" alt="Produto 62">
                <h2>Produto 62</h2>
                <p class="price">R$ 19,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 62">
                    <input type="hidden" name="product_price" value="19.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto63.jpg" alt="Produto 63">
                <h2>Produto 63</h2>
                <p class="price">R$ 39,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 63">
                    <input type="hidden" name="product_price" value="39.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
            <div class="card">
                <img src="produto64.jpg" alt="Produto 64">
                <h2>Produto 64</h2>
                <p class="price">R$ 29,90</p>
                <form method="POST">
                    <input type="hidden" name="product_name" value="Produto 64">
                    <input type="hidden" name="product_price" value="29.90">
                    <button type="submit" name="add_to_cart" class="btn-cart">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>







    <footer>
        <p>&copy; 2024 Farmácia Online</p>
    </footer>

</body>

</html>