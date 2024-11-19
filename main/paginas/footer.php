<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <style>
        /* Contêiner do GIF escondido por padrão */
        #fullscreen-gif {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            visibility: hidden; /* Escondido inicialmente */
            opacity: 0; /* Invisível inicialmente */
            transition: opacity 2s ease, visibility 0.5s ease; /* Transição suave */
        }

        /* Faz o GIF preencher a tela inteira */
        #fullscreen-gif img {
            width: 100vw;
            height: 100vh;
            object-fit: cover; /* Preenche sem distorção */
        }

        /* Classe para mostrar o GIF */
        #fullscreen-gif.visible {
            visibility: visible; /* Tornar visível */
            opacity: 1; /* Totalmente opaco */
        }

        /* Estilo para bloquear a interação do usuário */
        .blocked {
            pointer-events: none;
            cursor: wait;
        }
    </style>
</head>
<body>
<footer>
    <div class="footer-container">
        <div class="footer-logo-section">
            <!-- Logotipo que dispara a música e o GIF ao ser clicado -->
            <img src="../imagens/logo2.webp" alt="Farmácia XYZ" class="footer-logo" onclick="playMusicAndShowGif()">
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
        <source src="../imagens/Produtos/Venom.mp3" type="audio/mpeg">
        <!-- Não exibir nenhuma mensagem se o áudio não for suportado -->
    </audio>

    <!-- Contêiner para o GIF -->
    <div id="fullscreen-gif">
        <img src="../imagens/venom-snake.gif" alt="GIF em tela cheia">
    </div>
</footer>

<script>
    function playMusicAndShowGif() {
            // Seleciona o elemento de áudio
            const audio = document.getElementById('footer-music');
            // Seleciona o contêiner do GIF
            const gifContainer = document.getElementById('fullscreen-gif');

            // Reproduz a música
            if (audio) {
                audio.play().catch(error => {
                    console.error("Erro ao reproduzir o áudio:", error);
                });
            }

            // Mostra o GIF
            if (gifContainer) {
                gifContainer.classList.add('visible');

                // Bloqueia a interação do usuário enquanto o GIF está sendo exibido
                document.body.classList.add('blocked');

                // Cria um event listener para capturar todos os eventos de teclado e mouse
                const blockEvents = function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                };

                // Adiciona o event listener aos elementos do documento
                document.addEventListener('keydown', blockEvents);
                document.addEventListener('mousedown', blockEvents);

                // Remove o GIF após 5 segundos (ou outro tempo desejado)
                setTimeout(() => {
                    gifContainer.classList.remove('visible');
                    document.body.classList.remove('blocked');

                    // Remove o event listener
                    document.removeEventListener('keydown', blockEvents);
                    document.removeEventListener('mousedown', blockEvents);
                }, 42000);
            }
        }
</script>
</body>
</html>