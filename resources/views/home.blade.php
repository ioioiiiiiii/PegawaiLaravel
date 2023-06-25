@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome To Cafe Management') }}</div>

                <div class="card-body ">
                <img src="{{ URL('assets/1.jpg') }}" width="49%" height="40%">
                <img src="{{ URL('assets/2.jpg') }}" width="49%" height="40%">
                <img src="{{ URL('assets/3.jpg') }}" width="49%" height="40%">
                <img src="{{ URL('assets/4.jpg') }}" width="49%" height="40%">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection