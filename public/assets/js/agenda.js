

document.addEventListener('DOMContentLoaded', function() {
    let formulario = document.getElementById("eventoForm");

    var calendarEl = document.getElementById('agenda');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'es',
        // displayEventTime , ----Tiempo del evento----
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,dayGridDay,listWeek'
        },
        events: baseURL + "/evento/mostrar",
        dateClick: function(info) {
            formulario.reset();
            formulario.start.value = info.dateStr;
            formulario.end.value = info.dateStr;

            // Mostrar la fecha en el campo de entrada del modal
            //   document.getElementById('eventoFecha').value = info.dateStr;
            // Mostrar el modal
            var myModal = new bootstrap.Modal(document.getElementById('myModal'));
            myModal.show();

            document.getElementById('btnGuardar').addEventListener('click', function() {
                enviarDatos("/evento/agregar");
                myModal.hide();
            }, { once: true });
        },
        eventClick: function(info) {
            var evento = info.event;
            console.log(evento);

            axios.post(baseURL + "/evento/editar/" + info.event.id)
                .then((respuesta) => {
                    formulario.id.value = respuesta.data.id;
                    formulario.title.value = respuesta.data.title;
                    formulario.descripcion.value = respuesta.data.descripcion;
                    formulario.start.value = respuesta.data.start;
                    formulario.end.value = respuesta.data.end;

                    var myModal = new bootstrap.Modal(document.getElementById('myModal'));
                    myModal.show();

                    document.getElementById('btnEliminar').addEventListener('click', function() {
                        enviarDatos("/evento/borrar/" + formulario.id.value);
                        myModal.hide();
                    }, { once: true });

                    document.getElementById('btnModificar').addEventListener('click', function() {
                        enviarDatos("/evento/actualizar/" + formulario.id.value);
                        myModal.hide();
                    }, { once: true });
                })
                .catch(error => {
                    if (error.response) {
                        console.log(error.response.data);
                    }
                });
        }
    });

    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click", function() {
        enviarDatos("/evento/agregar");
    });

    document.getElementById("btnEliminar").addEventListener("click", function() {
        enviarDatos("/evento/borrar/" + formulario.id.value);
    });

    document.getElementById("btnModificar").addEventListener("click", function() {
        enviarDatos("/evento/actualizar/" + formulario.id.value);
    });

    


    function enviarDatos(url){

        const datos= new FormData(formulario);

        const nuevaURL= url;

        axios.post(nuevaURL, datos).
        then(
            (respuesta) =>{
                calendar.refetchEvents();

                
            }

        ).catch(
            error=>{
                if(error.response){
                    console.log(error.response.data);
                }
            }
        )
    }



});
