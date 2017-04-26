@extends('front::layouts.layout')

@section('css')
<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/402.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/342.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/343.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/lienhe.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/337.css')}}"/>
<link rel="stylesheet" href="{{asset('front/css/331.css')}}"/>
@stop

@section('script')
<script src="{{ asset('front/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
@stop

@section('content')
@include('front::modules.342')    
@include('front::modules.343')   
@include('front::modules.331')    
@include('front::modules.300')
@endsection

