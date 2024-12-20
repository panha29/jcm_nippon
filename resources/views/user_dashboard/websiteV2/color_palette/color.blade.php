<style>
 .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
}

/* Modal Content/Box */
.modal-content {

  width: 100%; /* Could be more or less, depending on screen size */
}
.close {
    position: absolute;
    width: 100%;
    height: 100%;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}
</style>
<div id="lqd-tab-events-item-Green" role="tabpanel" class="lqd-tabs-pane fade active show">
    <div class="">
        <table id="colorid" class="color_pallete" style="width: auto;">
            <tbody id="tbody1">
                @foreach ($GreenUser as $item)
                    <tr>
                        <td>
                            <a onclick="document.getElementById('{{$item->id}}').style.display='block'" type="button">
                                <div style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            </a>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                            <!-- The Modal -->
                            <div id="{{$item->id}}" class="modal" style="background-color: rgb({{$item->colorpalette_rgb}})">
                                <span onclick="document.getElementById('{{$item->id}}').style.display='none'" class="close"></span>
                                {{-- <div class="modal-content"></div> --}}
                            </div>
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
                            <a onclick="document.getElementById('{{$item->id}}').style.display='block'" type="button">
                                <div style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            </a>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                            <!-- The Modal -->
                            <div id="{{$item->id}}" class="modal" style="background-color: rgb({{$item->colorpalette_rgb}})">
                                <span onclick="document.getElementById('{{$item->id}}').style.display='none'" class="close"></span>
                                <div class="modal-content" style="background-color: rgb({{$item->colorpalette_rgb}})"></div>
                            </div>
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
                            <a onclick="document.getElementById('{{$item->id}}').style.display='block'" type="button">
                                <div style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            </a>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                            <!-- The Modal -->
                            <div id="{{$item->id}}" class="modal" style="background-color: rgb({{$item->colorpalette_rgb}})">
                                <span onclick="document.getElementById('{{$item->id}}').style.display='none'" class="close"></span>
                                <div class="modal-content" style="background-color: rgb({{$item->colorpalette_rgb}})">
                                </div>
                            </div>
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
                            <a onclick="document.getElementById('{{$item->id}}').style.display='block'" type="button">
                                <div style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            </a>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                            <!-- The Modal -->
                            <div id="{{$item->id}}" class="modal" style="background-color: rgb({{$item->colorpalette_rgb}})">
                                <span onclick="document.getElementById('{{$item->id}}').style.display='none'" class="close"></span>
                                <div class="modal-content" style="background-color: rgb({{$item->colorpalette_rgb}})"></div>
                            </div>
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
                            <a onclick="document.getElementById('{{$item->id}}').style.display='block'" type="button">
                                <div style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            </a>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                            <!-- The Modal -->
                            <div id="{{$item->id}}" class="modal" style="background-color: rgb({{$item->colorpalette_rgb}})">
                                <span onclick="document.getElementById('{{$item->id}}').style.display='none'" class="close"></span>
                                <div class="modal-content" style="background-color: rgb({{$item->colorpalette_rgb}})"></div>
                            </div>
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
                            <a onclick="document.getElementById('{{$item->id}}').style.display='block'" type="button">
                                <div style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            </a>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                            <!-- The Modal -->
                            <div id="{{$item->id}}" class="modal" style="background-color: rgb({{$item->colorpalette_rgb}})">
                                <span onclick="document.getElementById('{{$item->id}}').style.display='none'" class="close"></span>
                                <div class="modal-content" style="background-color: rgb({{$item->colorpalette_rgb}})"></div>
                            </div>
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
                            <a onclick="document.getElementById('{{$item->id}}').style.display='block'" type="button">
                                <div style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            </a>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                            <!-- The Modal -->
                            <div id="{{$item->id}}" class="modal" style="background-color: rgb({{$item->colorpalette_rgb}})">
                                <span onclick="document.getElementById('{{$item->id}}').style.display='none'" class="close"></span>
                                <div class="modal-content" style="background-color: rgb({{$item->colorpalette_rgb}})"></div>
                            </div>
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
                            <a onclick="document.getElementById('{{$item->id}}').style.display='block'" type="button">
                                <div style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            </a>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                            <!-- The Modal -->
                            <div id="{{$item->id}}" class="modal" style="background-color: rgb({{$item->colorpalette_rgb}})">
                                <span onclick="document.getElementById('{{$item->id}}').style.display='none'" class="close"></span>
                                <div class="modal-content" style="background-color: rgb({{$item->colorpalette_rgb}})"></div>
                            </div>
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
                            <a onclick="document.getElementById('{{$item->id}}').style.display='block'" type="button">
                                <div style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            </a>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                            <!-- The Modal -->
                            <div id="{{$item->id}}" class="modal" style="background-color: rgb({{$item->colorpalette_rgb}})">
                                <span onclick="document.getElementById('{{$item->id}}').style.display='none'" class="close"></span>
                                <div class="modal-content" style="background-color: rgb({{$item->colorpalette_rgb}})"></div>
                            </div>
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
                            <a onclick="document.getElementById('{{$item->id}}').style.display='block'" type="button">
                                <div style="background-color:rgb({{$item->colorpalette_rgb}});width:150px; height:150px;border-radius: 15px;"></div>
                            </a>
                            <span class="iconbox items-center mt-10">
                                <span class="items-center uppercase font-ultrabold">
                                    <p><span class="leading-1/15em tracking-1;"><b >{{$item->colorpalette_batch}}</b> <br> <b style="font-size: 10px">{{$item->colorpalette_name}}</b></span></p>
                                </span>
                            </span>
                            <span class="flex flex-col">
                                <p><span class="leading-1/15em tracking-1" style="color: black; font-size: 10px;"><b>RGB({{$item->colorpalette_rgb}})</b></span></p>
                            </span>
                            <!-- The Modal -->
                            <div id="{{$item->id}}" class="modal" style="background-color: rgb({{$item->colorpalette_rgb}})">
                                <span onclick="document.getElementById('{{$item->id}}').style.display='none'" class="close"></span>
                                <div class="modal-content" style="background-color: rgb({{$item->colorpalette_rgb}})"></div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
