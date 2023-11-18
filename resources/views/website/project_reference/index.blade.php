@php
    $html_tag_data = [];
    $title = 'Project Reference';
    $description = 'Project Reference';
    $breadcrumbs = ["/"=>"Home","/project-reference"=>"Project Reference"]
@endphp
@extends('web-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"/>

@endsection

@section('js_vendor')
@endsection

@section('js_page')
    <script src="/js/pages/interface.icons.js"></script>
@endsection

@section('content')
@include('website.responsive_css')

{{-- <style>
    .image{
        width: 388px;
        height: 250px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }
    .card{
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        height: 500px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }
</style> --}}
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
        <div class="container">
            @foreach ($pr as $item)
            <div style="display: inline-flex; padding-left:15px" >
                <div class="pr-image-card mb-3 responsive-card">
                    <img src="{{ url('img/project_reference/company_project_reference/'.$item->project_reference_image1) }}" class="pr-image" alt="">
                    <div class="" style="line-height: 25px; padding:15px">
                        <h3>{{$item->project_reference_name}}</h3>
                        <span><b>Exterior</b> <span style="margin-left: 3px">:</span> {{$item->project_reference_exterior}}</span><br>
                        <span><b>Interior</b> <span style="margin-left: 7px">:</span> {{$item->project_reference_interior}}</span><br>
                        <span><b>Area</b> <span style="margin-left: 22px">:</span> {{$item->project_reference_area}}</span><br>
                        <span><b>Start</b> <span style="margin-left: 21px">:</span> {{$item->project_reference_startDate}}</span><br>
                        <span><b>Finished</b> <span style="margin-left: px">:</span> {{$item->project_reference_endDate}}</span><br>
                    </div>
                </div>
            </div>
            @endforeach
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
