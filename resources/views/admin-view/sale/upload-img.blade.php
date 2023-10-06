
<div class="row">
    <div class="col">
        <div class="">
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="image1" id="input-file1" onchange="loadFile1(event)">

            </div>
        </div>
    </div>
    <div class="col">
        <div class="">
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="image2" id="input-file2" onchange="loadFile2(event)">

            </div>
        </div>
    </div>
    <div class="col">
        <div class="">
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="image3" id="input-file3" onchange="loadFile3(event)">

            </div>
        </div>
    </div>
    <div class="col">
        <div class="">
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="image4" id="input-file4" onchange="loadFile4(event)">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="">
                <img src="" id="pdimage1" class="rounded-md bg-cover-center d-block">
            </div>
        </div>
        <div class="col">
            <div class="">
                <img src="" id="pdimage2" class="rounded-md bg-cover-center d-block">
            </div>
        </div>
        <div class="col">
            <div class="">
                <img src="" id="pdimage3" class="rounded-md bg-cover-center d-block">
            </div>
        </div>
        <div class="col">
            <div class="">
                <img src="" id="pdimage4" class="rounded-md bg-cover-center d-block">
            </div>
        </div>
    </div>
</div>
<script>
    var loadFile1 = function(event) {
    var pdimage1 = document.getElementById('pdimage1');
        pdimage1.height = 150;
        pdimage1.width = 150;
        pdimage1.src = URL.createObjectURL(event.target.files[0]);
        pdimage1.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
<script>
    var loadFile2 = function(event) {
    var pdimage2 = document.getElementById('pdimage2');
        pdimage2.height = 150;
        pdimage2.width = 150;
        pdimage2.src = URL.createObjectURL(event.target.files[0]);
        pdimage2.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
<script>
    var loadFile3 = function(event) {
    var pdimage3 = document.getElementById('pdimage3');
        pdimage3.height = 150;
        pdimage3.width = 150;
        pdimage3.src = URL.createObjectURL(event.target.files[0]);
        pdimage3.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
<script>
    var loadFile4 = function(event) {
    var pdimage4 = document.getElementById('pdimage4');
        pdimage4.height = 150;
        pdimage4.width = 150;
        pdimage4.src = URL.createObjectURL(event.target.files[0]);
        pdimage4.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
