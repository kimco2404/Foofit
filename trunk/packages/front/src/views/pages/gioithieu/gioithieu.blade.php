@extends('front::layouts.layout')

@section('css')
<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/gioithieu.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/343.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/342.css')}}"/>  
<link rel="stylesheet" href="{{asset('front/css/333.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/334.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/336.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/335.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/300.css')}}"/>  
@stop

@section('script')
<script src="{{ asset('front/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
@stop

@section('content')
@include('front::modules.342')    
@include('front::modules.343')
@include('front::modules.333')    
@include('front::modules.300')
@endsection