@extends('front::layouts.layout')

@section('css')
<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/343.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/300.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/314.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/342.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/b.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/b1.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/315.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/316b.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/317.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/317b.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/318.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/318b.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/319.css')}}"/>
@stop

@section('script')
<script src="{{ asset('front/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
@stop

@section('content')
@include('front::modules.342')    
@include('front::modules.343')   
@include('front::modules.314')    
@include('front::modules.315')    
@include('front::modules.316')    
@include('front::modules.317')    
@include('front::modules.318')    
@include('front::modules.319')    
@include('front::modules.300')
@endsection

