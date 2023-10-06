@php
    $html_tag_data = [];
    $title = 'Calendar';
    $description= 'Ecommerce Calendar Page'
@endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])
@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('js_vendor')

@endsection

@section('js_page')
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>


{{-- <script src="/js/fullcalendar/jquery-3-2-1.min.js"></script> --}}
<script src="/js/forms/controls.datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="/js/vendor/datatables.min.js"></script>

<script src="/js/fullcalendar/jquery-ui.js"></script>
<script src="/js/fullcalendar/moment.min.js"></script>
<script src="/js/fullcalendar/fullcalendar.min.js"></script>
<script src="/js/fullcalendar/sweet-alert.min.js"></script>
{{-- <script src="/js/forms/controls.datepicker.js"></script> --}}

@endsection

@section('content')
@include('admin-view.calendar/full-calendar-css')

<style>
     .labelkh{
    vertical-align: middle;
    font-size: 16px;
    font-weight: 550;
    font-family: 'Nokora', sans-serif;
     }

.fc-right{
    display: none;
}
.fc-scroller {
  height: auto !important;
}

@media screen and (max-width:412px){
    .fc-day-top{
        font-size:10px;
    }
    .fc-title{
        font-size:10px;
    }
}
.fc-toolbar .fc-center {
    display: inline-block;
    float: right;
}
.fc-head-container{
    height: 50px;
    text-transform: uppercase;
    background-color: #ff5d5d;
    color: white;
}

.fc th, .fc td{
    vertical-align: middle !important;
}
.fc-unthemed td.fc-today {
    background: #d5d5d5;
}
.fc-event, .fc-event-dot {
    background-color: #8a8a8a;
}
.fc-event {
    position: relative;
    display: block;
    font-size: 1em;
    line-height: 1.3;
    border-radius: 3px;
    border: 0px solid #4b8cac;
    font-weight: normal;
}
.fc-event-container{
    font-size: 14px;
    /* font-weight: 550; */
    font-family: 'Nokora', sans-serif;
}
</style>

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>



