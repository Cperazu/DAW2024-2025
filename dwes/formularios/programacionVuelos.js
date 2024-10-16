var peticion = new Object();
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("selVuelos").addEventListener('change', cargarForm);
    peticion.accion = 'cargar';
    postData("programacionVuelos.php", {
        data: peticion
    }).then((data) => {
        let html = '<option value="">Seleccione...</option>';
        for (k in data.codigoVuelos) {
            html += '<option value="' + data.codigoVuelos[k] + '">' + data.codigoVuelos[k] + '</option>';
        }
        document.getElementById('selVuelos').innerHTML = html;
    });
});

function cargarForm() {
    peticion.accion = 'obtenerLlegadaSalida';
    peticion.codigoVuelo = document.getElementById("selVuelos").value;
    postData("programacionVuelos.php", {
        data: peticion
    }).then((data) => {
        peticion.tipo = data.tipo;
        if (data.tipo == 'llegadas') {
            obtenerHtml('formLlegadas.html').then(function (html) {
                document.getElementById("divForm").innerHTML = html;
            }).then(function () {
                obtenerDetallesVuelo();
            });
        } else {
            obtenerHtml('formSalidas.html').then(function (html) {
                document.getElementById("divForm").innerHTML = html;
            }).then(function () {
                obtenerDetallesVuelo();
            });
        }
    });
}

function obtenerDetallesVuelo() {
    peticion.accion = 'obtenerDetallesVuelo';
    postData("programacionVuelos.php", {
        data: peticion
    }).then((data) => {
        //console.log(data);
        //console.log(data['detalles']['@attributes']['fecha']);
        //console.log(peticion);
        //console.log(data['detalles']['datosAvion']['@attributes']['matricula']);
        if (peticion.tipo == 'llegadas') {
            document.getElementById("txtMatricula").value = data['detalles']['datosAvion']['@attributes']['matricula'];
            if (!(data['detalles']['horaRealLlegada'] == undefined)) {
                document.getElementById("txtHoraRealLlegada").value = data['detalles']['horaRealLlegada'];
            }
        }
    }).then(() => {
        document.getElementById("butGuardar").addEventListener('click', guardarDatos);
    });
}


async function guardarDatos() {
    let formData = new FormData(document.getElementById('frmDatosVuelo'));
    formData.append('accion', 'guardar');
    formData.append('codigoVuelo', document.getElementById("selVuelos").value);
    console.log(formData);
    let response = await fetch('programacionVuelos.php', {
        method: 'POST',
        body: formData
    });
    //window.location.href = 'programacionVuelos.html';
}

