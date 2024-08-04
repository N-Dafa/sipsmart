function fadeOutElement() {
    const element = document.getElementById('removeBox');
    element.classList.add('fade-out');

    setTimeout(function() {
        element.remove();
    }, 1000);
}

setTimeout(fadeOutElement, 2000);