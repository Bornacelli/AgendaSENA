        var myModal = new bootstrap.Modal(document.getElementById('myModal'));
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
          
          // dateClick: function(info){
          //   console.log(info);
          //   document.getElementById('eventoFecha').value = info.dateStr;
          //   myModal.show();
            // alert('Date: ' + info.dateStr);
            // alert('Resource ID: ' + info.resource.id);
            // $('#calendar').modal('show');
            // dateClick: function(dateClickInfo) { // Only for a specific date
            //   // Here you can use the dateClicInfo with your createEvent function
            //   createEvent(dateClickInfo.dateStr, 'Some event', undefined);
            // },
            // select: function(selectionInfo) { // Similar to dateClick
            //   createEvent(selectionInfo.startStr, 'Some event', selectionInfo.endStr);
            // }

          

          

        });
        calendar.render();
      });
