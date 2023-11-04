@php
    $html_tag_data = [];
    $title = 'Project Reference';
    $description = 'Project Reference';
    $breadcrumbs = ["/"=>"Home","/project-reference"=>"Project Reference"]
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
@include('website.contact_us.css')
<style>
    .image{
        width: 400px;
        height: 300px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }
    .card{
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        height: 500px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }
</style>
    <div class="container">
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 " id="title">{{ $title }}</h1>
                    @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center">
        <h1>Project Reference</h1>
    </div>
    <br>
    <br>

        <div class="container" style="width:60%;">
          <div class="card image">
              <a href=""><img src="img/project-reference/pr1.jpg" class="image" alt=""></a>
            <div class="card-body">
                <span>Aeon Mall</span><br>
                <span>Exterior : WB 145, WB 590, WB 134, WB 569</span><br>
                <span>Interior : MA 569, 2005-Y30A, 73A-1A</span><br>
                <span>Area : ជិតមាត់ទន្លេ</span><br>
                <span>Start : 01.04.2014</span><br>
                <span>Finished : 27.06.14</span><br>
            </div>
          </div>
		</div>
        <br>
        <br>
        <br>
        <div style="background-color:#EFF2F3;">
            <br>
            <div class="footer-responsive">
                @include('website.footer')
            </div>
            <br>
        </div>
@endsection
