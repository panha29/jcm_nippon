<div id="lqd-tab-events-item-show-all" role="tabpanel" class="lqd-tabs-pane fade active show">
    <div class="container p-0 module-container">
        <table id="tablecolor" class="display" style="width:100%">
            <thead>
                <tr>
                    <td></td>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>1L</th>
                    <th>5L</th>
                    <th>15L</th>
                    <th>18L</th>
                </tr>
            </thead>
            <tbody id="tbodyall">
                @foreach ($ma as $item)
                    <?php if ($item->color_tag == "MA") { ?>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->color_name}}</td>
                            <td><b>Matex</b></td>
                            <td><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" width="150px"></td>
                            <td>{{$item->color_1l}}</td>
                            <td>{{$item->color_5l}}</td>
                            <td></td>
                            <td>{{$item->color_18l}}</td>
                        </tr>
                    <?php } ?>
                @endforeach

                @foreach ($mpm as $item)
                    <?php if ($item->color_tag == "MPM") { ?>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->color_name}}</td>
                            <td><b>Matex Premium</b></td>
                            <td><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" width="150px"></td>
                            <td>{{$item->color_1l}}</td>
                            <td>{{$item->color_5l}}</td>
                            <td></td>
                            <td>{{$item->color_18l}}</td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div id="lqd-tab-events-item-ma" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="tablecolor" class="" style="width:100%">
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
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->color_name}}</td>
                            <td><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" width="150px"></td>
                            <td>{{$item->color_1l}}</td>
                            <td>{{$item->color_5l}}</td>
                            <td>{{$item->color_18l}}</td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div id="lqd-tab-events-item-mpm" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="tablecolor" class="" style="width:100%">
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
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->color_name}}</td>
                            <td><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" width="150px"></td>
                            <td>{{$item->color_1l}}</td>
                            <td>{{$item->color_5l}}</td>
                            <td>{{$item->color_18l}}</td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-wb" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="tablecolor" class="" style="width:100%">
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
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->color_name}}</td>
                            <td><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" width="150px"></td>
                            <td>{{$item->color_1l}}</td>
                            <td>{{$item->color_5l}}</td>
                            <td>{{$item->color_18l}}</td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-wg" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="tablecolor" class="" style="width:100%">
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
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->color_name}}</td>
                            <td><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" width="150px"></td>
                            <td>{{$item->color_1l}}</td>
                            <td>{{$item->color_5l}}</td>
                            <td>{{$item->color_15l}}</td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-nsew" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="tablecolor" class="" style="width:100%">
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
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->color_name}}</td>
                            <td><img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="jcm nippon cambodia" width="150px"></td>
                            <td>{{$item->color_1l}}</td>
                            <td>{{$item->color_5l}}</td>
                            <td>{{$item->color_18l}}</td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
