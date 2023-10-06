@extends('admin-view.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="mb-3">
                <a href="admin/home" class="btn btn-success" style="float: right; margin-top:5%">GO!</a>
            </div>
        </div>
    </div>
</div>
@endsection
