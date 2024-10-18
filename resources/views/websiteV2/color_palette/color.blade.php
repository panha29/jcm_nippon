<style>
    @media screen and (max-width: 1920px) {
    .color_pallete tbody {
        display: inline-flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-evenly;
        width: 600px;
    }
}
.color-box{
    display: inline-flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 15px;
    width: 630px;
}

.color-border{
    width: 130px;
    height: 130px;
    border: 1px solid #ebebeb;
}

@media (max-width: 767px) {
    .solutions .module-last {
        margin-top: 0%;
        padding-top: 0%;
    }
    .color-border{
        width: 110px;
    height: 110px;
    border: 1px solid #ebebeb;
    }
    .color-box {
    display: inline-flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 0px;
    width: 400px;
    }
    .p-8{
        padding: 8px;
    }
}
</style>
{{-- <div id="lqd-tab-events-item-Green" role="tabpanel" class="lqd-tabs-pane fade active show">
    <div class="container p-0 module-container">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <tbody id="tbody1">

            </tbody>
        </table>
    </div>
</div> --}}
<div id="lqd-tab-events-item-Green" role="tabpanel" class="lqd-tabs-pane fade active show">
    <div class="color-box">
        @foreach ($Green as $item)
            <?php if ($item->colorpalette_category == "Green") { ?>
                <a type="button" onclick="function{{$item->id}}()">
                    <div class="p-8 p-10">
                        <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});"></div>
                        <span class="iconbox items-center mt-10">
                            <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                            </span>
                        </span>
                        <span class="flex flex-col" style="text-align: left">
                            <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                        </span>
                    </div>
                </a>
            <?php } ?>
        @endforeach
    </div>
</div>

<div id="lqd-tab-events-item-Red" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="color-box">
        @foreach ($Red as $item)
            <?php if ($item->colorpalette_category == "Red") { ?>
                <a type="button" onclick="function{{$item->id}}()">
                    <div class="p-8 p-10">
                        <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});"></div>
                        <span class="iconbox items-center mt-10">
                            <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                            </span>
                        </span>
                        <span class="flex flex-col" style="text-align: left">
                            <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                        </span>
                    </div>
                </a>
            <?php } ?>
        @endforeach
    </div>
</div>

<div id="lqd-tab-events-item-Yellow" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="color-box">
        @foreach ($Yellow as $item)
            <?php if ($item->colorpalette_category == "Yellow") { ?>
                <a type="button" onclick="function{{$item->id}}()">
                    <div class="p-8 p-10">
                        <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});"></div>
                        <span class="iconbox items-center mt-10">
                            <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                            </span>
                        </span>
                        <span class="flex flex-col" style="text-align: left">
                            <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                        </span>
                    </div>
                </a>
            <?php } ?>
        @endforeach
    </div>
</div>

<div id="lqd-tab-events-item-Orange" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="color-box">
        @foreach ($Orange as $item)
            <?php if ($item->colorpalette_category == "Orange") { ?>
                <a type="button" onclick="function{{$item->id}}()">
                    <div class="p-8 p-10">
                        <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});"></div>
                        <span class="iconbox items-center mt-10">
                            <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                            </span>
                        </span>
                        <span class="flex flex-col" style="text-align: left">
                            <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                        </span>
                    </div>
                </a>
            <?php } ?>
        @endforeach
    </div>
</div>

<div id="lqd-tab-events-item-Blue" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="color-box">
        @foreach ($Blue as $item)
            <?php if ($item->colorpalette_category == "Blue") { ?>
                <a type="button" onclick="function{{$item->id}}()">
                    <div class="p-8 p-10">
                        <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});"></div>
                        <span class="iconbox items-center mt-10">
                            <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                            </span>
                        </span>
                        <span class="flex flex-col" style="text-align: left">
                            <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                        </span>
                    </div>
                </a>
            <?php } ?>
        @endforeach
    </div>
</div>

<div id="lqd-tab-events-item-Purple" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="color-box">
        @foreach ($Purple as $item)
            <?php if ($item->colorpalette_category == "Purple") { ?>
                <a type="button" onclick="function{{$item->id}}()">
                    <div class="p-8 p-10">
                        <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});"></div>
                        <span class="iconbox items-center mt-10">
                            <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                            </span>
                        </span>
                        <span class="flex flex-col" style="text-align: left">
                            <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                        </span>
                    </div>
                </a>
            <?php } ?>
        @endforeach
    </div>
</div>

<div id="lqd-tab-events-item-Grey" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="color-box">
        @foreach ($Grey as $item)
            <?php if ($item->colorpalette_category == "Grey") { ?>
                <a type="button" onclick="function{{$item->id}}()">
                    <div class="p-8 p-10">
                        <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});"></div>
                        <span class="iconbox items-center mt-10">
                            <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                            </span>
                        </span>
                        <span class="flex flex-col" style="text-align: left">
                            <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                        </span>
                    </div>
                </a>
            <?php } ?>
        @endforeach
    </div>
</div>

<div id="lqd-tab-events-item-Neutral" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="color-box">
        @foreach ($Neutral as $item)
            <?php if ($item->colorpalette_category == "Neutral") { ?>
                <a type="button" onclick="function{{$item->id}}()">
                    <div class="p-8 p-10">
                        <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});"></div>
                        <span class="iconbox items-center mt-10">
                            <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                            </span>
                        </span>
                        <span class="flex flex-col" style="text-align: left">
                            <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                        </span>
                    </div>
                </a>
            <?php } ?>
        @endforeach
    </div>
</div>

<div id="lqd-tab-events-item-Green-Blue" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="color-box">
        @foreach ($GreenBlue as $item)
            <?php if ($item->colorpalette_category == "GreenBlue") { ?>
                <a type="button" onclick="function{{$item->id}}()">
                    <div class="p-8 p-10">
                        <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});"></div>
                        <span class="iconbox items-center mt-10">
                            <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                            </span>
                        </span>
                        <span class="flex flex-col" style="text-align: left">
                            <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                        </span>
                    </div>
                </a>
            <?php } ?>
        @endforeach
    </div>
</div>

<div id="lqd-tab-events-item-Off-White" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="color-box">
        @foreach ($OffWhite as $item)
            <?php if ($item->colorpalette_category == "OffWhite") { ?>
                <a type="button" onclick="function{{$item->id}}()">
                    <div class="p-8 p-10">
                        <div class="color-border" style="background-color:rgb({{$item->colorpalette_rgb}});"></div>
                        <span class="iconbox items-center mt-10">
                            <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                            </span>
                        </span>
                        <span class="flex flex-col" style="text-align: left">
                            <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                        </span>
                    </div>
                </a>
            <?php } ?>
        @endforeach
    </div>
</div>






