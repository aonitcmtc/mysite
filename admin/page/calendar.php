<div class="container">

    <div class="text-center">
        <h1>Calendar v19</h1>
    </div>

    <!-- <img src="../../asset/cat_test.png" alt="" srcset=""> -->

    <link href='../../asset/calendar19/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='../../asset/calendar19/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    
    <!-- Style -->
    <link rel="stylesheet" href="../../asset/calendar19/css/style.css">

    <div class="row">
        <div class="col-12">

            <div class="row justify-content-center">
                <div class="col-4 col-lg-9 mt-5">
                    
                    <div class="mt-5">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            Add event
                        </button>
                    </div>

                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                    </button> -->

                </div>
            </div>
            
            <div class="content">
                <div id='calendar'></div>
            </div>             

                <script src="../../asset/calendar19/js/jquery-3.3.1.min.js"></script>
                <script src="../../asset/calendar19/js/popper.min.js"></script>
                <script src="../../asset/calendar19/js/bootstrap.min.js"></script>

                <script src='../../asset/calendar19/fullcalendar/packages/core/main.js'></script>
                <script src='../../asset/calendar19/fullcalendar/packages/interaction/main.js'></script>
                <script src='../../asset/calendar19/fullcalendar/packages/daygrid/main.js'></script>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var calendarEl = document.getElementById('calendar');

                        var calendar = new FullCalendar.Calendar(calendarEl, {
                        plugins: [ 'interaction', 'dayGrid' ],
                        defaultDate: '2020-02-12',
                        editable: true,
                        eventLimit: true, // allow "more" link when too many events
                        events: [
                            {
                                title: 'All Day Event',
                                start: '2020-02-01'
                            },
                            {
                                title: 'Long Event',
                                start: '2020-02-07',
                                end: '2020-02-10'
                            },
                            {
                                groupId: 999,
                                title: 'Repeating Event',
                                start: '2020-02-09T16:00:00'
                            },
                            {
                                groupId: 999,
                                title: 'Repeating Event',
                                start: '2020-02-16T16:00:00'
                            },
                            {
                                title: 'Conference',
                                start: '2020-02-11',
                                end: '2020-02-13'
                            },
                            {
                                title: 'Meeting',
                                start: '2020-02-12T10:30:00',
                                end: '2020-02-12T12:30:00'
                            },
                            {
                                title: 'Lunch',
                                start: '2020-02-12T12:00:00'
                            },
                            {
                                title: 'Meeting',
                                start: '2020-02-12T14:30:00'
                            },
                            {
                                title: 'Happy Hour',
                                start: '2020-02-12T17:30:00'
                            },
                            {
                                title: 'Dinner',
                                start: '2020-02-12T20:00:00'
                            },
                            {
                                title: 'Birthday Party',
                                start: '2020-02-13T07:00:00'
                            },
                            {
                                title: 'Click for Google',
                                url: 'http://google.com/',
                                start: '2020-02-28'
                            }
                        ]
                        });

                        calendar.render();
                    });

                </script>

                <!-- <script src="../../asset/calendar19/js/main.js"></script> -->
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>
<!-- modal -->