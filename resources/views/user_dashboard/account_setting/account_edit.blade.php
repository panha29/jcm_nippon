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
        <form action="/User/update" method="POST">
            @csrf
            <label for="Name" class="inp">
                <input type="text" placeholder="Name" pattern=".{4,}" onfocus="this.value=''" name="name" value="{{$edit_user['name']}}">
                <svg width="280px" height="18px" viewBox="0 0 280 18" class="border">
                  <path d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12"></path>
                </svg>
                <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                  <path d="M1 7 5.5 11 L13 1"></path>
                </svg>
            </label>
            <br>
            <label for="Phone" class="inp">
                <input type="number" id="inp" placeholder="Phone" pattern=".{9,}" value="{{ Auth::user()->phone }}" onfocus="this.value=''" name="phone">
                <svg width="280px" height="18px" viewBox="0 0 280 18" class="border">
                  <path d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12"></path>
                </svg>
                <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                  <path d="M1 7 5.5 11 L13 1"></path>
                </svg>
            </label>
            <br>
            <label for="Email" class="inp">
                <input type="email" id="inp" placeholder="Email" pattern=".{6,}" value="{{ Auth::user()->email }}" onfocus="this.value=''" name="email">
                <svg width="280px" height="18px" viewBox="0 0 280 18" class="border">
                  <path d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12"></path>
                </svg>
                <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                  <path d="M1 7 5.5 11 L13 1"></path>
                </svg>
            </label>
            <br>
            <br>


            <div class="container" style="margin-right:-72px">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="/User/{{ Auth::user()->name }}" class="btn btn-danger" draggable="false">Cancel</a>
            </div>
        </form>
      </div>

      <div class="content__list">


      </div>

    </div>



</div>

@endsection
