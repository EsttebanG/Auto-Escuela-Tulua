// JavaScript para cambiar las imágenes del logo y mostrar el botón de WhatsApp

// Función para cambiar la imagen del logo de la página
function cambiarLogoPagina() {
    var imagen = document.getElementById("logoPagina");
    imagen.src = "img/a.png"; // Ruta de la imagen del logo
}

// Función para mostrar el botón de WhatsApp
function mostrarBotonWhatsApp() {
    var boton = document.getElementById("botonWhatsApp");
    boton.style.display = "block"; // Mostrar el botón
}

// Llama a la función mostrarBotonWhatsApp() cuando se carga la página
window.onload = function() {
    mostrarBotonWhatsApp();
};
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('file-input');
    const userImage = document.getElementById('user-image');

    fileInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(event) {
            userImage.src = event.target.result;
        };

        reader.readAsDataURL(file);
    });
});
// Obtener el nombre del formulario
var nombreUsuario = document.getElementById("nombre").value;
// Redireccionar a la página de usuarios con el nombre como parámetro en la URL
window.location.href = "usuarios.html?nombre=" + encodeURIComponent(nombreUsuario);
// Obtener el nombre de la URL
var urlParams = new URLSearchParams(window.location.search);
var nombreUsuario = urlParams.get('nombre');

// Mostrar el nombre en el elemento HTML correspondiente
document.getElementById("user-name").textContent = nombreUsuario;
