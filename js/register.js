const registerButton = document.querySelector('#register-button');
const register = document.querySelector(".register");
const registerClose = document.querySelector(".register-close");

registerButton.addEventListener('click', toggleRegister);
registerClose.addEventListener('click', toggleRegister);

function toggleRegister(){
    register.classList.toggle("is-close");
}
