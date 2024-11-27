<?php
session_start();

// Inicializa a variável de erro
$error_message = '';

// Verifica se o preço total está definido na sessão
if (isset($_SESSION['total_price'])) {
    $total_price = $_SESSION['total_price'];
} else {
    // Redireciona para o carrinho se o preço total não estiver definido
    header('Location: carrinho.php');
    exit();
}

// Processa o formulário de pagamento
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica o método de pagamento escolhido
    if (isset($_POST['payment_method'])) {
        $payment_method = $_POST['payment_method'];
        $_SESSION['payment_details'] = ['method' => $payment_method];

        // Armazena os detalhes do pagamento com base no método escolhido
        if ($payment_method == 'credit_card') {
            if (!empty($_POST['card_number']) && !empty($_POST['card_expiry']) && !empty($_POST['card_cvc'])) {
                $_SESSION['payment_details']['card_number'] = $_POST['card_number'];
                $_SESSION['payment_details']['card_expiry'] = $_POST['card_expiry'];
                $_SESSION['payment_details']['card_cvc'] = $_POST['card_cvc'];
            } else {
                $error_message = 'Por favor, preencha todos os campos do cartão de crédito.';
            }
        } elseif ($payment_method == 'paypal') {
            if (!empty($_POST['paypal_email'])) {
                $_SESSION['payment_details']['paypal_email'] = $_POST['paypal_email'];
            } else {
                $error_message = 'Por favor, insira seu e-mail do PayPal.';
            }
        } elseif ($payment_method == 'boleto') {
            // Simula a geração de um boleto com informações fictícias
            $_SESSION['payment_details']['boleto_info'] = 'Boleto gerado com sucesso!';
        } else {
            $error_message = 'Método de pagamento inválido.';
        }

        // Se não houver erro, redireciona para uma página de sucesso
        if (empty($error_message)) {
            header('Location: sucesso.php');
            exit();
        }
    } else {
        $error_message = 'Por favor, escolha um método de pagamento.';
    }
    include'navbar.php';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pagamento</title>
    <link rel="stylesheet" href="./css/registro.css">
</head>

<body>

    <div class="container">
        <div class="payment-registration">
            <h2>Escolha o Método de Pagamento</h2>

            <!-- Exibe erro, se houver -->
            <?php if ($error_message): ?>
                <p class="error-message"><?php echo $error_message; ?></p>
            <?php endif; ?>

            <!-- Exibe o preço final -->
            <p>Preço Total: <strong>R$ <?php echo number_format($total_price, 2, ',', '.'); ?></strong></p>

            <!-- Formulário de pagamento -->
            <form method="POST" action="">
                <div class="payment-method">
                    <label>
                        <input type="radio" name="payment_method" value="credit_card" required>
                        Cartão de Crédito
                    </label>
                    <label>
                        <input type="radio" name="payment_method" value="paypal">
                        PayPal
                    </label>
                    <label>
                        <input type="radio" name="payment_method" value="boleto">
                        Boleto Bancário
                    </label>
                </div>

                <!-- Campos do Cartão de Crédito -->
                <div class="payment-fields" id="credit_card_fields" style="display: none;">
                    <input type="text" name="card_number" placeholder="Número do Cartão" maxlength="19">
                    <input type="text" name="card_expiry" placeholder="Validade (MM/AA)" maxlength="5">
                    <input type="text" name="card_cvc" placeholder="CVC" maxlength="3">
                </div>

                <!-- Campos do PayPal -->
                <div class="payment-fields" id="paypal_fields" style="display: none;">
                    <input type="email" name="paypal_email" placeholder="E-mail do PayPal">
                </div>

                <!-- Campos do Boleto -->
                <div class="payment-fields" id="boleto_fields" style="display: none;">
                    <p>Você receberá um boleto por e-mail. O pagamento será confirmado assim que for processado.</p>
                </div>

                <button type="submit" class="btn-submit">Continuar para Pagamento</button>
            </form>
        </div>
    </div>

    <script>
        // Exibe os campos de pagamento baseados no método selecionado
        const creditCardFields = document.getElementById('credit_card_fields');
        const paypalFields = document.getElementById('paypal_fields');
        const boletoFields = document.getElementById('boleto_fields');

        const paymentMethodRadios = document.querySelectorAll('input[name="payment_method"]');
        
        paymentMethodRadios.forEach((radio) => {
            radio.addEventListener('change', () => {
                const selectedMethod = document.querySelector('input[name="payment_method"]:checked').value;

                creditCardFields.style.display = 'none';
                paypalFields.style.display = 'none';
                boletoFields.style.display = 'none';

                if (selectedMethod === 'credit_card') {
                    creditCardFields.style.display = 'block';
                } else if (selectedMethod === 'paypal') {
                    paypalFields.style.display = 'block';
                } else if (selectedMethod === 'boleto') {
                    boletoFields.style.display = 'block';
                }
            });
        });

        // Aciona o evento de mudança no carregamento da página para exibir o método de pagamento selecionado
        document.querySelector('input[name="payment_method"]:checked')?.dispatchEvent(new Event('change'));
    </script>
<?php include'footer.php'; ?>
</body>

</html>
