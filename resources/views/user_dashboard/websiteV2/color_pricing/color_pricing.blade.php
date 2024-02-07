
<div id="lqd-tab-events-item-show-all" role="tabpanel" class="lqd-tabs-pane fade active show">
    <div class="container p-0 module-container">
        <table id="tablecolor" class="display color-price" ">
            <thead>
                <tr >
                    <td class="mobile-tr"></td>
                    <th class="col-2">Name</th>
                    <th class="col-3">Description</th>
                    <th class="col-4">Image</th>
                    {{-- <th>1L</th>
                    <th>5L</th>
                    <th>15L</th>
                    <th>18L</th> --}}
                </tr>
            </thead>
            <tbody id="tbodyall">
                @foreach ($all as $item)
                    <tr data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                        <td class="mobile-font" style="width: 11% ; padding:0; text-align:center">{{$item->id}}</td>
                            <td class="mobile-font col-2">{{$item->color_name}}</td>
                            <td class="mobile-font col-3"><b>{{$item->color_description}}</b></td>
                            <td class="col-4" style="padding: 0px"><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 150px; height:150px"  onerror="this.src='{{ url('img/no_image.png') }}';"></td>
                            {{-- <td class="mobile-font">${{number_format($item->color_1l,2)}}</td>
                            <td class="mobile-font">${{number_format($item->color_5l,2)}}</td>
                            <td class="mobile-font">${{number_format($item->color_15l,2)}}</td>
                            <td class="mobile-font">${{number_format($item->color_18l,2)}}</td> --}}
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
                                            <div class="col" style="text-align: right">
                                                <h6>01L :</h6>
                                                <h6>05L :</h6>
                                                <h6>18L :</h6>
                                            </div>
                                            <div class="col">
                                                <div style="text-align: right">
                                                    <?php if ($item->color_tag != "WG") { ?>
                                                        <h6>{{number_format($item->color_1l,2)}}$</h6>
                                                        <h6>{{number_format($item->color_5l,2)}}$</h6>
                                                        <h6>{{number_format($item->color_18l,2)}}$</h6>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                       <div style="float: right">
                                            <?php if ($item->color_tag == "WG") { ?>
                                                <h6>01L :{{number_format($item->color_1l,2)}}$</h1>
                                                <h6>05L :{{number_format($item->color_5l,2)}}$</h1>
                                                <h6>15L :{{number_format($item->color_15l,2)}}$</h1>
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
                <tr>
                    <td></td>
                    <th>Name</th>
                    <th>Image</th>
                    <th>1L</th>
                    <th>5L</th>
                    <th>18L</th>
                </tr>
            </thead>
            <tbody id="tbodyma">
                @foreach ($ma as $item)
                    <?php if ($item->color_tag == "MA") { ?>
                        <tr>
                            <td class="mobile-font" style="width: 25px; padding:0; text-align:center">{{$item->id}}</td>
                            <td class="mobile-font col-3">{{$item->color_name}}<br><b>{{$item->color_tag}}</b></td>
                            <td class="col-2" style="padding: 0px"><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 50px; height:50px"  onerror="this.src='{{ url('img/no_image.png') }}';"></td>
                            <td class="mobile-font">${{number_format($item->color_1l,2)}}</td>
                            <td class="mobile-font">${{number_format($item->color_5l,2)}}</td>
                            <td class="mobile-font">${{number_format($item->color_18l,2)}}</td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div id="lqd-tab-events-item-mpm" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="mpm" class="color-price" style="width:100%">
            <thead>
                <tr>
                    <td></td>
                    <th>Name</th>
                    <th>Image</th>
                    <th>1L</th>
                    <th>5L</th>
                    <th>18L</th>
                </tr>
            </thead>
            <tbody id="tbodympm">
                @foreach ($mpm as $item)
                    <?php if ($item->color_tag == "MPM") { ?>
                        <tr>
                            <td class="mobile-font" style="width: 25px; padding:0; text-align:center">{{$item->id}}</td>
                            <td class="mobile-font col-3">{{$item->color_name}}<br><b>{{$item->color_tag}}</b></td>
                            <td class="col-2" style="padding: 0px"><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 50px; height:50px"  onerror="this.src='{{ url('img/no_image.png') }}';"></td>
                            <td class="mobile-font">${{number_format($item->color_1l,2)}}</td>
                            <td class="mobile-font">${{number_format($item->color_5l,2)}}</td>
                            <td class="mobile-font">${{number_format($item->color_18l,2)}}</td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-wb" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="wb" class="color-price" style="width:100%">
            <thead>
                <tr>
                    <td></td>
                    <th>Name</th>
                    <th>Image</th>
                    <th>1L</th>
                    <th>5L</th>
                    <th>18L</th>
                </tr>
            </thead>
            <tbody id="tbodywb">
                @foreach ($wb as $item)
                    <?php if ($item->color_tag == "WB") { ?>
                        <tr>
                            <td class="mobile-font" style="width: 25px; padding:0; text-align:center">{{$item->id}}</td>
                            <td class="mobile-font col-3">{{$item->color_name}}<br><b>{{$item->color_tag}}</b></td>
                            <td class="col-2" style="padding: 0px"><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 50px; height:50px"  onerror="this.src='{{ url('img/no_image.png') }}';"></td>
                            <td class="mobile-font">${{number_format($item->color_1l,2)}}</td>
                            <td class="mobile-font">${{number_format($item->color_5l,2)}}</td>
                            <td class="mobile-font">${{number_format($item->color_18l,2)}}</td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-wg" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="wg" class="color-price" style="width:100%">
            <thead>
                <tr>
                    <td></td>
                    <th>Name</th>
                    <th>Image</th>
                    <th>1L</th>
                    <th>5L</th>
                    <th>15L</th>
                </tr>
            </thead>
            <tbody id="tbodywg">
                @foreach ($wg as $item)
                    <?php if ($item->color_tag == "WG") { ?>
                        <tr>
                            <td class="mobile-font" style="width: 25px; padding:0; text-align:center">{{$item->id}}</td>
                            <td class="mobile-font col-3">{{$item->color_name}}<br><b>{{$item->color_tag}}</b></td>
                            <td class="col-2" style="padding: 0px"><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 50px; height:50px"  onerror="this.src='{{ url('img/no_image.png') }}';"></td>
                            <td class="mobile-font">${{number_format($item->color_1l,2)}}</td>
                            <td class="mobile-font">${{number_format($item->color_5l,2)}}</td>
                            <td class="mobile-font">${{$item->color_15l}}</td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-nsew" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="nsew" class="color-price" style="width:100%">
            <thead>
                <tr>
                    <td></td>
                    <th>Name</th>
                    <th>Image</th>
                    <th>1L</th>
                    <th>5L</th>
                    <th>18L</th>
                </tr>
            </thead>
            <tbody id="tbodynsew">
                @foreach ($nsew as $item)
                    <?php if ($item->color_tag == "NSEW") { ?>
                        <tr>
                            <td class="mobile-font" style="width: 25px; padding:0; text-align:center">{{$item->id}}</td>
                            <td class="mobile-font col-3">{{$item->color_name}}<br><b>{{$item->color_tag}}</b></td>
                            <td class="col-2" style="padding: 0px"><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 50px; height:50px"  onerror="this.src='{{ url('img/no_image.png') }}';"></td>
                            <td class="mobile-font">${{number_format($item->color_1l,2)}}</td>
                            <td class="mobile-font">${{number_format($item->color_5l,2)}}</td>
                            <td class="mobile-font">${{number_format($item->color_18l,2)}}</td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
