var tanggal = [

]

$.ajax({
    url: '/calendar',
    type: 'GET',
    success: function(response) {
        // Proses data yang diterima dari server

        $.each(response, function(index, item) {
            if (item.invoice_id) {
              tanggal.push({
                title: item.invoice.invoice_number,
                start: item.invoice.start_date,
                color: 'green'
              });
              $('body').on('click', '[title="' + item.invoice.invoice_number + '"]', function() {
                // Tambahkan logika untuk menampilkan modal sesuai kebutuhan
                $('#exampleModalCenter').modal('show')
              });
            } else if (item.bill_id) {
              tanggal.push({
                title: item.bill.item_id,
                start: item.bill.start_date,
                color: 'blue'
              });
              $('body').on('click', '[title="' + item.bill.item_id + '"]', function() {
                // Tambahkan logika untuk menampilkan modal sesuai kebutuhan
                console.log('Bill modal clicked');
              });
            } else if (item.income_id) {
              tanggal.push({
                title: item.income.income_number,
                start: item.income.date,
                color: 'orange'
              });
              $('body').on('click', '[title="' + item.income.income_number + '"]', function() {
                // Tambahkan logika untuk menampilkan modal sesuai kebutuhan
                console.log('Income modal clicked');
              });
            } else if (item.expenditure_id) {
              tanggal.push({
                title: item.expend.expenditure_number,
                start: item.expend.date,
                color: 'red'
              });
              $('body').on('click', '[title="' + item.expend.expenditure_number + '"]', function() {
                // Tambahkan logika untuk menampilkan modal sesuai kebutuhan
                console.log('Expenditure modal clicked');
              });
            }
          });


            var calendarEl = document.getElementById('selectableCalendar');

            var currentDate = new Date();

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                  },
              initialDate: currentDate,
              selectable: true,
              selectMirror: true,
              select: function(arg) {
                $('#exampleModalCenter').modal('show')
                // console.log('aaa')
                // var title = prompt('Event Title:');
                // if (title) {
                //   calendar.addEvent({
                //     title: title,
                //     start: arg.start,
                //     end: arg.end,
                //     allDay: arg.allDay
                //   })
                // }
                calendar.unselect()
              },
              eventClick: function(arg) {

                // if (confirm('Are you sure you want to delete this event?')) {
                //   arg.event.remove()
                // }
              },
              editable: true,
              dayMaxEvents: true, // allow "more" link when too many events
              events:tanggal,
              eventClick: function(info) {
                switch(info.event.backgroundColor){
                    case "blue":
                        alert(info.event.title)
                        $('#exampleModalCenterhapus').modal('show')
                        break
                    case "green":
                        alert(info.event.title)
                        break

                }
                // alert('Event: ' + info.event.title);
                // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
                // alert('View: ' + info.view.type);

                // change the border color just for fun
                info.el.style.borderColor = 'red';
              }
            });

            calendar.render();

          console.log(tanggal)
    },
    error: function(xhr) {
        // Tangani jika terjadi kesalahan
        console.log(xhr.responseText);
    }
});



