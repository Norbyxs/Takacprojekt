document.getElementById('goToTop').addEventListener('click', scrollToTop);
function scrollToTop() {
    window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
}