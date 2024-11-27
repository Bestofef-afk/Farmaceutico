<?php
session_start();

// Verifica se os detalhes do pagamento estão definidos na sessão
if (isset($_SESSION['payment_details'])) {
    $payment_method = $_SESSION['payment_details']['method'];

    // Limpa o carrinho após a compra
    unset($_SESSION['cart']);
} else {
    // Redireciona para o carrinho se a página for acessada diretamente
    header('Location: carrinho.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra Confirmada</title>
    <link rel="stylesheet" href="./css/styles.css"> <!-- CSS padrão -->
    <link rel="stylesheet" href="./css/sucesso.css"> <!-- CSS específico para a página -->
</head>

<body>

    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <div class="container">
        <div class="success">
            <h2>Compra Confirmada!</h2>
            <p>Obrigado por sua compra. O pagamento foi processado com sucesso.</p>
            <p>Forma de pagamento: <strong><?php echo ucfirst($payment_method); ?></strong></p>
            
            <!-- Mensagem sobre os itens removidos do carrinho -->
            <p>Todos os Itens estão a caminho!</p>
            
            <!-- Botões de ação -->
            <a href="index.php" class="btn-back">Voltar à Página Inicial</a>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>
