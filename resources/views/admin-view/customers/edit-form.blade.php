@php
    $html_tag_data = [];
    $title = 'Customer List';
    $description= 'Ecommerce Customer List Page'
@endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
    <script src="/js/cs/checkall.js"></script>
    <script src="/js/pages/customers.list.js"></script>
@endsection

@section('content')
    <!-- Floating Label Start -->
    <section class="scroll-section" id="floatingLabel">
        <h2 class="small-title">Edit Customer</h2>
        <div class="card mb-5">
            <div class="card-body">
                <form action="/Admin/Customers/Index/edit-customer" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="hidden" class="form-control" name="id" value="{{$data['id']}}">
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{$data['name']}}"/>
                        <label>Customer Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{$data['phone']}}"/>
                        <label>Phone</label>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
      </section>
      <!-- Floating Label End -->
@endsection
