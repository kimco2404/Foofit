@extends('front::layouts.layout')
@section('title')
<title>Home</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/402.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/335.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/313.css')}}"/> 
<link rel="stylesheet" href="{{asset('front/css/307.css')}}"/> 
<link rel="stylesheet" href="{{asset('front/css/304.css')}}"/> 
<link rel="stylesheet" href="{{asset('front/css/swiper.min.css') }}"/>
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
@include('front::modules.302')
@include('front::modules.307')
@include('front::modules.300')
@endsection

