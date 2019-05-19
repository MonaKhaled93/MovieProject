@extends('back-end.layout.app')
@section('title')
    Home Page
    @endsection
@section('content')
    @component('back-end.layout.header' , ['nav_title' => "Home Page"])
        @endcomponent

@endsection
