function togglePanel() {
    const panel = document.getElementById('sidePanel');
    panel.classList.toggle('open');
}

window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
