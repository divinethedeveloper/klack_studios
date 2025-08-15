function toggle_items(item_name) {
    const elements = document.getElementsByClassName(item_name);
    for (let i = 0; i < elements.length; i++) {
        elements[i].classList.toggle("active");
    }
}

window.onload = function () {
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
        load_animation();
    }, 1500);
};

function togglePanel() {
    const panel = document.getElementById('sidePanel');
    if (panel) {
        panel.classList.toggle('open');
    }
}

window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    if (navbar) {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }
});

function load_animation() {
    toggle_items('hero-content');
    toggle_items('hero-subtitle');
    toggle_items('btn');
    console.log("animation done");
}
