<!-- Modal -->
<div class="modal fade" id="pj{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/Admin/Calendar/Edit/Project/{{$item->id}}/True" id="form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input type="hidden" class="form-control" name="id" value="{{$item['id']}}">
                            <input autocomplete="off" class="form-control" id="pj_customer_name" placeholder="Customer Name" name="pj_customer_name" value="{{$item['pj_customer_name']}}">
                            <label class="pjlabelkh" for="pj_customer_name">អតិថជន</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" class="form-control" id="quantity" placeholder="quantity" name="quantity" value="{{$item['quantity']}}">
                            <label class="pjlabelkh" for="quantity">ចំនួន</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3 progress-modal">
                    <input autocomplete="off" class="form-control" id="project" placeholder="project" name="project" value="{{$item['project']}}">
                    <label class="pjlabelkh" for="project">Project</label>
                </div>
                <div class="col">
                    <div class="form-floating mb-3 progress-modal">
                        <input autocomplete="off" id="head_tailor" class="form-control" placeholder="មេជាង" name="head_tailor" value="{{$item['head_tailor']}}">
                        <label for="head_tailor">មេជាង</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div id="mydiv" class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" id="tailor" class="form-control" placeholder="ជាងដេរ" name="tailor" id="1" value="{{$item['tailor']}}">
                            <label class="pjlabelkh" for="tailor">ជាងដេរ</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickersd{{$loop->index}}" name="start_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['start_date']}}"/>
                            <label class="pjlabelkh" for="datepickersd{{$loop->index}}">ថ្ងៃចាប់ផ្តើមដេរ</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickered{{$loop->index}}" name="end_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['end_date']}}"/>
                            <label class="pjlabelkh" for="datepickered{{$loop->index}}">ថ្ងៃចាប់បញ្ចប់ដេរ</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" id="den_tailor" class="form-control" placeholder="ជាងដិន" name="den_tailor" value="{{$item['den_tailor']}}">
                            <label class="pjlabelkh" for="den_tailor">ជាងដិន</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickersdd{{$loop->index}}" name="den_start_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['den_start_date']}}"/>
                            <label class="pjlabelkh" for="datepickersdd{{$loop->index}}">ថ្ងៃចាប់ផ្តើមដិន</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickeredd{{$loop->index}}" name="den_end_date" placeholder="date" data-provide="datepicker" autocomplete="off"  value="{{$item['den_end_date']}}"/>
                            <label class="pjlabelkh" for="datepickeredd{{$loop->index}}">ថ្ងៃបញ្ចប់ដិន</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickeror{{$loop->index}}" name="order_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['order_date']}}"/>
                            <label class="pjlabelkh" for="datepickeror{{$loop->index}}">ថ្ងៃកម្ម៉ង</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickerpsd{{$loop->index}}" name="process_start_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['process_start_date']}}"/>
                            <label class="pjlabelkh" for="datepickerpsd{{$loop->index}}">ថ្ងៃកាត់</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickertd{{$loop->index}}" name="testing_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['testing_date']}}"/>
                            <label class="pjlabelkh" for="datepickertd{{$loop->index}}">ថ្ងៃមកល</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickerpd{{$loop->index}}" name="pickup_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['pickup_date']}}"/>
                            <label class="pjlabelkh" for="datepickerpd{{$loop->index}}">ថ្ងៃមកយក</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3 progress-modal">
                    <input autocomplete="off" class="form-control" placeholder="Problem" id="problem" name="problem" value="{{$item['problem']}}">
                    <label class="pjlabelkh" for="problem">បញ្ហាផ្សេងៗ</label>
                </div>
                <div class="form-floating mb-3 progress-modal">
                    <input autocomplete="off" class="form-control" placeholder="Note" id="note" name="note" value="{{$item['note']}}">
                    <label class="pjlabelkh" for="note">សំគាល់</label>
                </div>
                <div class="form-floating mb-3 progress-modal">
                    <input autocomplete="off" class="form-control" placeholder="Progress" id="progress" name="progress" type="number" autocomplete="off" value="{{$item['progress']}}">
                    <label class="pjlabelkh" for="progress">Progress</label>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="pj_image1" value="{{$item['pj_image1']}}">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="pj_image2" value="{{$item['pj_image2']}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="pj_image3" value="{{$item['pj_image3']}}">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="pj_image4" value="{{$item['pj_image4']}}">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" name="progress_den" value="{{$item['progress_den']}}" hidden>
                <input type="text" name="progress_de" value="{{$item['progress_de']}}" hidden>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>


        </div>
      </div>
    </div>
  </div>
