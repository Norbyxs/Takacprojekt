const submit = document.querySelector(".loginbutton");
const register = document.querySelector(".register");
const loginmenu = document.querySelector(".login-menu");
const zavriet = document.querySelector(".zavriet");
const zavriet2 = document.querySelector(".zavriet2");

submit.addEventListener("click", () => {
    register.style.display = "flex"
})

zavriet.addEventListener("click", () => {
    register.style.display = "none"
})
zavriet2.addEventListener("click", () => {
    loginmenu.style.display = "none"
})
document.addEventListener('DOMContentLoaded', function () {
    const aregisterLink = document.querySelector('.aregister');
    const loginMenu = document.querySelector('.login-menu');
    const registerMenu = document.querySelector('.register');

    aregisterLink.addEventListener('click', function (event) {
        event.preventDefault();
        hideRegisterMenu();
        showLoginMenu();
    });

    function hideRegisterMenu() {
        registerMenu.style.display = 'none';
    }

    function showLoginMenu() {
        loginMenu.style.display = 'flex';
    }
});
document.addEventListener('DOMContentLoaded', function () {
    const aloginLink = document.querySelector('.alogin');
    const regMenu = document.querySelector('.register');
    const logMenu = document.querySelector('.login-menu');

    aloginLink.addEventListener('click', function (event) {
        event.preventDefault();
        hideLogMenu();
        showRegMenu();
    });

    function hideLogMenu() {
        logMenu.style.display = 'none';
    }

    function showRegMenu() {
        regMenu.style.display = 'flex';
    }
});

