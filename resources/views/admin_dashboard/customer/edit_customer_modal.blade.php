<style>
  .form-control:disabled, .form-control[readonly] {

    -webkit-text-fill-color: #545454 !important;
}
</style>
<!-- Modal -->
<div class="modal modal-right large fade" id="edit{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form action="edit-customer" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">បំពេញចន្លោះខាងក្រោម</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text addcs">ឈ្មោះ</span>
                        <input type="hidden" class="form-control" name="id" value="{{$item['id']}}">

                        <input type="text" class="form-control" value="{{$item['customer_name']}}" disabled>
                        <input type="text" class="form-control" name="customer_name" value="{{$item['customer_name']}}" hidden>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">INVOICE</span>
                                <input type="text" class="form-control" name="customer_invoice" {{$item['customer_invoice']}}>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text addcs">បញ្ចុះតំលៃ</span>
                                <input type="text" class="form-control" name="customer_discount" {{$item['customer_discount']}}>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">EMAIL</span>
                        <input type="text" class="form-control" name="customer_email" value="{{$item['customer_email']}}">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text addcs">ភេទ</span>
                                <input type="text" class="form-control" name="customer_gender" value="{{$item['customer_gender']}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <span class="input-group-text addcs addcs">ភ្ញៀវពិសេស</span>
                                    <select class="form-select" name="customer_vip">
                                        <option selected value="{{$item['customer_vip']}}">{{$item['customer_vip']}}</option>
                                        <option value="VIP">YES</option>
                                        <option value="No">NO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text addcs">លេខទូរស័ព្ទ</span>
                        <input type="text" class="form-control" name="customer_phone" value="{{$item['customer_phone']}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text addcs">អាស័យដ្ធាន</span>
                        <input type="text" class="form-control" name="customer_address" value="{{$item['customer_address']}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text addcs">កាលបរិចេ្ឆទ</span>
                        <input type="text" class="form-control" name="customer_date"value="<?php echo date('Y/m/d'); ?>">
                    </div>

                    <div class="input-group mb-3" hidden>
                        <span class="input-group-text addcs">Time</span>
                        <input type="text" class="form-control" name="customer_time" value="<?php echo date('h:i'); ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text addcs">ចំនួនទឹកប្រាក់</span>
                        <input type="number" class="form-control" name="customer_total" step='0.01'>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="customer_image" value="{{$item['customer_image']}}">
                    </div>

                    {{-- <button type="submit" class="btn btn-primary" style="float: right">Save changes</button> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
