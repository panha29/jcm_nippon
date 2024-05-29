@php
    $html_tag_data = [];
    $title = 'Account Setting';
    $description = 'Account Setting';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('user_dashboard.webv2-layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/base.css">
<link rel="stylesheet" href="/webv2/css/demo/digital-hub/digital-hub.css">
@include('user_dashboard.account_setting.css')

@endsection
@section('js_vendor')

@endsection

@section('js_page')
@include('user_dashboard.account_setting.js')
@endsection
@section('content')

<div class="profile-page">

    <div class="content">
      <div class="content__cover">
        <div class="content__avatar">

        </div>

      </div>
      <div class="content__actions">
        <a href="/User/{{ Auth::user()->name }}/{{ Auth::user()->id }}" class="btn btn-success" style="color:white" draggable="false">
            Edit
        </a>
        {{-- <a href="" class="btn btn-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-edit mb-3 d-inline-block">
                <path d="M14.6264 2.54528C15.0872 2.08442 15.6782 1.79143 16.2693 1.73077C16.8604 1.67011 17.4032 1.84674 17.7783 2.22181C18.1533 2.59689 18.33 3.13967 18.2693 3.73077C18.2087 4.32186 17.9157 4.91284 17.4548 5.3737L6.53226 16.2962L2.22192 17.7782L3.70384 13.4678L14.6264 2.54528Z"></path>
            </svg>
        </a> --}}
        </div>
      <div class="content__title">
        <h1>{{ Auth::user()->name }}</h1><span>{{ Auth::user()->email }}</span>

      </div>

      <div class="content__list">

        <a href="" class="btn btn-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bin mb-3 d-inline-block">
                <path d="M4 5V14.5C4 15.9045 4 16.6067 4.33706 17.1111C4.48298 17.3295 4.67048 17.517 4.88886 17.6629C5.39331 18 6.09554 18 7.5 18H12.5C13.9045 18 14.6067 18 15.1111 17.6629C15.3295 17.517 15.517 17.3295 15.6629 17.1111C16 16.6067 16 15.9045 16 14.5V5"></path>
                <path d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5"></path>
            <path d="M2 5H18M12 9V13M8 9V13"></path>
        </svg>
        </a>
      </div>

    </div>



</div>

@endsection
