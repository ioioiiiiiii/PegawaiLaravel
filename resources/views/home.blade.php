@extends('layouts.app')
<<<<<<< HEAD
=======
@include('navbar')
>>>>>>> c6801037bfd22ed36ca6ab117830bb56836e2034
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome To Cafe Management') }}</div>

<<<<<<< HEAD
                <div class="card-body ">
                <img src="{{ URL('assets/1.jpg') }}" width="49%" height="40%">
                <img src="{{ URL('assets/2.jpg') }}" width="49%" height="40%">
                <img src="{{ URL('assets/3.jpg') }}" width="49%" height="40%">
                <img src="{{ URL('assets/4.jpg') }}" width="49%" height="40%">
=======
                <div class="card-body">
                <img src="{{ asset('storage') }}/cafe.jpg" width="822px" height="480px">
>>>>>>> c6801037bfd22ed36ca6ab117830bb56836e2034
                </div>
            </div>
        </div>
    </div>
</div>
@endsection