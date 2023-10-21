

  <!-- Modal -->
  <div class="modal fade" id="delete{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h4 style="text-align:center"><b> You Sure You Want To Delete?</b></h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a draggable="false" class="btn btn-danger deleteRecord" data-id="{{$item->id}}" href="javascript:void(0);">
            Yes
        </a>
        </div>
      </div>
    </div>
  </div>
