@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome To Cafe Management') }}</div>

                <div class="card-body">
                <img src="{{ asset('storage') }}/cafe.jpg" width="822px" height="480px">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection