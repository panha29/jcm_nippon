@php
    $html_tag_data = [];
    $title = 'News and Media';
    $description = 'News and Media';
    $breadcrumbs = ["/"=>"Home","/news"=>"News and Media"]
@endphp
@extends('web-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="/css/vendor/plyr.css"/>

@endsection

@section('js_vendor')
    <script src="/js/cs/scrollspy.js"></script>
    <script src="/js/cs/responsivetab.js"></script>
    <script src="/js/vendor/plyr.min.js"></script>

@endsection

@section('js_page')
    <script src="/js/components/navs.js"></script>
    @include('website.news.js')
    <script src="/js/plugins/players.js"></script>
@endsection

@section('content')
@include('website.responsive_css')
{{-- @include('website.news.css') --}}
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

<div style="">
    <div class="mt-5">
        @include('website.news.news_important_slide')
    </div>
    <div class="" style="margin-top:25px; ">
        @include('website.news.nav_tab')
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