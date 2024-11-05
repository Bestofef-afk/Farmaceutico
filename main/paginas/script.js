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
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    // Calcula o próximo índice
    currentIndex = (currentIndex + direction + totalItems) % totalItems;

    // Move o carrossel
    document.querySelector('.carousel-inner').style.transform = `translateX(-${currentIndex * 33.33}%)`;
}
