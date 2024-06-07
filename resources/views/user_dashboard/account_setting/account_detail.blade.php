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

        </div>
      <div class="content__title">
        <h1>{{ Auth::user()->name }}</h1><span>{{ Auth::user()->email }}</span>

      </div>

      <div class="content__list">


        @include('user_dashboard.account_setting.account_edit')
      </div>

    </div>



</div>

@endsection
