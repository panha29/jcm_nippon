<div id="lqd-tab-events-item-Green" role="tabpanel" class="lqd-tabs-pane fade active show">
    <div class="color-box">
        {{-- @foreach ($Green as $item)
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
        @endforeach --}}
        <h6>rgb{{$Green_rgb}}</h6>
    </div>
</div>
