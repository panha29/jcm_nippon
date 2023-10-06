<div class="row">
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input type="hidden" class="form-control" name="id" value="{{$item['id']}}">
            <input autocomplete="off" id="head_tailor" class="form-control" placeholder="មេជាង" name="head_tailor" value="{{$item['head_tailor']}}">
            <label for="head_tailor">មេជាង</label>
        </div>
    </div>
    <input type="text" name="project_den" value="not_yet" hidden>
    <input type="text" name="project_de" value="{{$item['project_de']}}" hidden>

    <div class="col" hidden>
        <div id="mydiv" class="form-floating mb-3 progress-modal">
            <input autocomplete="off" id="tailor" class="form-control" placeholder="កូនជាង" name="tailor" value="{{$item['tailor']}}">
            <label for="tailor">កូនជាង</label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" id="den_tailor" class="form-control" placeholder="ជាងដិន" name="den_tailor">
            <label for="den_tailor">ជាងដិន</label>
        </div>
    </div>
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickersdd{{$loop->index}}" name="den_start_date" placeholder="date" data-provide="datepicker" autocomplete="off"/>
            <label class="pjlabelkh" for="datepickersdd{{$loop->index}}">ថ្ងៃចាប់ផ្តើមដិន</label>
        </div>
    </div>
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickeredd{{$loop->index}}" name="den_end_date" placeholder="date" data-provide="datepicker" autocomplete="off"/>
            <label class="pjlabelkh" for="datepickeredd{{$loop->index}}">ថ្ងៃបញ្ចប់ដិន</label>
        </div>
    </div>
</div>
<div class="form-floating mb-3 progress-modal" hidden>
    <input autocomplete="off" class="form-control" id="pj_customer_name" placeholder="Customer Name" name="pj_customer_name" value="{{$item['pj_customer_name']}}">
    <label for="pj_customer_name">អតិថជន</label>
</div>
<div class="form-floating mb-3 progress-modal" hidden>
    <input autocomplete="off" class="form-control" id="quantity" placeholder="quantity" name="quantity" value="{{$item['quantity']}}">
    <label class="pjlabelkh" for="quantity">ចំនួន</label>
</div>
<div class="row">
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" id="project" class="form-control" placeholder="Project" name="project" value="{{$item['project']}}">
            <label for="project">Project</label>
        </div>
    </div>
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" class="form-control" placeholder="ចំនួន" name="quantity" value="{{$item['quantity']}}">
            <label for="quantity">ចំនួន</label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickeror{{$loop->index}}" name="order_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['order_date']}}"/>
            <label class="pjlabelkh" for="datepickeror{{$loop->index}}">ថ្ងៃកម្ម៉ង</label>
        </div>
    </div>
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="time" class="form-control" id="order_time" name="order_time" placeholder="time" autocomplete="off" value="{{$item['order_time']}}"/>
            <label class="pjlabelkh" for="order_time">វេលាថ្ងៃកម្ម៉ង</label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickerpsd{{$loop->index}}" name="process_start_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['process_start_date']}}"/>
            <label class="pjlabelkh" for="datepickerpsd{{$loop->index}}">ថ្ងៃកាត់</label>
        </div>
    </div>
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="time" class="form-control" id="process_start_time" placeholder="process_start_time" name="process_start_time" autocomplete="off" value="{{$item['process_start_time']}}"/>
            <label class="pjlabelkh" for="process_start_time">វេលាថ្ងៃកាត់</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickertd{{$loop->index}}" name="testing_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['testing_date']}}"/>
            <label class="pjlabelkh" for="datepickertd{{$loop->index}}">ថ្ងៃមកល</label>
        </div>
    </div>
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="time" class="form-control " id="testing_time" name="testing_time" placeholder="time"autocomplete="off" value="{{$item['testing_time']}}"/>
            <label class="pjlabelkh" for="testing_time">វេលាថ្ងៃមកល</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickerpd{{$loop->index}}" name="pickup_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['pickup_date']}}"/>
            <label class="pjlabelkh" for="datepickerpd{{$loop->index}}">ថ្ងៃមកយក</label>
        </div>
    </div>
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="time" class="form-control " id="pickup_time" name="pickup_time" placeholder="time" autocomplete="off" value="{{$item['pickup_time']}}"/>
            <label class="pjlabelkh" for="pickup_time">វេលាថ្ងៃមកយក</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickersd{{$loop->index}}" name="start_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['start_date']}}"/>
            <label class="pjlabelkh" for="datepickersd{{$loop->index}}">ថ្ងៃចាប់ផ្តើម</label>
        </div>
    </div>
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickered{{$loop->index}}" name="end_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['end_date']}}"/>
            <label class="pjlabelkh" for="datepickered{{$loop->index}}">ថ្ងៃចាប់បញ្ចប់</label>
        </div>
    </div>
    <div class="col" hidden>
        <div class="form-floating mb-3 progress-modal">
            <input autocomplete="off" type="text" class="form-control datepicker" id="datepickerdd{{$loop->index}}" name="delay_date" placeholder="date" data-provide="datepicker" autocomplete="off" value="{{$item['delay_date']}}"/>
            <label class="pjlabelkh" for="datepickerdd{{$loop->index}}">ថ្ងៃពន្យាពេល</label>
        </div>
    </div>
</div>

<div class="form-floating mb-3 progress-modal" hidden>
    <input autocomplete="off" class="form-control" placeholder="Problem" name="problem" value="{{$item['problem']}}">
    <label for="problem">បញ្ហាផ្សេងៗ</label>
</div>
<div class="form-floating mb-3 progress-modal" hidden>
    <input autocomplete="off" class="form-control" placeholder="Note" name="note" value="{{$item['note']}}">
    <label for="note">សំគាល់</label>
</div>
<div class="form-floating mb-3 progress-modal" hidden>
    <input autocomplete="off" class="form-control" placeholder="Progress" name="progress" type="number" autocomplete="off" value="{{$item['progress']}}">
    <label for="progress">Progress</label>
</div>

<div class="row">
    <div class="col" hidden>
        <div class="mb-3">
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="pj_image1" value="{{$item['pj_image1']}}">
            </div>
        </div>
    </div>
    <div class="col" hidden>
        <div class="mb-3">
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="pj_image2" value="{{$item['pj_image2']}}">
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col" hidden>
        <div class="mb-3">
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="pj_image3" value="{{$item['pj_image3']}}">
            </div>
        </div>
    </div>
    <div class="col" hidden>
        <div class="mb-3">
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="pj_image4" value="{{$item['pj_image4']}}">
            </div>
        </div>
    </div>
</div>

<input type="text" name="progress_den" value="0" hidden>
<input type="text" name="progress_de" value="0" hidden>
