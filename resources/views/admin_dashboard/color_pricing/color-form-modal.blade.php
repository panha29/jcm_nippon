<div class="modal fade" id="colorpricing" tabindex="-1" aria-labelledby="colorpricing" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="colorpricing">Color Pricing</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/Admin/ColorPricing/List/AddColor" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="product_pricing_name" style="width: 100px;">Name</span>
                    <input type="text" class="form-control" placeholder="" aria-label="product_pricing_name" aria-describedby="product_pricing_name" name="product_pricing_name" autocomplete="off" id="product_pricing_name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="product_pricing_category" style="width: 100px;">Category</span>
                    <input type="text" class="form-control" placeholder="" aria-label="product_pricing_category" aria-describedby="product_pricing_category" name="product_pricing_category" autocomplete="off" id="product_pricing_category">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="product_pricing_price" style="width: 100px;">Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="product_pricing_price" aria-describedby="product_pricing_price" name="product_pricing_price" autocomplete="off" id="product_pricing_price">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="product_pricing_quantity" style="width: 100px;">Quantity</span>
                    <input type="text" class="form-control" placeholder="" aria-label="product_pricing_quantity" aria-describedby="product_pricing_quantity" name="product_pricing_quantity" autocomplete="off" id="product_pricing_quantity">
                </div>

                <div class="input-group mb-3" >
                    <span class="input-group-text" id="product_pricing_batch" style="width: 100px;">Batch</span>
                    <input type="text" class="form-control" placeholder="" aria-label="product_pricing_batch" aria-describedby="product_pricing_batch" name="product_pricing_batch" autocomplete="off" id="product_pricing_batch">
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="product_pricing_image" id="input-file1" onchange="loadFile1(event)">
                </div>


                <div class="modal-footer">
                    <button type="reset" class="btn-danger btn">Reset</button>
                    <button type="submit" class="btn-primary btn">Save</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
