
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Calendar  </title>
<?php include 'header.tpl';?>
 <div class="be-content">
    <div class="page-head">


    </div>
    <div class="main-content container-fluid">
   <div class="row">
   
<div class="col-md-10 col-md-offset-1">

                        <div class="card card-calendar">
                            <div class="content">
                                <div id="fullCalendar"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <?php include 'footer.tpl';?>
                     <!--  Full Calendar Plugin    -->
    <script src="<?=base_url('assets/js/moment.min.js')?>"></script>
    <script src="<?=base_url('assets/js/fullcalendar.min.js')?>"></script>
      <!-- Sweet Alert 2 plugin -->
    <script src="<?php echo base_url(); ?>assets/js/sweetalert2.js"></script>
   
      <script>
        $(function(){
          
        $calendar = $('#fullCalendar');

        today = new Date();
        y = today.getFullYear();
        m = today.getMonth();
        d = today.getDate();

        $calendar.fullCalendar({
			header: {
				left: 'title',
				center: 'month,agendaWeek,agendaDay',
				right: 'prev,next today'
			},
			defaultDate: today,
			selectable: true,
			selectHelper: true,
			titleFormat: {
                month: 'MMMM YYYY', // September 2015
                week: "MMMM D YYYY", // September 2015
                day: 'D MMM, YYYY'  // Tuesday, Sep 8, 2015
            },
			select: function(start, end) {

                // on select we show the Sweet Alert modal with an input
				swal({
    				title: 'Create an Appointment',
    				html: '<br><input class="form-control" placeholder="Appointment Title" id="input-field">',
    				showCancelButton: true,
    				closeOnConfirm: true
                }, function() {

                    var eventData;
                    event_title = $('#input-field').val();

                    if (event_title) {
    					eventData = {
    						title: event_title,
    						start: start,
    						end: end
    					};

    					$calendar.fullCalendar('renderEvent', eventData, true); // stick? = true
    				}
    				alert(event_title+"---"+new Date(start)+"======"+new Date(end));

    				$calendar.fullCalendar('unselect');

                });
			},
			editable: true,
			eventLimit: true, // allow "more" link when too many events


            // color classes: [ event-blue | event-azure | event-green | event-orange | event-red ]
            events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-4, 6, 0),
					allDay: false,
					className: 'event-blue'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+3, 6, 0),
					allDay: false,
					className: 'event-blue'
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d-1, 10, 30),
					allDay: false,
					className: 'event-green'
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d+7, 12, 0),
					end: new Date(y, m, d+7, 14, 0),
					allDay: false,
					className: 'event-red'
				},
				{
					title: 'LBD Launch',
					start: new Date(y, m, d-2, 12, 0),
					allDay: true,
					className: 'event-azure'
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false,
				},
				{
					title: 'Click for Creative Tim',
					start: new Date(y, m, 21),
					end: new Date(y, m, 22),
					url: 'http://www.creative-tim.com/',
					className: 'event-orange'
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 23),
					end: new Date(y, m, 23),
					url: 'http://www.creative-tim.com/',
					className: 'event-orange'
				}
			]
		});


        });
    </script>