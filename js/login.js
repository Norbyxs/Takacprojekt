/*const submit = document.querySelector(".loginbutton");
const loginmenu = document.querySelector(".login-menu");
const zavriet = document.querySelector(".zavriet2");

submit.addEventListener("click",()=>{
    loginmenu.style.display="flex"
})

zavriet.addEventListener("click",()=>{
    loginmenu.style.display="none"
})*/

const registrationForm = document.getElementById('registrationForm');
const registerButton = document.querySelector('.registerinputbtn');

registerButton.addEventListener('click', function(event) {
    event.preventDefault(); 

    const inputs = registrationForm.querySelectorAll('.registerinput');
    const consentCheckbox = document.getElementById('consentCheckbox');
    let allFieldsFilled = true;

    inputs.forEach(input => {
        if (input.value.trim() === '') {
            allFieldsFilled = false;
        }
    });

    if (allFieldsFilled) {
        if (consentCheckbox.checked) {
            showAlert('Registrácia prebehla úspešne!', 'green');
        } else {
            showAlert('Súhlas so spracovaním osobných údajov je povinný!', 'red');
        }
    } else {
        showAlert('Všetky polia sú povinné!', 'red'); 
    }
});

function showAlert(message, color) {
    const alertBox = document.createElement('div');
    alertBox.style.position = 'fixed';
    alertBox.style.top = "15%";
    alertBox.style.left = '50%';
    alertBox.style.transform = 'translate(-50%, -50%)';
    alertBox.style.padding = '20px';
    alertBox.style.backgroundColor = color;
    alertBox.style.color = 'white';
    alertBox.style.fontWeight = 'bold';
    alertBox.style.zIndex = '9999';
    alertBox.textContent = message;

    document.body.appendChild(alertBox);

    setTimeout(() => {
        document.body.removeChild(alertBox);
    }, 3000);
}
