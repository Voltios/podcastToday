let showPassword = document.getElementById('ojo');
if (showPassword) {

    showPassword.addEventListener('click', function(event) {
        let contrasenya = document.getElementById('password');
        if (contrasenya.type === 'password') contrasenya.type = 'text';
        else contrasenya.type = 'password';
        event.preventDefault();
    });
}

let maxChar = document.getElementById('maxChar');
let texto = document.getElementById('textarea');
if (maxChar && texto) texto.addEventListener('keyup', function(e) {
    if (texto.value.length <= 500) {
        maxChar.style.color = "#191919";

        let total = 500;
        maxChar.innerText = total - texto.value.length + "";
    } else {
        maxChar.style.color = "#EE5873";
        e.preventDefault();
    }
});