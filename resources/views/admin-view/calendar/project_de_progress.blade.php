<div class="modal fade" id="pjde{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidde="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/Admin/Calendar/Edit/Project/{{$item->id}}/True" id="form" enctype="multipart/form-data">
                @csrf
                @include('admin-view.calendar.project_de_form_btn')
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" id="tailor" class="form-control pjlabelkh" placeholder="ជាងដិន" name="tailor" value="{{$item['tailor']}}">
                            <label class="pjlabelkh" for="tailor">ជាងដិន</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" type="text" class="form-control pjlabelkh datepicker" id="datepickersdd{{$loop->index}}" value="{{$item['start_date']}}" name="start_date" placeholder="date" data-provide="datepicker" autocomplete="off"/>
                            <label class="pjlabelkh" for="datepickersdd{{$loop->index}}">ថ្ងៃចាប់ផ្តើមដិន</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" type="text" class="form-control pjlabelkh datepicker" id="datepickeredd{{$loop->index}}" value="{{$item['end_date']}}" name="end_date" placeholder="date" data-provide="datepicker" autocomplete="off"/>
                            <label class="pjlabelkh" for="datepickeredd{{$loop->index}}">ថ្ងៃបញ្ចប់ដិន</label>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-3 progress-modal">
                    <input autocomplete="off" class="form-control pjlabelkh" placeholder="Progress" id="progress_de{{$item->id}}" name="progress_de" autocomplete="off" value="{{$item['progress_de']}}" oninput="totalprogress{{$item->id}}()">
                    <label class="pjlabelkh" for="progress_de">Progress</label>
                </div>

                <div class="form-floating mb-3 progress-modal" hidden>
                    <input autocomplete="off" class="form-control pjlabelkh" placeholder="Progress" id="progress{{$item->id}}" autocomplete="off" value="{{$item['progress']}}" oninput="totalprogress{{$item->id}}()">
                    <label class="pjlabelkh" for="progress">Progress</label>
                </div>

                <div class="form-floating mb-3 progress-modal" hidden>
                    <input autocomplete="off" class="form-control pjlabelkh" placeholder="Progress" id="total_progress{{$item->id}}" name="progress" autocomplete="off">
                    <label class="pjlabelkh" for="total_progress">Progress</label>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>

      </div>
    </div>
  </div>


