@extends('back-end.layout.app')
@php
    $moduleName= "User";
    $pageTitle = " Edit ".$moduleName ;
    $pageDes = "Here you can edit " . $moduleName;
@endphp
@section('title')
    {{$pageTitle}}
@endsection
@section('content')
    @component('back-end.layout.header')
        @slot('nav_title')
            {{ $pageTitle}}
        @endslot
    @endcomponent
@endsection
