
<div id="lqd-tab-events-item-show-all" role="tabpanel" class="lqd-tabs-pane fade active show">
    <div class="container p-0 module-container">
        <table id="tablecolor" class="display color-price" style="width:100%">
            <thead>
                <tr >
                    <td class="mobile-tr"></td>
                    <th class="col-3">Name</th>
                    <th class="col-2">Image</th>
                    <th>1L</th>
                    <th>5L</th>
                    <th>15L</th>
                    <th>18L</th>
                </tr>
            </thead>
            <tbody id="tbodyall">
                @foreach ($all as $item)
                    <tr>
                        <td class="mobile-font" style="width: 25px; padding:0; text-align:center">{{$item->id}}</td>
                        <td class="mobile-font col-3">{{$item->color_name}}<br><b>{{$item->color_tag}}</b></td>
                        <td class="col-2" style="padding: 0px"><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" style="width: 50px; height:50px"  onerror="this.src='{{ url('img/no_image.png') }}';"></td>
                        <td class="mobile-font">${{number_format($item->color_1l,2)}}</td>
                        <td class="mobile-font">${{number_format($item->color_5l,2)}}</td>
                        <td class="mobile-font">${{number_format($item->color_15l,2)}}</td>
                        <td class="mobile-font">${{number_format($item->color_18l,2)}}</td>
                    </tr>
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
