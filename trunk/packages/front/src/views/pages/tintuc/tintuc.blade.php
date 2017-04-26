@extends('front::layouts.layout')

@section('css')
<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{asset('front/js/bootstrap.min.js')}}"/>
<link rel="stylesheet" href="{{asset('front/css/311.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/312.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/343.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/342.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/300.css')}}">   
<link rel="stylesheet" href="{{asset('front/css/lienhe.css')}}">   
@stop

@section('script')
<script src="{{ asset('front/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/ekko-lightbox-min.js') }}"></script>
<script src="{{ asset('front/js/309.js') }}"></script>
@stop

@section('content')
@include('front::modules.342')    
@include('front::modules.343')
@include('front::modules.311')    
@include('front::modules.312')    
@include('front::modules.300')
@endsection

