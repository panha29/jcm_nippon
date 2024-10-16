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
</style>
<div id="lqd-tab-events-item-Green" role="tabpanel" class="lqd-tabs-pane fade active show">
    <div class="container p-0 module-container">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <tbody id="tbody1">
                @foreach ($color as $item)
                    <?php if ($item->colorpalette_category == "Green") { ?>
                        <tr>
                            <td class="content-dp color-view">
                                <div class="box">
                                    <div class="box-color" style="background-color:rgb({{$item->colorpalette_rgb}})"></div>
                                    <span class="iconbox items-center mt-10">
                                        <span class="items-center uppercase font-ultrabold" style="text-align: left">
                                            <h6><span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_batch}}</b> <br> <b>{{$item->colorpalette_name}}</b></span></h6>
                                        </span>
                                    </span>
                                    <span class="flex flex-col" style="text-align: left">
                                        <h6><span class="leading-1/15em tracking-1" style="color: black"><b>RGB({{$item->colorpalette_rgb}})</b></span></h6>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

















