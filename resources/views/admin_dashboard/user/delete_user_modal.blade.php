<style>
    .img{
        width: 95%;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    .circle{
        width: 85px;
        background-color: lightgray;
        border-radius: 100px;
        height: 85px;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    .modal-header{
        padding: 10px !important;
    }
    .btn-utility, .btn-danger{
      border-radius: 30px !important;
    }
</style>

<!-- Modal -->
<div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="border-bottom: none !important;">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="circle mb-5">
                    <img src="/icon/warning.png" alt="" class="img">
                </div>
                <h3 style="text-align: center"><b>Delete User</b></h3>
                <p style="text-align: center">You're going to delete this " {{$item->name}} " user. Are you sure?</p>
            </div>
        </div>
        <div class="modal-footer" style="border-top: none !important;">
          <button type="button" class="btn btn-utility" data-bs-dismiss="modal">No, Keep it.</button>
          <button type="button" class="btn btn-danger">Yes, Delete!</button>
        </div>
      </div>
    </div>
</div>
