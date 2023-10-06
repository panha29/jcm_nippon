<!-- Add Edit Modal Start -->
<div class="modal modal-right fade" id="editmodal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Edit Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/Admin/Customers/Index/edit-customer{{$item->id}}/Complete" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="hidden" class="form-control" name="id" value="{{$item['id']}}">
                        <input type="text" class="form-control" name="customer_name" value="{{$item['customer_name']}}"/>
                        <label>Customer Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="customer_phone" value="{{$item['customer_phone']}}"/>
                        <label>Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="customer_address" value="{{$item['customer_address']}}"/>
                        <label>អាស័យដ្ធាន</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="customer_arrivelocation" value="{{$item['customer_arrivelocation']}}"/>
                        <label>ទីតាំងអ្នកទទួល</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="customer_shipto" value="{{$item['customer_shipto']}}"/>
                        <label>ឈ្មោះអ្នកទទួល</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="addEditConfirmButton">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add Edit Modal End -->
