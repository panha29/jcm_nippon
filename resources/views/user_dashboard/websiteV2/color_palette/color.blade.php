<div id="lqd-tab-events-item-Green" role="tabpanel" class="lqd-tabs-pane fade active show">
    <div class="container p-0 module-container">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody1">
                @foreach ($color as $item)
                    <?php if ($item->colorpalette_category == "Green") { ?>
                        <tr>
                            <td class="content-dp">
                                <div id="lqd-tab-events-item-Green" role="tabpanel" class="lqd-tabs-pane fade color-view">
                                    <div class="box">
                                        <img src="{{ url('img/color_palette/company_color_palette/'.$item->colorpalette_image) }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                                        <div class="top-lt"><span><b>{{$item->colorpalette_batch}}</b></span></div>
                                        <span class="iconbox items-center justify-center mt-10">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <h6><span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_name}}</b></span></h6>
                                            </span>
                                        </span>

                                        <span class="flex flex-col"  style="text-align: center">
                                            <span class="">{{$item->colorpalette_rgb}}</span>
                                        </span>
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

<div id="lqd-tab-events-item-Red" role="tabpanel" class="lqd-tabs-pane fade show">
    <div class="container p-0 module-container">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody2">
                @foreach ($color as $item)
                    <?php if ($item->colorpalette_category == "Red") { ?>
                        <tr>
                            <td class="content-dp">
                                <div id="lqd-tab-events-item-All-Color" role="tabpanel" class="lqd-tabs-pane fade color-view" >
                                    <div id="box">
                                        <img src="{{ url('img/color_palette/company_color_palette/'.$item->colorpalette_image) }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">

                                        <span class="iconbox items-center justify-center mt-10">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_batch}}</b></span>
                                            </span>
                                        </span>

                                        <span class="iconbox items-center justify-center">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <h6><span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_name}}</b></span></h6>
                                            </span>
                                        </span>

                                        <span class="flex flex-col"  style="text-align: center">
                                            <span class="">{{$item->colorpalette_rgb}}</span>
                                        </span>
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
<div id="lqd-tab-events-item-Yellow" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody3">
                @foreach ($color as $item)
                    <?php if ($item->colorpalette_category == "Yellow") { ?>
                        <tr>
                            <td class="content-dp">
                                <div id="lqd-tab-events-item-All-Color" role="tabpanel" class="lqd-tabs-pane fade color-view" >
                                    <div id="box">
                                        <img src="{{ url('img/color_palette/company_color_palette/'.$item->colorpalette_image) }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">

                                        <span class="iconbox items-center justify-center mt-10">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_batch}}</b></span>
                                            </span>
                                        </span>

                                        <span class="iconbox items-center justify-center">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <h6><span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_name}}</b></span></h6>
                                            </span>
                                        </span>

                                        <span class="flex flex-col"  style="text-align: center">
                                            <span class="">{{$item->colorpalette_rgb}}</span>
                                        </span>
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
<div id="lqd-tab-events-item-Orange" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody4">
                @foreach ($color as $item)
                    <?php if ($item->colorpalette_category == "Orange") { ?>
                        <tr>
                            <td class="content-dp">
                                <div id="lqd-tab-events-item-All-Color" role="tabpanel" class="lqd-tabs-pane fade color-view" >
                                    <div id="box">
                                        <img src="{{ url('img/color_palette/company_color_palette/'.$item->colorpalette_image) }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">

                                        <span class="iconbox items-center justify-center mt-10">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_batch}}</b></span>
                                            </span>
                                        </span>

                                        <span class="iconbox items-center justify-center">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <h6><span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_name}}</b></span></h6>
                                            </span>
                                        </span>

                                        <span class="flex flex-col"  style="text-align: center">
                                            <span class="">{{$item->colorpalette_rgb}}</span>
                                        </span>
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
<div id="lqd-tab-events-item-Blue" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody5">
                @foreach ($color as $item)
                    <?php if ($item->colorpalette_category == "Blue") { ?>
                        <tr>
                            <td class="content-dp">
                                <div id="lqd-tab-events-item-Blue" role="tabpanel" class="lqd-tabs-pane fade color-view" >
                                    <div id="box">
                                        <img src="{{ url('img/color_palette/company_color_palette/'.$item->colorpalette_image) }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">

                                        <span class="iconbox items-center justify-center mt-10">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_batch}}</b></span>
                                            </span>
                                        </span>

                                        <span class="iconbox items-center justify-center">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <h6><span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_name}}</b></span></h6>
                                            </span>
                                        </span>

                                        <span class="flex flex-col"  style="text-align: center">
                                            <span class="">{{$item->colorpalette_rgb}}</span>
                                        </span>
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
<div id="lqd-tab-events-item-Purple" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody6">
                @foreach ($color as $item)
                    <?php if ($item->colorpalette_category == "Purple") { ?>
                        <tr>
                            <td class="content-dp">
                                <div id="lqd-tab-events-item-All-Color" role="tabpanel" class="lqd-tabs-pane fade color-view" >
                                    <div id="box">
                                        <img src="{{ url('img/color_palette/company_color_palette/'.$item->colorpalette_image) }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">

                                        <span class="iconbox items-center justify-center mt-10">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_batch}}</b></span>
                                            </span>
                                        </span>

                                        <span class="iconbox items-center justify-center">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <h6><span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_name}}</b></span></h6>
                                            </span>
                                        </span>

                                        <span class="flex flex-col"  style="text-align: center">
                                            <span class="">{{$item->colorpalette_rgb}}</span>
                                        </span>
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
<div id="lqd-tab-events-item-Grey" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody7">
                @foreach ($color as $item)
                    <?php if ($item->colorpalette_category == "Grey") { ?>
                        <tr>
                            <td class="content-dp">
                                <div id="lqd-tab-events-item-All-Color" role="tabpanel" class="lqd-tabs-pane fade color-view" >
                                    <div id="box">
                                        <img src="{{ url('img/color_palette/company_color_palette/'.$item->colorpalette_image) }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">

                                        <span class="iconbox items-center justify-center mt-10">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_batch}}</b></span>
                                            </span>
                                        </span>

                                        <span class="iconbox items-center justify-center">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <h6><span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_name}}</b></span></h6>
                                            </span>
                                        </span>

                                        <span class="flex flex-col"  style="text-align: center">
                                            <span class="">{{$item->colorpalette_rgb}}</span>
                                        </span>
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
<div id="lqd-tab-events-item-Neutral" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody8">
                @foreach ($color as $item)
                    <?php if ($item->colorpalette_category == "Neutral") { ?>
                        <tr>
                            <td class="content-dp">
                                <div id="lqd-tab-events-item-All-Color" role="tabpanel" class="lqd-tabs-pane fade color-view" >
                                    <div id="box">
                                        <img src="{{ url('img/color_palette/company_color_palette/'.$item->colorpalette_image) }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">

                                        <span class="iconbox items-center justify-center mt-10">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_batch}}</b></span>
                                            </span>
                                        </span>

                                        <span class="iconbox items-center justify-center">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <h6><span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_name}}</b></span></h6>
                                            </span>
                                        </span>

                                        <span class="flex flex-col"  style="text-align: center">
                                            <span class="">{{$item->colorpalette_rgb}}</span>
                                        </span>
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
<div id="lqd-tab-events-item-Green-Blue" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody9">
                @foreach ($color as $item)
                    <?php if ($item->colorpalette_category == "GreenBlue") { ?>
                        <tr>
                            <td class="content-dp">
                                <div id="lqd-tab-events-item-All-Color" role="tabpanel" class="lqd-tabs-pane fade color-view" >
                                    <div id="box">
                                        <img src="{{ url('img/color_palette/company_color_palette/'.$item->colorpalette_image) }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">

                                        <span class="iconbox items-center justify-center mt-10">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_batch}}</b></span>
                                            </span>
                                        </span>

                                        <span class="iconbox items-center justify-center">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <h6><span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_name}}</b></span></h6>
                                            </span>
                                        </span>

                                        <span class="flex flex-col"  style="text-align: center">
                                            <span class="">{{$item->colorpalette_rgb}}</span>
                                        </span>
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
<div id="lqd-tab-events-item-Off-White" role="tabpanel" class="lqd-tabs-pane fade">
    <div class="container p-0 module-container">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbody10">
                @foreach ($color as $item)
                    <?php if ($item->colorpalette_category == "OffWhite") { ?>
                        <tr>
                            <td class="content-dp">
                                <div id="lqd-tab-events-item-All-Color" role="tabpanel" class="lqd-tabs-pane fade color-view" >
                                    <div id="box">
                                        <img src="{{ url('img/color_palette/company_color_palette/'.$item->colorpalette_image) }}" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">

                                        <span class="iconbox items-center justify-center mt-10">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_batch}}</b></span>
                                            </span>
                                        </span>

                                        <span class="iconbox items-center justify-center">
                                            <span class="items-center justify-center uppercase font-ultrabold" style="text-align: center">
                                                <h6><span class="leading-1/15em tracking-1"><b>{{$item->colorpalette_name}}</b></span></h6>
                                            </span>
                                        </span>

                                        <span class="flex flex-col"  style="text-align: center">
                                            <span class="">{{$item->colorpalette_rgb}}</span>
                                        </span>
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
















