<!-- Modal -->
<div class="modal fade" id="edit{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="Update/Bookings" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="hidden" class="form-control" name="id" value="{{$item['id']}}">
                    <input type="text" class="form-control" name="name" value="{{$item['name']}}"/>
                    <label>Customer Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="title" value="{{$item['title']}}"/>
                    <label>Title</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="purpose" value="{{$item['purpose']}}"/>
                    <label>Purpose</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="items" value="{{$item['items']}}"/>
                    <label>Items</label>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="traditionaldress" value="{{$item['traditionaldress']}}"/>
                            <label>Traditional Dress</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="moderndress" value="{{$item['moderndress']}}"/>
                            <label>Modern Dress</label>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-group-text" style="height: 36px; background-color:lightblue; width:90px">ថ្ងៃផ្សេងៗ</div>
                    <input type="text" class="form-control mb-3" placeholder="Date" name="date" data-provide="datepicker" id="date" autocomplete="off" value="{{$item['date']}}"/>
                    <input type="text" class="form-control form-floating mb-3" id="time" name="time" placeholder="Time" value="{{$item['time']}}">
                    <span id="titleError" class="text-danger"></span>
                </div>

                <div class="input-group">
                    <div class="input-group-text" style="height: 36px; background-color:lightblue; width:90px">ថ្ងៃកម្ម៉ង</div>
                    <input type="text" class="form-control mb-3" placeholder="Date" name="order_date" data-provide="datepicker" id="order_date" autocomplete="off" value="{{$item['order_date']}}"/>
                    <input type="text" class="form-control form-floating mb-3" id="order_time" name="order_time" placeholder="Time" autocomplete="off alue="{{$item['order_time']}}">
                    <span id="titleError" class="text-danger"></span>
                </div>
                <div class="input-group">
                    <div class="input-group-text" style="height: 36px; background-color:lightblue; width:90px">ថ្ងៃមកល</div>
                    <input type="text" class="form-control mb-3" placeholder="Date" name="testing_date" data-provide="datepicker" id="testing_date" autocomplete="off" value="{{$item['testing_date']}}"/>
                    <input type="text" class="form-control form-floating mb-3" id="testing_time" name="testing_time" placeholder="Time" alue="{{$item['testing_time']}}>
                    <span id="titleError" class="text-danger"></span>
                </div>
                <div class="input-group">
                    <div class="input-group-text" style="height: 36px; background-color:lightblue">ថ្ងៃមកយក</div>
                    <input type="text" class="form-control mb-3" placeholder="Date" name="arriving_date" data-provide="datepicker" id="arriving_date" autocomplete="off" value="{{$item['arriving_date']}}"/>
                    <input type="text" class="form-control form-floating mb-3" id="arriving_time" name="arriving_time" placeholder="Time" autocomplete="off" alue="{{$item['arriving_time']}}>
                    <span id="titleError" class="text-danger"></span>
                </div>

                <div class="mb-3">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="bookingimg1" id="input-file1" onchange="bkdate1(event)" value="{{$item['bookingimg1']}}">
                        <label class="input-group-text">Upload</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="bookingimg2" id="input-file1" onchange="bkdate2(event)" value="{{$item['bookingimg2']}}">
                        <label class="input-group-text">Upload</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="bookingimg3" id="input-file1" onchange="bkdate3(event)" value="{{$item['bookingimg3']}}">
                        <label class="input-group-text">Upload</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="bookingimg4" id="input-file1" onchange="bkdate4(event)" value="{{$item['bookingimg4']}}">
                        <label class="input-group-text">Upload</label>
                    </div>
                </div>
                <div class="mb-3" >
                    <img src="" id="pdoutput" class="rounded-md bg-cover-center center-img">
                </div>
                <button class="btn btn-primary" type="submit" style="float: right">Submit</button>

            </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
