<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/Admin/Dealer/List/AddDealer" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="dealer_name" style="width: 100px;">Name</span>
                    <input type="text" class="form-control" placeholder="" aria-label="dealer_name" aria-describedby="dealer_name" name="dealer_name" autocomplete="off" id="dealer_name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="dealer_location" style="width: 100px;">Location</span>
                    <input type="text" class="form-control" placeholder="" aria-label="dealer_location" aria-describedby="dealer_location" name="dealer_location" autocomplete="off" id="dealer_location">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="dealer_phone" style="width: 100px;">Phone</span>
                    <input type="text" class="form-control" placeholder="" aria-label="dealer_phone" aria-describedby="dealer_phone" name="dealer_phone" autocomplete="off" id="dealer_phone">
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