<!-- Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Booking</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="text" class="form-control form-floating mb-3" id="name" placeholder="Name" autocomplete="off">
                <span id="titleError" class="text-danger"></span>
            <input type="text" class="form-control form-floating mb-3" id="title" placeholder="Title">
                <span id="titleError" class="text-danger"></span>
            <input type="text" class="form-control form-floating mb-3" id="purpose" placeholder="Purpose" autocomplete="off">
                <span id="titleError" class="text-danger"></span>
                <div class="row">
                    <div class="col">
                        <input type="number" class="form-control form-floating mb-3" id="traditionaldress" placeholder="Traditional Dress">
                        <span id="titleError" class="text-danger"></span>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control form-floating mb-3" id="moderndress" placeholder="Modern Dress">
                        <span id="titleError" class="text-danger"></span>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-text" style="height: 36px; background-color:lightblue">Customer has Item?</div>
                    <select class="form-control form-floating mb-3" id="items" placeholder="Items" required>
                    <option value="" selected disabled>Choose one</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
                </div>

            <div class="input-group">
                <div class="input-group-text" style="height: 36px; background-color:lightblue; width:90px">ថ្ងៃកម្ម៉ង</div>
                <input type="text" class="form-control mb-3" placeholder="Date" name="order_date" data-provide="datepicker" id="order_date" autocomplete="off"/>
                <input type="time" class="form-control form-floating mb-3" id="order_time" name="order_time" placeholder="Time" autocomplete="off">

                <span id="titleError" class="text-danger"></span>
            </div>
            <div class="input-group">
                <div class="input-group-text" style="height: 36px; background-color:lightblue; width:90px">ថ្ងៃមកល</div>
                <input type="text" class="form-control mb-3" placeholder="Date" name="testing_date" data-provide="datepicker" id="testing_date" autocomplete="off"/>
                <input type="time" class="form-control form-floating mb-3" id="testing_time" name="testing_time" placeholder="Time">
                <span id="titleError" class="text-danger"></span>
            </div>
            <div class="input-group">
                <div class="input-group-text" style="height: 36px; background-color:lightblue">ថ្ងៃមកយក</div>
                <input type="text" class="form-control mb-3" placeholder="Date" name="arriving_date" data-provide="datepicker" id="arriving_date" autocomplete="off"/>
                <input type="time" class="form-control form-floating mb-3" id="arriving_time" name="arriving_time" placeholder="Time" autocomplete="off">
                <span id="titleError" class="text-danger"></span>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" id="saveBtn" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col">
        <div class="card ">
            <div class="card-body">
                <div id="calendar" class="">
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <table class="ui celled table">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="labelkh" style="text-align: center; width:33.33%">ឈ្មោះ</th>
                                <th class="labelkh" style="text-align: center; width:33.33%">គោលបំណង</th>
                                <th class="labelkh" style="text-align: center; width:33.33%; background-color: pink">ថ្ងៃកម្ម៉ង</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($orderdate as $item)
                           <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="labelkh" style="text-align: center; font-size:13px">{{$item['name']}}</td>
                                <td class="labelkh" style="text-align: center; font-size:13px">{{$item['purpose']}}</td>
                                <td class="labelkh" style="text-align: center; font-size:13px">{{$item['order_date']}}</td>
                           </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <table class="ui celled table">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="labelkh" style="text-align: center; width:33.33%">ឈ្មោះ</th>
                                <th class="labelkh" style="text-align: center; width:33.33%">គោលបំណង</th>
                                <th class="labelkh" style="text-align: center; width:33.33%; background-color: rgb(253, 141, 159)"">ថ្ងៃមកល</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($testingdate as $item)
                           <tr>
                                <td>{{$loop->iteration}}</td>
                               <td class="labelkh" style="text-align: center; font-size:13px">{{$item['name']}}</td>
                               <td class="labelkh" style="text-align: center; font-size:13px">{{$item['purpose']}}</td>
                               <td class="labelkh" style="text-align: center; font-size:13px">{{$item['testing_date']}}</td>
                           </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <table class="ui celled table">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="labelkh" style="text-align: center; width:33.33%">ឈ្មោះ</th>
                                <th class="labelkh" style="text-align: center; width:33.33%">គោលបំណង</th>
                                <th class="labelkh" style="text-align: center; width:33.33%; background-color: rgb(250, 86, 113)">ថ្ងៃមកយក</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($arrivingdate as $item)
                           <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="labelkh" style="text-align: center; font-size:13px">{{$item['name']}}</td>
                                <td class="labelkh" style="text-align: center; font-size:13px">{{$item['purpose']}}</td>
                                <td class="labelkh" style="text-align: center; font-size:13px">{{$item['arriving_date']}}</td>
                           </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- <script>
        var calendar = new Calendar(calendarEl, {
      height: 650
    });
    </script> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var booking = @json($events);
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev, next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay',
                },
                events: booking,
                selectable: true,
                selectHelper: true,
                displayEventTime : false,

                select: function(start, end, allDays) {
                    $('#bookingModal').modal('toggle');

                    $('#saveBtn').click(function() {
                        var title = $('#title').val();
                        var order_date = $('#order_date').val();
                        var arriving_date = $('#arriving_date').val();
                        var testing_date = $('#testing_date').val();
                        var name = $('#name').val();
                        var purpose = $('#purpose').val();
                        var order_time = $('#order_time').val();
                        var testing_time = $('#testing_time').val();
                        var arriving_time = $('#arriving_time').val();
                        var traditionaldress = $('#traditionaldress').val();
                        var moderndress = $('#moderndress').val();
                        var items = $('#items').val();
                        var bookingimg1 = $('#bookingimg1').val();
                        var bookingimg2 = $('#bookingimg2').val();
                        var bookingimg3 = $('#bookingimg2').val();
                        var bookingimg4 = $('#bookingimg2').val();
                        var start_date = moment(start).format('YYYY-MM-DD');
                        var end_date = moment(end).format('YYYY-MM-DD');

                        $.ajax({
                            url:"{{ route('calendar.store') }}",
                            type:"POST",
                            dataType:'json',
                            data:{ title, start_date, end_date, name, purpose, bookingimg1, bookingimg2, bookingimg3, bookingimg4 , items, traditionaldress, moderndress, testing_date, order_date, arriving_date, testing_time, order_time, arriving_time},
                            success:function(response)
                            {
                                $('#bookingModal').modal('hide')
                                $('#calendar').fullCalendar('renderEvent', {
                                    'title': response.title,
                                    'arriving_date': response.arriving_date,
                                    'order_date': response.order_date,
                                    'testing_date': response.testing_date,
                                    'purpose': response.purpose,
                                    'testing_time': response.testing_time,
                                    'order_time': response.order_time,
                                    'arriving_time': response.arriving_time,
                                    'start' : response.start,
                                    'end'  : response.end,
                                    'name'  : response.name,
                                    'moderndress'  : response.moderndress,
                                    'items'  : response.items,
                                    'traditionaldress'  : response.traditionaldress,
                                    'bookingimg1'  : response.bookingimg1,
                                    'bookingimg2'  : response.bookingimg2,
                                    'bookingimg2'  : response.bookingimg3,
                                    'bookingimg2'  : response.bookingimg4,
                                    'color' : response.color
                                });

                            },
                            error:function(error)
                            {
                                if(error.responseJSON.errors) {
                                    $('#titleError').html(error.responseJSON.errors.title);
                                }
                            },
                        });
                    });
                },
                editable: true,
                eventDrop: function(event) {
                    var id = event.id;
                    var start_date = moment(event.start).format('YYYY-MM-DD');
                    var end_date = moment(event.end).format('YYYY-MM-DD');

                    $.ajax({
                            url:"{{ route('calendar.update', '') }}" +'/'+ id,
                            type:"PATCH",
                            dataType:'json',
                            data:{ start_date, end_date  },
                            success:function(response)
                            {
                                swal("Good job!", "Event Updated!", "success");
                            },
                            error:function(error)
                            {
                                console.log(error)
                            },
                        });
                },
                eventClick: function(event){
                    var id = event.id;

                    if(confirm('Are you sure want to remove it')){
                        $.ajax({
                            url:"{{ route('calendar.destroy', '') }}" +'/'+ id,
                            type:"DELETE",
                            dataType:'json',
                            success:function(response)
                            {
                                $('#calendar').fullCalendar('removeEvents', response);
                                // swal("Good job!", "Event Deleted!", "success");
                            },
                            error:function(error)
                            {
                                console.log(error)
                            },
                        });
                    }

                },
                selectAllow: function(event)
                {
                    return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1, 'second').utcOffset(false), 'day');
                },



            });


            $("#bookingModal").on("hidden.bs.modal", function () {
                $('#saveBtn').unbind();
            });

            // $('.fc-event').css('font-size', '13px');
            // $('.fc-event').css('width', '20px');
            // $('.fc-event').css('border-radius', '50%');


        });
    </script>
@endsection
