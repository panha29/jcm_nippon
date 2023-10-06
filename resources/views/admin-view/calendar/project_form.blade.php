<div class="modal fade" id="addprogress" tabindex="-1" aria-labelledby="addprogressLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addprogressLabel">FILLING THE BLANK</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section class="scroll-section" id="floatingLabel">
                    <form method="POST" action="/Admin/Calendar/Project" id="form" enctype="multipart/form-data">
                        @csrf
                       <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3 progress-modal">
                                    <input autocomplete="off" class="form-control" id="pj_customer_name" placeholder="Customer Name" name="pj_customer_name">
                                    <label class="pjlabelkh" for="pj_customer_name">អតិថជន</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3 progress-modal">
                                    <input autocomplete="off" class="form-control" id="quantity" placeholder="quantity" name="quantity">
                                    <label class="pjlabelkh" for="quantity">ចំនួន</label>
                                </div>
                            </div>
                       </div>
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" class="form-control" id="project" placeholder="project" name="project">
                            <label class="pjlabelkh" for="project">Project</label>
                        </div>
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" class="form-control" id="head_tailor" placeholder="មេជាង" name="head_tailor" required>
                            <label class="pjlabelkh" for="head_tailor">មេជាង</label>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div id="mydiv" class="form-floating mb-3 progress-modal">
                                    <input autocomplete="off" id="tailor" class="form-control" placeholder="ជាងដេរ" name="tailor" id="1" >
                                    <label class="pjlabelkh" for="tailor">ជាងដេរ</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3 progress-modal">
                                    <input autocomplete="off" type="text" class="form-control datepicker" id="datepickersd" name="start_date" placeholder="date" data-provide="datepicker" autocomplete="off" />
                                    <label class="pjlabelkh" for="datepickersd">ថ្ងៃចាប់ផ្តើមដេរ</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3 progress-modal">
                                    <input autocomplete="off" type="text" class="form-control datepicker" id="datepickered" name="end_date" placeholder="date" data-provide="datepicker" autocomplete="off"/>
                                    <label class="pjlabelkh" for="datepickered">ថ្ងៃចាប់បញ្ចប់ដេរ</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3 progress-modal">
                                    <input autocomplete="off" id="den_tailor" class="form-control" placeholder="ជាងដិន" name="den_tailor">
                                    <label class="pjlabelkh" for="den_tailor">ជាងដិន</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3 progress-modal">
                                    <input autocomplete="off" type="text" class="form-control datepicker" id="datepickersdd" name="den_start_date" placeholder="date" data-provide="datepicker" autocomplete="off"/>
                                    <label class="pjlabelkh" for="datepickersdd">ថ្ងៃចាប់ផ្តើមដិន</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3 progress-modal">
                                    <input autocomplete="off" type="text" class="form-control datepicker" id="datepickeredd" name="den_end_date" placeholder="date" data-provide="datepicker" autocomplete="off"/>
                                    <label class="pjlabelkh" for="datepickeredd">ថ្ងៃបញ្ចប់ដិន</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3 progress-modal">
                                    <input autocomplete="off" type="text" class="form-control datepicker" id="datepickeror" name="order_date" placeholder="date" data-provide="datepicker" autocomplete="off"/>
                                    <label class="pjlabelkh" for="datepickeror">ថ្ងៃកម្ម៉ង</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3 progress-modal">
                                    <input autocomplete="off" type="text" class="form-control datepicker" id="datepickerpsd" name="process_start_date" placeholder="date" data-provide="datepicker" autocomplete="off"/>
                                    <label class="pjlabelkh" for="datepickerpsd">ថ្ងៃកាត់</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3 progress-modal">
                                    <input autocomplete="off" type="text" class="form-control datepicker" id="datepickertd" name="testing_date" placeholder="date" data-provide="datepicker" autocomplete="off" />
                                    <label class="pjlabelkh" for="datepickertd">ថ្ងៃមកល</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3 progress-modal">
                                    <input autocomplete="off" type="text" class="form-control datepicker" id="datepickerpd" name="pickup_date" placeholder="date" data-provide="datepicker" autocomplete="off" />
                                    <label class="pjlabelkh" for="datepickerpd">ថ្ងៃមកយក</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" class="form-control" placeholder="Problem" id="problem" name="problem" >
                            <label class="pjlabelkh" for="problem">បញ្ហាផ្សេងៗ</label>
                        </div>
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" class="form-control" placeholder="Note" id="note" name="note" >
                            <label class="pjlabelkh" for="note">សំគាល់</label>
                        </div>
                        <div class="form-floating mb-3 progress-modal">
                            <input autocomplete="off" class="form-control" placeholder="Progress" id="progress" name="progress" type="number" autocomplete="off" value="0">
                            <label class="pjlabelkh" for="progress">Progress</label>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="pj_image1" >
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="pj_image2" >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="pj_image3" >
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="pj_image4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="text" name="progress_den" value="0" hidden>
                        <input type="text" name="progress_de" value="0" hidden>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>
