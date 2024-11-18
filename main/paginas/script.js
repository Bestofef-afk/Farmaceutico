let typedInput = '';

document.addEventListener('keypress', (event) => {
    typedInput += event.key;

    if (typedInput === 'snake') {
        window.location.href = 'https://youtu.be/DBzco6OqnOE?si=28cdkef5RZInklju'; // Change this to your desired URL
        typedInput = ''; // Reset the input after action
    } else if (typedInput.length > 5) {
        typedInput = ''; // Reset if more than 5 characters
    }
});

let currentIndex = 0;

function moveSlide(direction) {
    currentIndex += direction;
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    if (currentIndex < 0) {
        currentIndex = totalItems - 1;
    } else if (currentIndex >= totalItems) {
        currentIndex = 0;
    }

    updateCarousel();
}

function currentSlide(index) {
    currentIndex = index;
    updateCarousel();
}

function updateCarousel() {
    const items = document.querySelectorAll('.carousel-item');
    const indicators = document.querySelectorAll('.indicator');

    // Remove a classe 'active' de todas as imagens e indicadores
    items.forEach(item => item.classList.remove('active'));
    indicators.forEach(indicator => indicator.classList.remove('active'));

    // Adiciona a classe 'active' no item e indicador atuais
    items[currentIndex].classList.add('active');
    indicators[currentIndex].classList.add('active');
}

// Inicializa o carrossel
updateCarousel();

