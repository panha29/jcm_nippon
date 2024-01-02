<div id="lqd-tab-events-item-ma" role="tabpanel" class="lqd-tabs-pane fade active show">
    <div class="container p-0 module-container">
        <table id="colorid" class="" style="width: auto;">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody1">
                @foreach ($ma as $item)
                    <?php if ($item->color_tag == "MA") { ?>
                        <tr>
                            <td>
                                <div id="lqd-tab-events-item-ma" role="tabpanel" class="lqd-tabs-pane fade color-view" >
                                    <div id="box">
                                        <img src="{{ url('img/color_pricing/'.$item->color_image) }}" alt="nippon paint cambodia">

                                        <span class="iconbox items-center justify-center mt-10">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <span class="leading-1/15em tracking-1"><b>{{$item->color_name}}</b></span>
                                            </span>
                                        </span>

                                        <span class="iconbox items-center justify-center">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <span class="leading-1/15em tracking-1"><b>{{$item->color_1l}}</b></span>
                                            </span>
                                        </span>

                                        {{-- <span class="flex flex-col"  style="text-align: center">
                                            <span class="">{{$item->colorpalette_rgb}}</span>
                                        </span> --}}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
