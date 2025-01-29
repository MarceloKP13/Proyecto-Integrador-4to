document.getElementById("btn__registrarse").addEventListener("click", register);
document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("eye_icon_login").addEventListener("click", mostrarContrasenaLogin);
document.getElementById("eye_icon_register").addEventListener("click", mostrarContrasenaRegister);
window.addEventListener('load', anchoPagina);
window.addEventListener('resize', anchoPagina);

// Variables
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

function mostrarContrasenaLogin() {
    var passwordField = document.getElementById('contrasena_login');
    var eyeIcon = document.getElementById('eye_icon_login');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    }
}

function mostrarContrasenaRegister() {
    var passwordField = document.getElementById('contrasena_register');
    var eyeIcon = document.getElementById('eye_icon_register');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    }
}

function anchoPagina() {
    if (window.innerWidth > 850) {
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
    } else {
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
        contenedor_login_register.style.left = "0px";
        contenedor_login_register.style.top = "0px";
    }
}

function register() {
    formulario_register.style.display = "block";
    formulario_login.style.display = "none";
    caja_trasera_register.style.display = "block";
    caja_trasera_login.style.display = "none";
    contenedor_login_register.style.left = "410px";
}

function iniciarSesion() {
    formulario_register.style.display = "none";
    formulario_login.style.display = "block";
    caja_trasera_register.style.display = "none";
    caja_trasera_login.style.display = "block";
    contenedor_login_register.style.left = "0px";
}