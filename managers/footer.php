
    </div>
</div>


  <script src="js/main.min.js"></script>
 
  <script type="text/javascript">
      var el = document.querySelector('#wrapper');
      var toggButton = document.querySelector('#menu-toggle');
    
      toggButton.addEventListener('click', function(){
          el.classList.toggle('toggled')
        })

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('cal');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    themeSystem: 'bootstrap4',
    selectable:true,
    editable: true,
    headerToolbar: { 
      left: 'dayGridMonth,timeGridWeek',
      center: 'title',
      right: 'prev next today'
    },
  });
  calendar.render();
  
});

       
</script>
</body>
</html>