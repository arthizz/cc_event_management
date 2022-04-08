
$(document).ready(function(e){

  let data = [];

  draw_calendar(data.map(obj => {

    return {
      title: obj.event_name,
      start: obj.date,
    }

  }));

});

function draw_calendar(data){

  var calendarEl = document.getElementById('event-calendar');
  var today = new Date();
  
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    initialDate: today,
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay'
    },
    events: data
  });

  calendar.render();

}

  




