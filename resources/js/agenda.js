document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('agenda');

  var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'es',
      headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,dayGridDay,listWeek'
      },
      dateClick: function(info) {
          // Mostrar la fecha en el campo de entrada del modal
          document.getElementById('eventoFecha').value = info.dateStr;
          // Mostrar el modal
          var myModal = new bootstrap.Modal(document.getElementById('myModal'));
          myModal.show();
      }
  });

  calendar.render();
});
