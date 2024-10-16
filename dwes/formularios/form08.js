var peticion = new Object();
const boton = document.getElementById("butEnviar");

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("butEnviar").addEventListener('click', enviarDatos);
    document.getElementById("nombre").value = "";
    document.getElementById("fecha").value = "";
    document.getElementById("bruto").value = "";
    document.getElementById("irpf").value = "";
    peticion.accion = 'cargar';
    postData("procesarForm08.php", {
        data: peticion
    }).then((data) => {
        document.getElementById('tbDatos').innerHTML = data.html;
    });
});

function editarDatos(pos) {
    const fila = document.querySelector('[data-pos="' + pos + '"]');
    const token = fila.getAttribute("data-token");
    const datos = JSON.parse(atob(token));
    document.getElementById("nombre").value = datos.nombre;
    document.getElementById("fecha").value = datos.fecha;
    document.getElementById("bruto").value = datos.bruto;
    document.getElementById("irpf").value = datos.irpf;
    peticion.pos = pos;
    boton.innerHTML = "Actualizar";
    boton.removeEventListener('click', enviarDatos)
    boton.addEventListener('click', actualizarDatos);
}

function enviarDatos() {
    peticion.pos = null;
    peticion.accion = "enviar";
    enviar();
}

function actualizarDatos() {
    boton.innerHTML = "Enviar";
    peticion.accion = "actualizar";
    enviar();
}

function enviar() {
    peticion.nombre = document.getElementById("nombre").value;
    peticion.fecha = document.getElementById("fecha").value;
    peticion.bruto = document.getElementById("bruto").value;
    peticion.irpf = document.getElementById("irpf").value;
    postData("procesarForm08.php", {
        data: peticion
    }).then((data) => {
        document.getElementById('tbDatos').innerHTML = data.html;
    });
}

function borrarDatos(pos) {
    const fila = document.querySelector('[data-pos="' + pos + '"]');
    peticion.token = fila.getAttribute("data-token");
    peticion.accion = "borrar";
    fila.remove();
    postData("procesarForm08.php", {
        data: peticion
    }).then((data) => {
        document.getElementById('tbDatos').innerHTML = data.html;
    });
}