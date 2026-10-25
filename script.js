const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");

let esDeDia = false;

function alternarModo() {
    cuerpo.classList.toggle("oscuro");

    esDeDia = !esDeDia;

    if (esDeDia) {
        botonModo.textContent = 'Modo noche 🌙';
    }else{
        botonModo.textContent = 'Modo día ☀️';
    }
    console.log("Cambiando de modo...");
}

botonModo.addEventListener("click", alternarModo);

const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");

function alternarMenu() {
    menu.classList.toggle("abierto");
}

botonMenu.addEventListener("click", alternarMenu);

const formularioPedido = document.querySelector("#form-pedido");
const avisoPedido = document.querySelector("#error-pedido");

formularioPedido.addEventListener("submit", function(event) {
    event.preventDefault();

    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();
    const telefono = document.querySelector("#telefono").value.trim();
    const mensaje = document.querySelector("#mensaje").value.trim();

    if (nombre === "") {
        avisoPedido.textContent = "Falta su nombre.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");

    } else if (correo.includes("@") === false) {
        avisoPedido.textContent = "Ingrese un correo que lleve @.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");

    } else if (telefono === "") {
        avisoPedido.textContent = "Ingrese su número de celular.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");

    } else if (mensaje === "") {
        avisoPedido.textContent = "Escriba su mensaje.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");

    } else {
        avisoPedido.textContent = "Solicitud enviada.";
        avisoPedido.classList.add("exito");
        avisoPedido.classList.remove("error");

        //formularioPedido.submit();
        HTMLFormElement.prototype.submit.call(formularioPedido);
    }
});

formularioPedido.addEventListener("submit", revisarPedido);