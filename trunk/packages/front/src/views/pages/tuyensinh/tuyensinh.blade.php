@extends('front::layouts.layout')
@section('title')
<title>Home</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/342.css')}}"/> 
<link rel="stylesheet" href="{{asset('front/css/330.css')}}"/> 
<link rel="stylesheet" href="{{asset('front/css/343.css')}}"/> 
<link rel="stylesheet" href="{{asset('front/css/340.css')}}"/> 
<link rel="stylesheet" href="{{asset('front/css/300.css')}}"/> 
@stop

@section('script')
<script src="{{ asset('front/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/ekko-lightbox-min.js') }}"></script>
<script src="{{ asset('front/js/309.js') }}"></script>
@stop

@section('content')
@include('front::modules.342')    
@include('front::modules.343')
@include('front::modules.330')
@include('front::modules.340')
@include('front::modules.300')
@endsection

