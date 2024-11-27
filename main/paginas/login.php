<?php
// Caminho para o arquivo JSON
$file = 'users.json';

// Verifica se o arquivo existe; se não, cria um vazio
if (!file_exists($file)) {
    file_put_contents($file, json_encode([]));
}

// Variável para mensagens de feedback
$message = '';

// Processar o formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Carrega os usuários do arquivo JSON
    $users = json_decode(file_get_contents($file), true);

    if (isset($_POST['register'])) {
        // Registro de novo usuário
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        // Verifica se o usuário já existe
        if (isset($users[$username])) {
            $message = "Usuário já existe.";
        } else {
            // Criptografa a senha e salva no arquivo JSON
            $users[$username] = password_hash($password, PASSWORD_DEFAULT);
            file_put_contents($file, json_encode($users));
            $message = "Conta criada com sucesso!";
        }
    } elseif (isset($_POST['login'])) {
        // Login de usuário existente
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if (isset($users[$username]) && password_verify($password, $users[$username])) {
            $message = "Login bem-sucedido! Bem-vindo, " . htmlspecialchars($username) . "!";
        } else {
            $message = "Credenciais inválidas.";
        }
    }
}
include_once("navbar.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Registro</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <!-- Header -->
    <header>
        <?php include_once("navbar.php"); ?>
    </header>

    <!-- Login Section -->
    <main class="login-body">
        <div class="login-container">
            <h2>Login e Registro</h2>
            <?php if ($message): ?>
                <p class="message"><?= htmlspecialchars($message) ?></p>
            <?php endif; ?>

            <!-- Formulário de Registro -->
            <form method="POST" class="login-form">
                <h3>Registrar</h3>
                <input type="text" name="username" placeholder="Usuário" required>
                <input type="password" name="password" placeholder="Senha" required>
                <button type="submit" name="register">Registrar</button>
            </form>

            <hr>

            <!-- Formulário de Login -->
            <form method="POST" class="login-form">
                <h3>Login</h3>
                <input type="text" name="username" placeholder="Usuário" required>
                <input type="password" name="password" placeholder="Senha" required>
                <button type="submit" name="login">Entrar</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <?php include_once("footer.php"); ?>
    </footer>
</body>
</html>
