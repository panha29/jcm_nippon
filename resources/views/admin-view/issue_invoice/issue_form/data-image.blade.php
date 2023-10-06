<style>
    .col{
        width: 25% !important;
        float: left;
        /* padding-left: 30px; */
    }
    .row:after {
        content: "";
        display: table;
        clear: both;
}
</style>
<div class="row">

    <div class="col" style="text-align:center"><img src="{{ url('public/Image/'.$data->image1) }}" class="image-display" onerror="this.style.display = 'none'"/></div>
    <div class="col" style="text-align:center"><img src="{{ url('public/Image/'.$data->image2) }}" class="image-display" onerror="this.style.display = 'none'"/></div>
    <div class="col" style="text-align:center"><img src="{{ url('public/Image/'.$data->image3) }}" class="image-display" onerror="this.style.display = 'none'"/></div>
    <div class="col" style="text-align:center"><img src="{{ url('public/Image/'.$data->image4) }}" class="image-display" onerror="this.style.display = 'none'"/></div>

</div>
