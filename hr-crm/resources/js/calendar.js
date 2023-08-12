import interactionPlugin from '@fullcalendar/interaction';


document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    themeSystem: 'bootstrap',
    selectable: true,
    plugins: [ interactionPlugin ],
      
    dateClick: function(info) {
    alert('Clicked on: ' + info.dateStr);
    alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
    alert('Current view: ' + info.view.type);
    // change the day's background color just for fun
    info.dayEl.style.backgroundColor = 'gray';
    }
    });
    calendar.render();


  });

  