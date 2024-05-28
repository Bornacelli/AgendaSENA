
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('agenda');

        var calendar = new FullCalendar.Calendar(calendarEl, {

          initialView: 'dayGridMonth',
          locale:"es",

          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,dayGridDay,listWeek'
          },
          
          dateClick: function(info) {
            alert('Date: ' + info.dateStr);
            alert('Resource ID: ' + info.resource.id);
            $('#calendar').modal('show');
           

          }

          

        });
        calendar.render();
      });
