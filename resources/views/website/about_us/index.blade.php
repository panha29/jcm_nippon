@php
    $html_tag_data = [];
    $title = 'Painting Services';
    $description = 'Painting Services';
    $breadcrumbs = ["/"=>"Home","/painting-services"=>"Painting Services"]
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
@endsection

@section('js_page')
    <script src="/js/cs/glide.custom.js"></script>
    <script src="/js/cs/charts.extend.js"></script>
    <script src="/js/pages/dashboard.default.js"></script>
    <script src="/js/pages/interface.icons.js"></script>

@endsection

@section('content')
@include('website.css')
<style>
    .page-img{
        width: 100%;
        height: 288px;
        border-radius: 5px;
    }
    ol.roman {list-style-type: upper-roman;}
</style>
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
    <div style="width: 60%; margin:auto;text-align: justify;" class="mb-5">
        <h1 style="text-align: center; font-weight:600; font-size:26px" class="mb-5">Nippon Paint</h1>
        <span class="mb-5" style="font-size: 16px">
            NIPPON PAINT was founded in 1881 in Tokyo, Japan as the pioneer first paint plant in Japan,
            we have now become the world’s leading international paint manufacturer.
            NIPPON PAINT took its first step toward globalization when it set up a joint venture in Singapore
            in 1962 and relocated manufacturing facilities overseas which have progressed rapidly in the latter
            half of 20th century and it is expected to grow more in the 21st Century.
            Our successes have placed in capturing “Innovation, Service, Leadership” as the key principles to satisfy
            our customers and rewarding them a better future by harmonizing people, nature and society
        </span>
        <h1 class="mt-5 mb-5" style="text-align: center; font-weight:600; font-size:26px">Our History</h1>
        <span class="mb-5" style="font-size: 16px">JCM Nippon Private,.Ltd. was officially established in
            December 31, 1998. The company is the sole authorized
            distributor of Sto, Selleys, and Nippon Paint products and is
            one of your biggest and most reliable paints and coating
            products distributors in Cambodia.
            We have been involved in both supplying and applying paint,
            coating, waterproofing products and industrial buildings,
            condominiums to mega projects, with strong financial, technical,
            human and managerial resources
            We have earned the trust from various house owners,
            contractors and foreign companies in Cambodia.
            We have good reputation both in providing good quality painting
            services and supplying genuine products
        </span>
        <h1 class="mt-5 mb-5" style="text-align: center; font-weight:600; font-size:26px">Our Vision</h1>

        <ol class="roman">
                <div class="row">
                <div class="col">
                    <li style="font-size: 24px; font-weight:500;">Vision</li>
                    <span class="mb-5" style="font-size: 16px">
                        To be the number one paint and coating products distributors in Cambodia and will do our best to enhance and beautify Cambodia’s surroundings.
                        Our Vision is to leverage the robustness of our existing foundations to tackle future demands and challenges.
                        We are committed to exploring novel technologies and developing innovative painting solutions to fulfill the requirements of our customers.
                    </span>
                    <li style="font-size: 24px; font-weight:500;" class="mt-5">Mission</li>
                    <span class="mb-5" style="font-size: 16px">
                        To support businesses and consumers in Cambodia with a comprehensive range of paint, coating products and services.
                        Our goal is to create paint products that are not only advanced in technology but also eco-friendly.
                        These products will not just enhance the beauty of our environment, but also contribute to its protection.
                    </span>
                </div>
                <div class="col">
                    <li style="font-size: 24px; font-weight:500;margin-left: 40px;" class="">Core Value</li>
                    <ul style="font-size: 20px; margin-left:40px">
                        <li>Customer is Our Priority</li>
                        <li>Transparency </li>
                        <li>Teamwork </li>
                        <li>Quality </li>
                        <li>Sustainability</li>
                        <li>Credibility</li>
                        <li>Continuous Improvement</li>
                        <li>Visionar</li>
                    </ul>
                </div>
            </div>
        </ol>
{{-- @include('website.about_us.milestones') --}}
    </div>



    <div style="background-color:#EFF2F3;">
        <br>
        <div class="footer-responsive">
            @include('website.footer')
        </div>
        <br>
    </div>
@endsection
