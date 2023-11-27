<div class="modal fade" id="colorpalette" tabindex="-1" aria-labelledby="colorpalette" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="colorpalette">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/Admin/ColorPalette/List/AddColor" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="colorpalette_category" style="width: 100px;">Category</span>
                    <input type="text" class="form-control" placeholder="" aria-label="colorpalette_category" aria-describedby="colorpalette_category" name="colorpalette_category" autocomplete="off" id="colorpalette_category">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="colorpalette_name" style="width: 100px;">Name</span>
                    <input type="text" class="form-control" placeholder="" aria-label="colorpalette_name" aria-describedby="colorpalette_name" name="colorpalette_name" autocomplete="off" id="colorpalette_name">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="colorpalette_rgb" style="width: 100px;">RGB</span>
                    <input type="text" class="form-control" placeholder="" aria-label="colorpalette_rgb" aria-describedby="colorpalette_rgb" name="colorpalette_rgb" autocomplete="off" id="colorpalette_rgb">
                </div>

                <div class="input-group mb-3" >
                    <span class="input-group-text" id="colorpalette_batch" style="width: 100px;">Batch</span>
                    <input type="text" class="form-control" placeholder="" aria-label="colorpalette_batch" aria-describedby="colorpalette_batch" name="colorpalette_batch" autocomplete="off" id="colorpalette_batch">
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="colorpalette_image" id="input-file1" onchange="loadFile1(event)">
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
