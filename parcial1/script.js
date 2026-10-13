const botonConfirmar = document.querySelector("#btn-confirmar");
const mensajeParrafo = document.querySelector("#mensaje");

function mostrarMensaje(){
    mensajeParrafo.textContent = "Encargo recibido - te atiende Ivan Limachi Mamani";
    mensajeParrafo.classList.remove("oculto");
}

botonConfirmar.addEventListener("click", mostrarMensaje);