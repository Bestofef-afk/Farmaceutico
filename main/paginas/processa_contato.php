<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Aqui você pode processar os dados, como enviar para um banco de dados ou enviar um e-mail
    $to = 'hefabod805@cpaurl.com';
    $subject = 'Novo Contato - Farmácia XYZ';
    $body = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Obrigado por entrar em contato, $nome. Sua mensagem foi enviada com sucesso!</p>";
    } else {
        echo "<p>Desculpe, houve um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.</p>";
    }
} else {
    echo "<p>Erro: Método de requisição inválido.</p>";
}
?>
