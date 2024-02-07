
<div id="lqd-tab-events-item-show-all" role="tabpanel" class="lqd-tabs-pane fade active show">
    <div class="container p-0 module-container">
        <table id="tablecolor" class="display color-price" style="width:100%">
            <thead>
                <tr hidden>
                    <td class="mobile-tr"></td>
                    <th class="col-2">Name</th>
                    <th class="col-3">Description</th>
                    <th class="col-4">Image</th>
                </tr>
            </thead>
            <tbody id="tbodyall">
                @foreach ($all as $item)
                    <tr data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                        <td class="mobile-font" style="width: 11% ; padding:0; text-align:center">{{$item->id}}</td>
                        <td class="mobile-font col-2 gfold_name">{{$item->color_name}}</td>
                        <td class="mobile-font col-3"><b>{{$item->color_description}}</b></td>
                        <td class="col-4 gfold" style="padding: 0px"><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 150px; height:150px"  onerror="this.src='{{ url('img/no_image.png') }}';"></td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$item->color_name}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 100%; height:200px"  onerror="this.src='{{ url('img/no_image.png') }}';">
                                    <div class="row">
                                        <div class="col">
                                            <h4>{{$item->color_description}}</h1>
                                            <h5>{{$item->color_name}}</h1>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <?php if ($item->color_tag != "WG") { ?>
                                                    <div class="col" style="text-align: right">
                                                        <h6>01L :</h6>
                                                        <h6>05L :</h6>
                                                        <h6>18L :</h6>
                                                    </div>
                                                    <div class="col">
                                                        <div style="text-align: right">
                                                            <h6>{{number_format($item->color_1l,2)}}$</h6>
                                                            <h6>{{number_format($item->color_5l,2)}}$</h6>
                                                            <h6>{{number_format($item->color_18l,2)}}$</h6>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                                <?php if ($item->color_tag == "WG") { ?>
                                                    <div class="col" style="text-align: right">
                                                        <h6>01L :</h6>
                                                        <h6>05L :</h6>
                                                        <h6>15L :</h6>
                                                    </div>
                                                    <div class="col">
                                                        <div style="text-align: right">
                                                            <h6>{{number_format($item->color_1l,2)}}$</h6>
                                                            <h6>{{number_format($item->color_5l,2)}}$</h6>
                                                            <h6>{{number_format($item->color_15l,2)}}$</h6>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-ma" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="ma" class="display color-price" style="width:100%">
            <thead>
                <tr hidden>
                    <td class="mobile-tr"></td>
                    <th class="col-2">Name</th>
                    <th class="col-3">Description</th>
                    <th class="col-4">Image</th>
                </tr>
            </thead>
            <tbody id="tbodyma">
                @foreach ($ma as $item)
                    <tr data-bs-toggle="modal" data-bs-target="#ma{{$item->id}}">
                        <td class="mobile-font" style="width: 11% ; padding:0; text-align:center">{{$loop->iteration}}</td>
                        <td class="mobile-font col-2 gfold_name">{{$item->color_name}}</td>
                        <td class="mobile-font col-3"><b>{{$item->color_tag}}</b></td>
                        <td class="col-4 gfold" style="padding: 0px"><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 150px; height:150px"  onerror="this.src='{{ url('img/no_image.png') }}';"></td>
                    </tr>
                    <div class="modal fade" id="ma{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$item->color_name}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 100%; height:200px"  onerror="this.src='{{ url('img/no_image.png') }}';">
                                    <div class="row">
                                        <div class="col">
                                            <h4>{{$item->color_tag}}</h1>
                                            <h5>{{$item->color_name}}</h1>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col" style="text-align: right">
                                                    <h6>01L :</h6>
                                                    <h6>05L :</h6>
                                                    <h6>18L :</h6>
                                                </div>
                                                <div class="col">
                                                    <div style="text-align: right">
                                                        <h6>{{number_format($item->color_1l,2)}}$</h6>
                                                        <h6>{{number_format($item->color_5l,2)}}$</h6>
                                                        <h6>{{number_format($item->color_18l,2)}}$</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div id="lqd-tab-events-item-mpm" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="mpm" class="display color-price" style="width:100%">
            <thead>
                 <tr hidden>
                    <td class="mobile-tr"></td>
                    <th class="col-2">Name</th>
                    <th class="col-3">Description</th>
                    <th class="col-4">Image</th>
                </tr>
            </thead>
            <tbody id="tbodympm">
                @foreach ($mpm as $item)
                    <tr data-bs-toggle="modal" data-bs-target="#mpm{{$item->id}}">
                        <td class="mobile-font" style="width: 11% ; padding:0; text-align:center">{{$loop->iteration}}</td>
                        <td class="mobile-font col-2 gfold_name">{{$item->color_name}}</td>
                        <td class="mobile-font col-3"><b>{{$item->color_tag}}</b></td>
                        <td class="col-4 gfold" style="padding: 0px"><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 150px; height:150px"  onerror="this.src='{{ url('img/no_image.png') }}';"></td>
                    </tr>
                    <div class="modal fade" id="mpm{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$item->color_name}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 100%; height:200px"  onerror="this.src='{{ url('img/no_image.png') }}';">
                                    <div class="row">
                                        <div class="col">
                                            <h4>{{$item->color_tag}}</h1>
                                            <h5>{{$item->color_name}}</h1>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col" style="text-align: right">
                                                    <h6>01L :</h6>
                                                    <h6>05L :</h6>
                                                    <h6>18L :</h6>
                                                </div>
                                                <div class="col">
                                                    <div style="text-align: right">
                                                        <h6>{{number_format($item->color_1l,2)}}$</h6>
                                                        <h6>{{number_format($item->color_5l,2)}}$</h6>
                                                        <h6>{{number_format($item->color_18l,2)}}$</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-wb" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="wb" class="display color-price" style="width:100%">
            <thead>
                 <tr hidden>
                    <td class="mobile-tr"></td>
                    <th class="col-2">Name</th>
                    <th class="col-3">Description</th>
                    <th class="col-4">Image</th>
                </tr>
            </thead>
            <tbody id="tbodywb">
                @foreach ($wb as $item)
                    <tr data-bs-toggle="modal" data-bs-target="#wb{{$item->id}}">
                        <td class="mobile-font" style="width: 11% ; padding:0; text-align:center">{{$loop->iteration}}</td>
                        <td class="mobile-font col-2 gfold_name">{{$item->color_name}}</td>
                        <td class="mobile-font col-3"><b>{{$item->color_tag}}</b></td>
                        <td class="col-4 gfold" style="padding: 0px"><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 150px; height:150px"  onerror="this.src='{{ url('img/no_image.png') }}';"></td>
                    </tr>
                    <div class="modal fade" id="wb{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$item->color_name}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 100%; height:200px"  onerror="this.src='{{ url('img/no_image.png') }}';">
                                    <div class="row">
                                        <div class="col">
                                            <h4>{{$item->color_tag}}</h1>
                                            <h5>{{$item->color_name}}</h1>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col" style="text-align: right">
                                                    <h6>01L :</h6>
                                                    <h6>05L :</h6>
                                                    <h6>18L :</h6>
                                                </div>
                                                <div class="col">
                                                    <div style="text-align: right">
                                                        <h6>{{number_format($item->color_1l,2)}}$</h6>
                                                        <h6>{{number_format($item->color_5l,2)}}$</h6>
                                                        <h6>{{number_format($item->color_18l,2)}}$</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-wg" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="wg" class="display color-price" style="width:100%">
            <thead>
                <tr hidden>
                    <td class="mobile-tr"></td>
                    <th class="col-2">Name</th>
                    <th class="col-3">Description</th>
                    <th class="col-4">Image</th>
                </tr>
            </thead>
            <tbody id="tbodywg">
                @foreach ($wg as $item)
                    <tr data-bs-toggle="modal" data-bs-target="#wg{{$item->id}}">
                        <td class="mobile-font" style="width: 11% ; padding:0; text-align:center">{{$loop->iteration}}</td>
                        <td class="mobile-font col-2 gfold_name">{{$item->color_name}}</td>
                        <td class="mobile-font col-3"><b>{{$item->color_tag}}</b></td>
                        <td class="col-4 gfold" style="padding: 0px"><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 150px; height:150px"  onerror="this.src='{{ url('img/no_image.png') }}';"></td>
                    </tr>
                    <div class="modal fade" id="wg{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$item->color_name}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 100%; height:200px"  onerror="this.src='{{ url('img/no_image.png') }}';">
                                    <div class="row">
                                        <div class="col">
                                            <h4>{{$item->color_tag}}</h1>
                                            <h5>{{$item->color_name}}</h1>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col" style="text-align: right">
                                                    <h6>01L :</h6>
                                                    <h6>05L :</h6>
                                                    <h6>15L :</h6>
                                                </div>
                                                <div class="col">
                                                    <div style="text-align: right">
                                                        <h6>{{number_format($item->color_1l,2)}}$</h6>
                                                        <h6>{{number_format($item->color_5l,2)}}$</h6>
                                                        <h6>{{$item->color_15l}}$</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-nsew" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="nsew" class="display color-price" style="width:100%">
            <thead>
                <tr hidden>
                    <td class="mobile-tr"></td>
                    <th class="col-2">Name</th>
                    <th class="col-3">Description</th>
                    <th class="col-4">Image</th>
                </tr>
            </thead>
            <tbody id="tbodynsew">
                @foreach ($nsew as $item)
                    <tr data-bs-toggle="modal" data-bs-target="#nsew{{$item->id}}">
                        <td class="mobile-font" style="width: 11% ; padding:0; text-align:center">{{$loop->iteration}}</td>
                        <td class="mobile-font col-2 gfold_name">{{$item->color_name}}</td>
                        <td class="mobile-font col-3"><b>{{$item->color_tag}}</b></td>
                        <td class="col-4 gfold" style="padding: 0px"><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 150px; height:150px"  onerror="this.src='{{ url('img/no_image.png') }}';"></td>
                    </tr>
                    <div class="modal fade" id="nsew{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$item->color_name}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 100%; height:200px"  onerror="this.src='{{ url('img/no_image.png') }}';">
                                    <div class="row">
                                        <div class="col">
                                            <h4>{{$item->color_tag}}</h1>
                                            <h5>{{$item->color_name}}</h1>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col" style="text-align: right">
                                                    <h6>01L :</h6>
                                                    <h6>05L :</h6>
                                                    <h6>18L :</h6>
                                                </div>
                                                <div class="col">
                                                    <div style="text-align: right">
                                                        <h6>{{number_format($item->color_1l,2)}}$</h6>
                                                        <h6>{{number_format($item->color_5l,2)}}$</h6>
                                                        <h6>{{number_format($item->color_18l,2)}}$</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
