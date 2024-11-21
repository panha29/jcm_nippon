<style>
    table td, table th {
        border: none;
        padding: 0 0 1em 1em;

    }
    table tbody tr:nth-child(odd) {
        background-color: #f7f7f700;
    }
    tbody{
        display: inline-flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    table tr {
        border-bottom: 0px solid #dedede;
    }
    .link-primary a {
    color: #ff0000;
    }

</style>
<div id="lqd-tab-events-item-Green" role="tabpanel" class="lqd-tabs-pane fade active show">
    <div class="">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <tbody id="tbody1">
                @foreach ($GreenUser as $item)
                    <tr>
                        <td>
                            <div class="" style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-Red" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <tbody id="tbody2">
                @foreach ($RedUser as $item)
                    <tr>
                        <td>
                            <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-Yellow" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <tbody id="tbody3">
                @foreach ($YellowUser as $item)
                    <tr>
                        <td>
                            <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-Orange" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <tbody id="tbody4">
                @foreach ($OrangeUser as $item)
                    <tr>
                        <td>
                            <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-Blue" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <tbody id="tbody5">
                @foreach ($BlueUser as $item)
                    <tr>
                        <td>
                            <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-Purple" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <tbody id="tbody6">
                @foreach ($PurpleUser as $item)
                    <tr>
                        <td>
                            <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-Grey" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <tbody id="tbody7">
                @foreach ($GreyUser as $item)
                    <tr>
                        <td>
                            <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-Neutral" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <tbody id="tbody8">
                @foreach ($NeutralUser as $item)
                    <tr>
                        <td>
                            <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-Green-Blue" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <tbody id="tbody9">
                @foreach ($GreenBlueUser as $item)
                    <tr>
                        <td>
                            <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="lqd-tab-events-item-Off-White" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <tbody id="tbody10">
                @foreach ($OffWhiteUser as $item)
                    <tr>
                        <td>
                            <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
