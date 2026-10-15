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

function revisarPedido(event){
    event.preventDefault();

    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;
    const telefono = document.querySelector("#telefono").value;

    if (nombre === "") {
        avisoPedido.textContent = "Falta su nombre.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }else if (correo.includes("@") === false){
        avisoPedido.textContent = "Ingrese un correo que lleve @."
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }else if (telefono === "") {
        avisoPedido.textContent = "Ingrese su número de celular.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    } else {
        avisoPedido.textContent = "Solicitud recibida";
        avisoPedido.classList.add("exito");
        avisoPedido.classList.remove("error");
    }
}