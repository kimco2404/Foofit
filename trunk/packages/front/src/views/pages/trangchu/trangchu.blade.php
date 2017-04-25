@extends('front::layouts.layout')

@section('css')

<link href="{{asset("css/styles_min.css")}}" rel="stylesheet" type="text/css"/>
<link href="{{asset("css/styles_min.css")}}" rel="stylesheet" type="text/css"/>
<link href="{{asset("css/styles_min.css")}}" rel="stylesheet" type="text/css"/>
<link href="{{asset("css/styles_min.css")}}" rel="stylesheet" type="text/css"/>
<link href="{{asset("css/styles_min.css")}}" rel="stylesheet" type="text/css"/>
<link href="{{asset("css/styles_min.css")}}" rel="stylesheet" type="text/css"/>
<link href="{{asset("css/styles_min.css")}}" rel="stylesheet" type="text/css"/>
<link href="{{asset("css/styles_min.css")}}" rel="stylesheet" type="text/css"/>
<link href="{{asset("css/styles_min.css")}}" rel="stylesheet" type="text/css"/>
<link href="{{asset("css/styles_min.css")}}" rel="stylesheet" type="text/css"/>
<link href="{{asset("css/styles_min.css")}}" rel="stylesheet" type="text/css"/>
@endsection

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection

@include(1)
@include(1)
@include(1)
@include(1)
@include(1)