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
