{{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> --}}
   <style>
    .col1{
        width: 40%;
    }
    .col2{
        width: 60%;
    }

    .carousel-indicators [data-bs-target] {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-box-flex: 0;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        padding: 0;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #aaa;
        background-clip: padding-box;
        border: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: .5;
        -webkit-transition: opacity 0.6s ease;
        transition: opacity 0.6s ease;
    }

    .carousel-indicators {
        margin-bottom: -2rem;
    }
    </style>

<div class="big-screen">
    <div style="text-align: center">
        <h1 style="font-size: 50px"><b>Trending</b></h1>
    </div>
    <div id="next-news" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($imp as $item)
                <button type="button" data-bs-target="#next-news" data-bs-slide-to="{{$loop->index}}" class="{{$loop->index == 0 ? 'active' : ''}}" ></button>
                <script>
                    console.log({{$loop->iteration}})
                </script>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($imp as $item)
                <div class="carousel-item {{$loop->index == 0 ? 'active' : ''}}">
                    <div class="card">
                        <div class="row">
                            <div class="col1">
                                <img src="{{url('img/company_news/'.$item->news_image)}}" style="width: 500px; border-radius:15px;" class="d-block" alt="jcm nippon cambodia">
                            </div>
                            <div class="col2">
                                <div class="card-body">
                                    <div class="mt-7">
                                        <h5>{{$item->news_date}}</h5>
                                        <h1 style="line-height: 45px; font-weight:600; color:black">{{$item->news_title}}</h1>
                                        <p style="line-height: 30px; color:grey">{{$item->news_detail}}</p>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<div class="small-screen" style="height: 700px">
    <div style="text-align: center">
        <h1 style="font-size: 25px"><b>Trending</b></h1>
    </div>
    <div id="next-news" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators" hidden>
            @foreach ($imp as $item)
                <button type="button" data-bs-target="#next-news" data-bs-slide-to="{{$loop->index}}" class="{{$loop->index == 0 ? 'active' : ''}}" ></button>
                <script>
                    console.log({{$loop->iteration}})
                </script>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($imp as $item)
                <div class="carousel-item {{$loop->index == 0 ? 'active' : ''}}">
                    <img src="{{url('img/company_news/'.$item->news_image)}}" style="width:100%" class="d-block" alt="jcm nippon cambodia">
                    <div class="mt-5">
                        <h6>{{$item->news_date}}</h6>
                        <h5 style="line-height: 25px; font-weight:600; color:black">{{$item->news_title}}</h5>
                        <p style="line-height: 30px; color:grey; font-size:12px">{{$item->news_detail}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
