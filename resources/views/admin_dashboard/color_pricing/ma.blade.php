<div class="row mb-3">
    <div class="col">

    </div>
    <div class="col">
        <div style="float: right">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#colorpricing" >
                Add Color
            </button>
       </div>
    </div>
</div>
<div class="card mb-2">
    <div class="card-body">
        <table id="colorpalettetable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Tag</th>
                    <th class="col-1">1L Price</th>
                    <th class="col-1">5L Price</th>
                    <th class="col-1">18 / 15L Price</th>
                    <th>Image</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
    @foreach ($ma as $item)
    <tr>
        <td style="text-align: center;">
            {{$loop->iteration}}
        </td>
        <td class="col-1">
            {{$item->color_name}}
        </td>
        <td>
            {{$item->color_tag}}
        </td>
        <td>
            {{$item->color_1l}}
        </td>
        <td>
            {{$item->color_5l}}
        </td>
        <td>
            {{$item->color_18l}}
        </td>
        <td>
            <img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="" style="width: 100px; height: 100px;" onerror="this.style.display = 'none'">

        </td>
        <td>
            <a href="/Admin/ColorPricing/List/{{$item->id}}/Delete" class="btn btn-danger" draggable="false">Delete</a>
            <a href="/Admin/ColorPricing/List/{{$item->id}}/Edit" class="btn btn-primary" draggable="false">Edit</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</div>

