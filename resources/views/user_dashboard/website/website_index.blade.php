@php
    $html_tag_data = [];
    $title = 'Dashboards';
    $description = 'Dashboard pages contains different layouts to provide stats, graphics, listings, categories, banners and so on. They have various implementations of plugins such as Datatables, Chart.js, Glide.js and Plyr.js with alternative extensions.';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('.user_dashboard.web-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/glide.core.min.css"/>
    <link rel="stylesheet" href="/css/vendor/baguetteBox.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="/css/vendor/plyr.css"/>

@endsection

@section('js_vendor')
<script src="/js/cs/scrollspy.js"></script>
<script src="/js/vendor/glide.min.js"></script>
<script src="/js/vendor/baguetteBox.min.js"></script>
<script src="/js/vendor/fuse.js"></script>
<script src="/js/vendor/plyr.min.js"></script>

@endsection

@section('js_page')
<script src="/js/cs/glide.custom.js"></script>
<script src="/js/plugins/carousels.js"></script>
<script src="/js/pages/interface.icons.js"></script>
<script src="/js/plugins/players.js"></script>

@endsection

@section('content')
@include('user_dashboard.website.css')
    <div class="main-slide-responsive">
        @include('user_dashboard.website.main_slide')
    </div>
    <div class="video-responsive">
        @include('user_dashboard.website.video')
    </div>
    <div class="brand-responsive">
        @include('user_dashboard.website.brand')
    </div>
    <div class="product-responsive">
        @include('user_dashboard.website.product_slide')
    </div>
    <div class="service-responsive">
        @include('user_dashboard.website.services')
    </div>
    <div class="professional-responsive">
        @include('user_dashboard.website.professional')
    </div>
    <div class="news-responsive">
        @include('user_dashboard.website.news')
    </div>
    <div class="application-responsive">
        @include('user_dashboard.website.application')
    </div>
    <div class="map-responsive">
        @include('user_dashboard.website.map')
    </div>
    <div class="footer-responsive">
        @include('user_dashboard.website.footer')
    </div>
@endsection
