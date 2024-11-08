<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar de Remédios</title>
  <link rel="stylesheet" href="navbar.css"> 
</head>
<body>

<!-- Header com a Navbar -->
<header>
  <div class="navbar">
    <!-- Logo -->
    <div class="logo">
      <a href="index.php">
        <img src="../imagens/logo.png" alt="Logo da Empresa"> <!-- Substitua 'logo.png' com o caminho do seu logo -->
      </a>
    </div>

    <!-- Links de Navegação -->
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="produtos.php?categoria=esteticos">Estéticos</a></li>
      <li><a href="produtos.php?categoria=medicinais">Medicinais</a></li>
      <li><a href="sobre.php">Sobre</a></li>
      <li><a href="contato.php">Contato</a></li>
      <li><a href="carrinho.php">Ir a o carrinho</a></li>
    </ul>
  </div>
</header>

</body>
</html>
