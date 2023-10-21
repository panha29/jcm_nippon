<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Khmer&display=swap" rel="stylesheet">
<style>
    .addcs{
        font-family: 'Khmer', cursive;
    }
</style>
 <!-- Modal -->
                <div class="modal fade" id="createcustomer" tabindex="-1" aria-labelledby="new_customer" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title addcs" id="new_customer">បំពេញចន្លោះខាងក្រោម</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/Admin/Customers/dashboard-create-customer" method="POST" enctype="multipart/form-data" required>
                                    @csrf
                                    <div class="input-group mb-3">
                                        <span class="input-group-text addcs">ឈ្មោះ</span>
                                        <input type="text" class="form-control" name="customer_name" required>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">INVOICE</span>
                                                <input type="text" class="form-control" name="customer_invoice">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text addcs">បញ្ចុះតំលៃ</span>
                                                <input type="text" class="form-control" name="customer_discount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">EMAIL</span>
                                        <input type="text" class="form-control" name="customer_email">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text addcs">ភេទ</span>
                                                <select class="form-select" name="customer_gender">
                                                    <option></option>
                                                    <option value="Male" class="addcs">ប្រុស</option>
                                                    <option value="Female" class="addcs">ស្រី</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text addcs">ភ្ញៀវពិសេស</span>
                                                <select class="form-select" name="customer_vip" required="required">
                                                    <option ></option>
                                                    <option value="VIP">YES</option>
                                                    <option value="No">NO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text addcs">លេខទូរស័ព្ទ</span>
                                        <input type="text" class="form-control" name="customer_phone">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text addcs">អាស័យដ្ធាន</span>
                                        <input type="text" class="form-control" name="customer_address">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text addcs">កាលបរិចេ្ឆទ</span>
                                        <input type="text" class="form-control" name="customer_date" value="<?php echo date('Y/m/d'); ?>">
                                    </div>
                                    <div class="input-group mb-3" hidden>
                                        <span class="input-group-text addcs">Time</span>
                                        <input type="text" class="form-control" name="customer_time" value="<?php echo date('h:i'); ?>">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text addcs">ចំនួនទឹកប្រាក់</span>
                                        <input type="text" class="form-control" name="customer_total">
                                    </div>
                                    <div class="input-group mb-3">
                                        {{-- <span class="input-group-text addcs">IMAGE</span> --}}
                                        <input type="file" class="form-control" name="customer_image">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
