const formulario = document.querySelector("#form-horno");
const aviso = document.querySelector("#aviso-horno");

function validarFormulario(event) {
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if (nombre === "" || correo === "") {
        event.preventDefault();
        aviso.textContent = "Sin tu nombre y tu correo no anotamos el pedido.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    }
}