<div class="modal fade" id="createredeem" tabindex="-1" aria-labelledby="redemption" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content mobile_modal">
        <div class="modal-header">
        <h5 class="modal-title" id="redemption">Fill Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="create-redeem" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text">REDEEM NO</span>
                        <input type="text" class="form-control" name="redeem_no" required value="" id="redeem_no" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">CUSTOMER</span>
                        <input type="text" class="form-control" name="customer_name" required value="{{$name}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">CONTACT</span>
                        <input type="text" class="form-control" name="customer_phone" required value="{{$phone}}">
                    </div>
                    <div class="input-group mb-3" hidden>
                        <span class="input-group-text">REDEEM BY</span>
                        <input type="text" class="form-control" name="redeem_by" required value="{{ Auth::user()->name }}">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">NOTE</span>
                        <input type="text" class="form-control" name="redeem_note" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">TYPE</span>
                        <select class="form-select" name="redeem_type" required="required">
                            <option value=""></option>
                            <option value="voucher">Voucher</option>
                            <option value="discount">Discount</option>
                            <option value="gift">Gift</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">REDEEM</span>
                        <input type="number" class="form-control" name="redeem_balance" id="inp" >
                    </div>

                    <div class="input-group mb-3" hidden>
                        <span class="input-group-text">SPECIAL</span>
                        <input type="text" class="form-control" name="redeem_special" value="{{$vip}}">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">DATE</span>
                        <input type="text" class="form-control" name="redeem_date" value="<?php echo date('Y/m/d'); ?>">
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
<script>
function randomNumber(len) {
    var randomNumber;
    var n = '';

    for (var count = 0; count < len; count++) {
        randomNumber = Math.floor(Math.random() * 10);
        n += randomNumber.toString();
    }
    return n;
    }
document.getElementById("redeem_no").value = randomNumber(9);
</script>

