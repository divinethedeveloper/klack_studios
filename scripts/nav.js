 
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




window.onload = function() {
    let element = document.getElementsByClassName("preloader")[0];

    if (!element) return; // exit if preloader not found

    // Fade out
    setTimeout(() => {
        element.classList.add("active");
        console.log("window fully loaded");
    }, 1000);

    // Remove from DOM flow
    setTimeout(() => {
        element.classList.add("none");
    }, 2000);
};
