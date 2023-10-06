<div class="card mb-5">
    <div class="card-body">


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Invoice" name="invoice" autocomplete="off" required/>
                    <label class="labelkh1">Invoice</label>
                </div>

            {{-- <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="ទូរស័ព្ទ" id="issued_by" name="issued_by" autocomplete="off" value="{{Auth::user()->name}}"/>
                    <label class="labelkh1">អ្នកចេញប័ណ្ណ</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="អ្នកលក់" name="seller" autocomplete="off"/>
                    <label class="labelkh1">អ្នកលក់</label>
                </div>
            </div> --}}

                <div class="mb-3">
                    <select class="form-select labelkh1" id="term" name="term">
                        <option selected="" disabled>លក្ខខ័ណ្ឌទូទាត់</option>
                        <option value="Cash">Cash</option>
                        <option value="Transfer">Transfer</option>
                        <option value="3D">3D</option>
                        <option value="7D">7D</option>
                        <option value="30D">30D</option>
                    </select>
                </div>

            {{-- <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="ទំនាក់ទំនង" name="attend" autocomplete="off"/>
                    <label class="labelkh1">ប័ណ្ណបញ្ចរទិញ/PO NO</label>
                </div>
            </div> --}}






    </div>
</div>
