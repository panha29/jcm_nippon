<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/Admin/Project-Reference/List/AddProject-Reference" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="project_reference_name" style="width: 100px;">Name</span>
                    <input type="text" class="form-control" placeholder="" aria-label="project_reference_name" aria-describedby="project_reference_name" name="project_reference_name" autocomplete="off" id="project_reference_name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="project_reference_area" style="width: 100px;">Area</span>
                    <input type="text" class="form-control" placeholder="" aria-label="project_reference_area" aria-describedby="project_reference_area" name="project_reference_area" autocomplete="off" id="project_reference_area">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="project_reference_exterior" style="width: 100px;">Exterior</span>
                    <input type="text" class="form-control" placeholder="" aria-label="project_reference_exterior" aria-describedby="project_reference_exterior" name="project_reference_exterior" autocomplete="off" id="project_reference_exterior">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="project_reference_interior" style="width: 100px;">Interior</span>
                    <input type="text" class="form-control" placeholder="" aria-label="project_reference_interior" aria-describedby="project_reference_interior" name="project_reference_interior" autocomplete="off" id="project_reference_interior">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="project_reference_startDate" style="width: 100px;">Start Date</span>
                    <input type="text" class="form-control" placeholder="" aria-label="project_reference_startDate" aria-describedby="project_reference_startDate" name="project_reference_startDate" autocomplete="off" id="project_reference_startDate">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="project_reference_endDate" style="width: 100px;">End Date</span>
                    <input type="text" class="form-control" placeholder="" aria-label="project_reference_endDate" aria-describedby="project_reference_endDate" name="project_reference_endDate" autocomplete="off" id="project_reference_endDate">
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="project_reference_image1" id="input-file1" onchange="loadFile1(event)">
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="project_reference_image2" id="input-file2" onchange="loadFile2(event)">
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="project_reference_image3" id="input-file3" onchange="loadFile3(event)">
                </div>
                <div class="input-group mb-3" hidden>
                    <input type="file" class="form-control" name="project_reference_image4" id="input-file4" onchange="loadFile4(event)">
                </div>
               <div style="display: inline-flex">
                <div class="" style="">
                    <img src="" id="pdimage1" class="rounded-md bg-cover-center d-block">
                </div>
                <div class="" style="padding-left:15px">
                    <img src="" id="pdimage2" class="rounded-md bg-cover-center d-block">
                </div>
                <div class="" style="padding-left:15px">
                    <img src="" id="pdimage3" class="rounded-md bg-cover-center d-block">
                </div>
                <div class="" style="padding-left:15px">
                    <img src="" id="pdimage4" class="rounded-md bg-cover-center d-block">
                </div>
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
