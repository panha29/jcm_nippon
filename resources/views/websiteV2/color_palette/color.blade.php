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
    width: 630px;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 15px
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

<div class="">
    <div class="color-box">
        @foreach ($color as $item)
            <?php if ($item->colorpalette_category == "Green") { ?>
                <a type="button" onclick="function{{$item->id}}()">
                    <div class="p-10">
                        <div class="box-color" style="background-color:rgb({{$item->colorpalette_rgb}}); width: 130px;height: 130px"></div>
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















