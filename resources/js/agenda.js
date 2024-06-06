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

          eventClick: function(event) {
            // Display event details in the modal
            $('#eventTitle').text(event.title);
            $('#eventStart').text('Start: ' + event.startStr);
            $('#eventEnd').text('End: ' + event.endStr);
            $('#eventDescription').text(event.extendedProps.description || '');
    
            // Show the modal
            $('#MyModal').modal('show');
  
          }
          
          
          

          

        });
        calendar.render();
      });


  // $(document).ready(function() {
  //   var calendarEl = document.getElementById('agenda'); // Replace with your calendar element ID

  //   var calendar = new FullCalendar.Calendar(calendarEl, {
  //     // FullCalendar configuration options
  //     eventClick: function(event) {
  //       // Display event details in the modal
  //       $('#eventTitle').text(event.title);
  //       $('#eventStart').text('Start: ' + event.startStr);
  //       $('#eventEnd').text('End: ' + event.endStr);
  //       $('#eventDescription').text(event.extendedProps.description || '');

  //       // Show the modal
  //       $('#eventModal').modal('show');
  //     }
  //   });

  //   calendar.render();
  // });


