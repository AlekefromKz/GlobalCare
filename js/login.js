const loginButton = document.querySelector('#login-button');
const login = document.querySelector(".login");
const loginClose = document.querySelector(".login-close");

loginButton.addEventListener('click', toggleModal);
loginClose.addEventListener('click', toggleModal);

function toggleModal(){
    login.classList.toggle("is-open");
}

new WOW().init();



