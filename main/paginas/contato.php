<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contato.css">
</head>
<body>
<main>
    <h2>Contato</h2>
    <p>Preencha o formulário abaixo para entrar em contato conosco:</p>
    <form action="processa_contato.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Seu e-mail" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX">
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" placeholder="Sua mensagem" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn">Enviar</button>
    </form>
</main>
</body>
</html>


<?php include('footer.php'); ?>
