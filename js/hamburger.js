document.addEventListener("DOMContentLoaded", function () {
    var navLinks = document.querySelector(".nav-links");
    var menuButton = document.querySelector(".fas.fa-bars");
    var closeButton = document.querySelector(".fas.fa-times");

    function showMenu() {
        navLinks.style.left = "65%";
    }

    function hideMenu() {
        navLinks.style.left = "100%";
    }

    menuButton.addEventListener("click", showMenu);
    closeButton.addEventListener("click", hideMenu);
});


