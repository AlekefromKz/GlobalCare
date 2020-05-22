const payButton = document.querySelector('#pay-button');
const pay = document.querySelector(".online-payment");
const payClose = document.querySelector(".payment-close");

payButton.addEventListener('click', toggleRegister);
payClose.addEventListener('click', toggleRegister);

function toggleRegister(){
    pay.classList.toggle("is-open");
}
