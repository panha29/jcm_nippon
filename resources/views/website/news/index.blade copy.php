@php
    $html_tag_data = [];
    $title = 'News and Media';
    $description = 'News and Media';
    $breadcrumbs = ["/"=>"Home","/news"=>"News and Media"]
@endphp
@extends('web-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/glide.core.min.css"/>
    <link rel="stylesheet" href="/css/vendor/introjs.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
    <link rel="stylesheet" href="/css/vendor/plyr.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"/>

@endsection

@section('js_vendor')
    <script src="/js/vendor/Chart.bundle.min.js"></script>
    <script src="/js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="/js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
    <script src="/js/vendor/glide.min.js"></script>
    <script src="/js/vendor/intro.min.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/plyr.min.js"></script>
    <script src="/js/vendor/jquery.barrating.min.js"></script>
    <script src="/js/vendor/movecontent.js"></script>

@endsection

@section('js_page')
    <script src="/js/cs/glide.custom.js"></script>
    <script src="/js/cs/charts.extend.js"></script>
    <script src="/js/pages/dashboard.default.js"></script>
    <script src="/js/pages/interface.icons.js"></script>
    <script src="/js/pages/storefront.home.js"></script>

@endsection

@section('content')
@include('website.css')
<div class="container">
    <div class="page-title-container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
            </div>
        </div>
    </div>
</div>

<div style="width: 60%">
    <div class="row">
        <div class="col">
            @foreach ($data as $item)
            <?php if ($item->news_important == "yes") { ?>
                <img src="{{ url('img/company_news/'.$item->news_image) }}" alt="" style="width: 100%">
            <?php } ?>
            @endforeach
        </div>
        <div class="col">
            <b><span>Trending News</span></b><br>
            <h3></h3>
        </div>
    </div>
</div>


<div style="background-color:#EFF2F3;">
    <br>
    <div class="footer-responsive">
        @include('website.footer')
    </div>
    <br>
</div>

@endsection
