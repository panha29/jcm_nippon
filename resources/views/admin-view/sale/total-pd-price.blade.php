@include('admin-view.sale.css')

<div class="row">
    <div class="col">
        <label class="visually-hidden" for="total_price">$</label>
        <div class="input-group">
            <div class="input-group-text total-input">Total</div>
            <input type="text" autocomplete="off" class="form-control total-input1" id="totalprice" name="totalprice" style="text-align: center">
        </div>
    </div>
    <div class="col" hidden>
        <label class="visually-hidden" for="total_price">$</label>
        <div class="input-group">
            <div class="input-group-text total-input">Sub Total</div>
            <input type="text" autocomplete="off" class="form-control total-input1" id="subtotal" style="text-align: center">
        </div>
    </div>
    <div class="col">
        <label class="visually-hidden" for="discount_price">$</label>
        <div class="input-group">
            <div class="input-group-text total-input">Discount</div>
            <input type="text" autocomplete="off" class="form-control total-input1" id="totaldiscount" name="discount" style="text-align: center" oninput="calculate()">
        </div>
    </div>
    <div class="col">
        <label class="visually-hidden" for="deposit">$</label>
        <div class="input-group">
            <div class="input-group-text total-input">Deposit</div>
            <input type="text" autocomplete="off" class="form-control total-input1" id="deposit" name="deposit" style="text-align: center" oninput="calculate()">
        </div>
    </div>
    <div class="col">
        <label class="visually-hidden" for="balance">$</label>
        <div class="input-group">
            <div class="input-group-text total-input">Balance</div>
            <input type="text" autocomplete="off" class="form-control total-input1" id="balance" name="balance" style="text-align: center">
        </div>
    </div>
</div>




