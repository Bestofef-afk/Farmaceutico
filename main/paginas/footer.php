<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/footer.css">

</head>

<body>
    <footer>
        <div class="footer-container">
            <div class="footer-logo-section">
                <!-- Logotipo que dispara a música e o GIF ao ser clicado -->
                <img src="../imagens/logo3.png" alt="DD" class="footer-logo"
                    onclick="playMusicAndShowGif()">
                <p>Diamond Drugs - fundado pelo Dr. Kojima</p>
            </div>
            <nav>
                <ul class="footer-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="carrinho.php">Carrinho</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Farmaceuticos Diamond Drugs. Todos os direitos reservados.</p>
        </div>


        <audio id="footer-music" style="display: none;">
            <source src="../imagens/Produtos/Venom.mp3" type="audio/mpeg">

        </audio>
        <div id="fullscreen-gif">
            <img src="../imagens/venom-snake.gif" alt="GIF em tela cheia">
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>