const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

hamburger.addEventListener('click', () => {
    // Alterna a exibição do menu
    if (navMenu.style.display === 'flex') {
        navMenu.style.display = 'none';
    } else {
        navMenu.style.display = 'flex';
    }
});

// Fechar o menu ao clicar fora dele
window.addEventListener('click', (event) => {
    if (!hamburger.contains(event.target) && !navMenu.contains(event.target)) {
        navMenu.style.display = 'none';
    }
});