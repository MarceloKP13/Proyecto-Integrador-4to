// Obtener los botones
const btnIniciarSesion = document.getElementById("btn__iniciar-sesion");
const btnRegistrarse = document.getElementById("btn__registrarse");

// Obtener los formularios
const formularioLogin = document.querySelector(".formulario__login");
const formularioRegister = document.querySelector(".formulario__register");

// Obtener el contenedor de login/register
const contenedorLoginRegister = document.querySelector(".contenedor__login-register");

// Función para cambiar a la vista de registro
btnRegistrarse.addEventListener("click", () => {
    formularioLogin.style.display = "none";
    formularioRegister.style.display = "block";
    contenedorLoginRegister.style.left = "410px"; 
});

// Función para cambiar a la vista de inicio de sesión
btnIniciarSesion.addEventListener("click", () => {
    formularioLogin.style.display = "block";
    formularioRegister.style.display = "none";
    contenedorLoginRegister.style.left = "10px";
});