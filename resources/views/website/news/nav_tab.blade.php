
<style>
    .nav-tabs-line-title>li>.nav-link.active:after, .nav-tabs-line-title>div>.nav-link.active:after {
    bottom: calc(-13px + var(--small-title-height) / 3);

}

.nav-tabs-line-title {
    border-bottom: 0 !important;
}

.center-nav{
    width: 400px;
    margin: auto;
}

.center-view{
    display: inline-flex;
    margin: auto;
    flex-wrap: wrap;
}
</style>
<div style="margin:auto; display:block; ">
    <ul class="nav nav-tabs-title nav-tabs-line-title responsive-tabs center-nav" id="lineTitleTabsContainer" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" data-bs-toggle="tab" href="#firstLineTitleTab" role="tab" style="font-size: 25px" aria-selected="true" draggable="false"><b>NEWS</b></a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#secondLineTitleTab" role="tab" style="font-size: 25px" aria-selected="false" draggable="false"><b>MEADIA</b></a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#thirdLineTitleTab" role="tab" style="font-size: 25px" aria-selected="false" draggable="false"><b>CAREER</b></a>
        </li>
        <li class="nav-item dropdown ms-auto pe-0 d-none responsive-tab-dropdown">
            <a class="btn btn-icon btn-icon-only btn-background pt-0 bg-transparent pe-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-acorn-icon="more-horizontal"></i>
            </a>
            <ul class="dropdown-menu mt-2 dropdown-menu-end"></ul>
        </li>
    </ul>

    <div class="tab-content mb-7 mt-7">
        <div class="tab-pane fade active show" id="firstLineTitleTab" role="tabpanel" style="text-align: center">
            <div class="center-view">
                @foreach ($data as $item)
                    <div class=""  style="padding: 10px">
                        <a href="">
                            <img src="{{url('img/company_news/'.$item->news_image)}}" class="" alt="" style="width:100%; height:250px">
                        </a>
                        <h5 class="mt-3" style="text-align: left">{{$item->news_date}}</h5>
                        <h5 class="mt-2" style="width: 380px; text-align:left"><b>{{$item->news_title}}</b> <br> <a href="">read more</a></h5>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="secondLineTitleTab" role="tabpanel" >
            <div class="center-view">
                @foreach ($media as $item)
                <div class=""  style="padding: 10px">
                        <video class="player"  style="width:100%; height:250px">
                            <source src="{{asset('img/company_media/'.$item->media_image)}}" type="video/mp4" style="" />
                        </video>
                    <h5 class="mt-3" style="text-align: left">{{$item->media_date}}</h5>
                    <h5 class="mt-2" style="width: 380px; text-align:left"><b>{{$item->media_title}}</b> <br> <a href="">read more</a></h5>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="thirdLineTitleTab" role="tabpanel" >

        </div>
    </div>
</div>

