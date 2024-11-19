
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<footer>
    <div class="footer-container">
        <div class="footer-logo-section">
            <!-- Logotipo que dispara a música ao ser clicado -->
            <img src="../imagens/logo2.webp" alt="Farmácia XYZ" class="footer-logo" onclick="playMusic()">
            <p>Diamond Drugs - Recomendado pelo Dr. Kojima</p>
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

    <!-- Elemento de áudio escondido -->
    <audio id="footer-music" style="display: none;">
        <source src="../imagens/Produtos/venom.mp3" type="audio/mpeg">
        <!-- Não exibir nenhuma mensagem se o áudio não for suportado -->
    </audio>

    <!-- Script JavaScript -->
    <script>
        function playMusic() {
            // Seleciona o elemento de áudio
            const audio = document.getElementById('footer-music');
            
            // Verifica se o áudio está carregado
            if (audio) {
                // Reproduz a música e lida com erros de reprodução
                audio.play().catch(error => {
                    console.error("Erro ao reproduzir o áudio:", error);
                });
            }
        }
    </script>
</footer>



</body>
</html>
