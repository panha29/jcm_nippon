<style>
    .col{
        width: 25%;
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

    <div class="col"><img src="{{ url('public/Image/'.$item->image1) }}" class="image-display" onerror="this.style.display = 'none'"/></div>
    <div class="col"><img src="{{ url('public/Image/'.$item->image2) }}" class="image-display" onerror="this.style.display = 'none'"/></div>
    <div class="col"><img src="{{ url('public/Image/'.$item->image3) }}" class="image-display" onerror="this.style.display = 'none'"/></div>
    <div class="col"><img src="{{ url('public/Image/'.$item->image4) }}" class="image-display" onerror="this.style.display = 'none'"/></div>

</div>
