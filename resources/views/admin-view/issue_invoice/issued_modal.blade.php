<div class="modal modal-right fade" id="issue{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Invoice" name="invoice" autocomplete="off" value="{{$data['invoice']}}"/>
                            <label class="labelkh1">Invoice</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="issued_by" name="issued_by" autocomplete="off" value="{{ Auth::user()->name }}"/>
                            <label class="labelkh1">ISSUED BY</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="ទូរស័ព្ទ" id="issued_payment_via" name="issued_payment_via" autocomplete="off" required/>
                            <label class="labelkh1">PAYMENT VIA</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Date" name="issued_date" data-provide="datepicker" autocomplete="off" required/>
                            <label>ISSUED DATE</label>
                        </div>
                            {{-- @include('admin-view.issue_invoice.issue_form.print-form') --}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
