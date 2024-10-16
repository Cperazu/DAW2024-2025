var peticion = new Object();
const boton = document.getElementById("butEnviar");

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("butEnviar").addEventListener('click', enviarDatos);
    limpiarForm();
    peticion.accion = 'cargar';
    postData("procesarForm07.php", {
        data: peticion
    }).then((data) => {
        document.getElementById('tbAgenda').innerHTML = data.html;
    });
});

function editarDatos(pos) {
    const fila = document.querySelector('[data-pos="' + pos + '"]');
    const token = fila.getAttribute("data-token");
    const datos = JSON.parse(atob(token));
    document.getElementById("nombre").value = datos.nombre;
    document.getElementById("edad").value = datos.edad;
    datos.sexo == "Mujer" ?
        document.getElementById("chkSexo2").checked = true
        :
        document.getElementById("chkSexo1").checked = true;
    document.getElementById("observaciones").value = datos.observaciones;
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
    limpiarForm();
}

function enviar() {
    peticion.nombre = document.getElementById("nombre").value;
    peticion.edad = document.getElementById("edad").value;
    peticion.chkSexo = document.getElementById("chkSexo1").checked ?
        document.getElementById("chkSexo1").value
        :
        document.getElementById("chkSexo2").value;
    peticion.observaciones = document.getElementById("observaciones").value;
    postData("procesarForm07.php", {
        data: peticion
    }).then((data) => {
        document.getElementById('tbAgenda').innerHTML = data.html;
    });
}

function borrarDatos(pos) {
    const fila = document.querySelector('[data-pos="' + pos + '"]');
    peticion.token = fila.getAttribute("data-token");
    peticion.accion = "borrar";
    fila.remove();
    postData("procesarForm07.php", {
        data: peticion
    }).then((data) => {
        document.getElementById('tbAgenda').innerHTML = data.html;
    });
}
function limpiarForm() {
    document.getElementById("nombre").value = "";
    document.getElementById("edad").value = "";
    document.getElementById("chkSexo2").checked = false;
    document.getElementById("chkSexo1").checked = false;
    document.getElementById("observaciones").value = "";
}