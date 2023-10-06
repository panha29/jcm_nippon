@php
    $html_tag_data = [];
    $title = 'Edit Calendar';
    $description= 'Ecommerce Edit Calendar Page'
@endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')

@endsection

@section('js_vendor')
<script src="/js/vendor/datepicker/bootstrap-datepicker.min.js"></script>
<script src="/js/vendor/datepicker/locales/bootstrap-datepicker.es.min.js"></script>
@endsection

@section('js_page')
<script src="/js/forms/controls.datepicker.js"></script>

@endsection
<style>
    .center-img{
        margin-left: auto;
        margin-right: auto;
        display: block;
    }
</style>
@section('content')
<h2 class="small-title">Edit Product</h2>

        <div class="card mb-5 col" >
            <div class="card-body">
                <form action="/Calendar/update/edit-calendar" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="hidden" class="form-control" name="id" value="{{$data['id']}}">
                        <input type="text" class="form-control" name="name" value="{{$data['name']}}"/>
                        <label>Customer Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="title" value="{{$data['title']}}"/>
                        <label>Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="purpose" value="{{$data['purpose']}}"/>
                        <label>Purpose</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="items" value="{{$data['items']}}"/>
                        <label>Items</label>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="traditionaldress" value="{{$data['traditionaldress']}}"/>
                                <label>Traditional Dress</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="moderndress" value="{{$data['moderndress']}}"/>
                                <label>Modern Dress</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-group-text" style="height: 36px; background-color:lightblue; width:90px">ថ្ងៃផ្សេងៗ</div>
                        <input type="text" class="form-control mb-3" placeholder="Date" name="date" data-provide="datepicker" id="date" autocomplete="off" value="{{$data['date']}}"/>
                        <input type="text" class="form-control form-floating mb-3" id="time" name="time" placeholder="Time" value="{{$data['time']}}">
                        <span id="titleError" class="text-danger"></span>
                    </div>

                    <div class="input-group">
                        <div class="input-group-text" style="height: 36px; background-color:lightblue; width:90px">ថ្ងៃកម្ម៉ង</div>
                        <input type="text" class="form-control mb-3" placeholder="Date" name="order_date" data-provide="datepicker" id="order_date" autocomplete="off" value="{{$data['order_date']}}"/>
                        <input type="text" class="form-control form-floating mb-3" id="order_time" name="order_time" placeholder="Time" autocomplete="off alue="{{$data['order_time']}}">
                        <span id="titleError" class="text-danger"></span>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text" style="height: 36px; background-color:lightblue; width:90px">ថ្ងៃមកល</div>
                        <input type="text" class="form-control mb-3" placeholder="Date" name="testing_date" data-provide="datepicker" id="testing_date" autocomplete="off" value="{{$data['testing_date']}}"/>
                        <input type="text" class="form-control form-floating mb-3" id="testing_time" name="testing_time" placeholder="Time" alue="{{$data['testing_time']}}>
                        <span id="titleError" class="text-danger"></span>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text" style="height: 36px; background-color:lightblue">ថ្ងៃមកយក</div>
                        <input type="text" class="form-control mb-3" placeholder="Date" name="arriving_date" data-provide="datepicker" id="arriving_date" autocomplete="off" value="{{$data['arriving_date']}}"/>
                        <input type="text" class="form-control form-floating mb-3" id="arriving_time" name="arriving_time" placeholder="Time" autocomplete="off" alue="{{$data['arriving_time']}}>
                        <span id="titleError" class="text-danger"></span>
                    </div>

                    <div class="mb-3">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="bookingimg1" id="input-file1" onchange="bkdate1(event)" value="{{$data['bookingimg1']}}">
                            <label class="input-group-text">Upload</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="bookingimg2" id="input-file1" onchange="bkdate2(event)" value="{{$data['bookingimg2']}}">
                            <label class="input-group-text">Upload</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="bookingimg3" id="input-file1" onchange="bkdate3(event)" value="{{$data['bookingimg3']}}">
                            <label class="input-group-text">Upload</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="bookingimg4" id="input-file1" onchange="bkdate4(event)" value="{{$data['bookingimg4']}}">
                            <label class="input-group-text">Upload</label>
                        </div>
                    </div>
                    <div class="mb-3" >
                        <img src="" id="pdoutput" class="rounded-md bg-cover-center center-img">
                    </div>
                    <button class="btn btn-primary" type="submit" style="float: right">Submit</button>

                </form>
            </div>
        </div>
    {{-- <script>
        var bkdate1 = function(event) {
        var pdoutput = document.getElementById('pdoutput');
            pdoutput.height = 300;
            pdoutput.width = 300;
            pdoutput.src = URL.createObjectURL(event.target.files[0]);
            pdoutput.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
    <script>
        var bkdate2 = function(event) {
        var pdoutput = document.getElementById('pdoutput');
            pdoutput.height = 300;
            pdoutput.width = 300;
            pdoutput.src = URL.createObjectURL(event.target.files[0]);
            pdoutput.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script> --}}
@endsection
