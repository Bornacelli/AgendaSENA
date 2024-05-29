
    
      const myModal = document.getElementById('myModal')
      const myInput = document.getElementById('myInput')
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('agenda');

        var calendar = new FullCalendar.Calendar(calendarEl, {

          initialView: 'dayGridMonth',
          locale:'es',

          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,dayGridDay,listWeek'
          },
          
          dateClick: function(info){
            console.log(info);
            document.getElementById('eventoFecha').value = info.dateStr;
            myModal.show();
            // alert('Date: ' + info.dateStr);
            // alert('Resource ID: ' + info.resource.id);
            // $('#calendar').modal('show');
           

          }

          

        });
        calendar.render();
      });
