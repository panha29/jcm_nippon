<div class="modal fade" id="matex" tabindex="-1" aria-labelledby="matex" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="matex">Color Pricing</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/Admin/ColorPricing/List/AddMatex" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="color_name" style="width: 100px;">Name</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_name" aria-describedby="color_name" name="color_name" autocomplete="off" id="product_pricing_name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="color_tag" style="width: 100px;">Color Tag</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_tag" aria-describedby="color_tag" name="color_tag" autocomplete="off" id="product_pricing_category">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_1l" style="width: 100px;">1L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_1l" aria-describedby="color_1l" name="color_1l" autocomplete="off" id="color_1l">
                </div>

                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_5l" style="width: 100px;">5L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_5l" aria-describedby="color_5l" name="color_5l" autocomplete="off" id="color_5l">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_18l" style="width: 100px;">18L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_18l" aria-describedby="color_18l" name="color_18l" autocomplete="off" id="color_18l">
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="color_image" id="input-file1" onchange="loadFile1(event)">
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

<div class="modal fade" id="matexpremium" tabindex="-1" aria-labelledby="matexpremium" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="matexpremium">Matex Premium</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/Admin/ColorPricing/List/AddMatexPremium" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="color_name" style="width: 100px;">Name</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_name" aria-describedby="color_name" name="color_name" autocomplete="off" id="product_pricing_name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="color_tag" style="width: 100px;">Color Tag</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_tag" aria-describedby="color_tag" name="color_tag" autocomplete="off" id="product_pricing_category">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_1l" style="width: 100px;">1L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_1l" aria-describedby="color_1l" name="color_1l" autocomplete="off" id="color_1l">
                </div>

                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_5l" style="width: 100px;">5L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_5l" aria-describedby="color_5l" name="color_5l" autocomplete="off" id="color_5l">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_18l" style="width: 100px;">18L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_18l" aria-describedby="color_18l" name="color_18l" autocomplete="off" id="color_18l">
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="color_image" id="input-file1" onchange="loadFile1(event)">
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

<div class="modal fade" id="weatherbond" tabindex="-1" aria-labelledby="weatherbond" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="weatherbond">WeatherBond</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/Admin/ColorPricing/List/AddWeatherBond" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="color_name" style="width: 100px;">Name</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_name" aria-describedby="color_name" name="color_name" autocomplete="off" id="product_pricing_name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="color_tag" style="width: 100px;">Color Tag</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_tag" aria-describedby="color_tag" name="color_tag" autocomplete="off" id="product_pricing_category">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_1l" style="width: 100px;">1L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_1l" aria-describedby="color_1l" name="color_1l" autocomplete="off" id="color_1l">
                </div>

                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_5l" style="width: 100px;">5L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_5l" aria-describedby="color_5l" name="color_5l" autocomplete="off" id="color_5l">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_18l" style="width: 100px;">18L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_18l" aria-describedby="color_18l" name="color_18l" autocomplete="off" id="color_18l">
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="color_image" id="input-file1" onchange="loadFile1(event)">
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

<div class="modal fade" id="weathergard" tabindex="-1" aria-labelledby="weathergard" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="weathergard">WeatherGard</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/Admin/ColorPricing/List/AddWeatherGard" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="color_name" style="width: 100px;">Name</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_name" aria-describedby="color_name" name="color_name" autocomplete="off" id="product_pricing_name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="color_tag" style="width: 100px;">Color Tag</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_tag" aria-describedby="color_tag" name="color_tag" autocomplete="off" id="product_pricing_category">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_1l" style="width: 100px;">1L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_1l" aria-describedby="color_1l" name="color_1l" autocomplete="off" id="color_1l">
                </div>

                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_5l" style="width: 100px;">5L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_5l" aria-describedby="color_5l" name="color_5l" autocomplete="off" id="color_5l">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_18l" style="width: 100px;">15L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_18l" aria-describedby="color_18l" name="color_18l" autocomplete="off" id="color_18l">
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="color_image" id="input-file1" onchange="loadFile1(event)">
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

<div class="modal fade" id="supereasywash" tabindex="-1" aria-labelledby="supereasywash" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="supereasywash">Super Easy Wash</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/Admin/ColorPricing/List/AddSuperEasyWash" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="color_name" style="width: 100px;">Name</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_name" aria-describedby="color_name" name="color_name" autocomplete="off" id="product_pricing_name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="color_tag" style="width: 100px;">Color Tag</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_tag" aria-describedby="color_tag" name="color_tag" autocomplete="off" id="product_pricing_category">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_1l" style="width: 100px;">1L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_1l" aria-describedby="color_1l" name="color_1l" autocomplete="off" id="color_1l">
                </div>

                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_5l" style="width: 100px;">5L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_5l" aria-describedby="color_5l" name="color_5l" autocomplete="off" id="color_5l">
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="color_18l" style="width: 100px;">15L Price</span>
                    <input type="text" class="form-control" placeholder="" aria-label="color_18l" aria-describedby="color_18l" name="color_18l" autocomplete="off" id="color_18l">
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="color_image" id="input-file1" onchange="loadFile1(event)">
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
