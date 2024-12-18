
const menuBtn = document.querySelector(".menu-btn");
const upperLayer = document.querySelector(".upper-layer");
const lowerLayer = document.querySelector(".lower-layer");
const hiddenNavMenu = document.querySelector(".hidden-nav-menu");

const layers = [upperLayer, lowerLayer];
let isMenuBtnOpen = false;

menuBtn.addEventListener('click', () => {
    isMenuBtnOpen = isMenuBtnOpen ? false : true; // operation ternaire.
    layers.forEach(layer => { // changer l'état du menu entre = et x (si ouvert ou fermé).
        layer.classList.toggle("menuBtn-open", isMenuBtnOpen)
    });
    hiddenNavMenu.classList.toggle("visible");
})

function drop(dropbtn) {
    const isOpen = dropbtn.querySelector('.btn-icon').classList.toggle('drop');
    dropbtn.closest('.drop-btn').classList.toggle('drop', isOpen);
    dropbtn.closest('.drop-btn').nextElementSibling.classList.toggle('drop', isOpen);
}

let minLoadTime = 2900;

window.addEventListener('load', () => {
    let loadTime = performance.now();

    let remainingTime = Math.max(0, minLoadTime - loadTime);

    setTimeout(() => {
        document.querySelector('.loading').style.display = "none";
    }, remainingTime);
});