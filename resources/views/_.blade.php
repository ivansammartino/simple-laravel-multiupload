{{--template for @yield--}}
@extends('_layouts.default')

@section('title', 'Dummy title')

@section('css')
@endsection

@section('header')
    <i class="fa fa-folder-open-o"></i> Dummy header
@endsection

@section('breadcrumbs')
    <li><span>Dummy breadcrumb</span></li>
@endsection

@section('content')
    <p>Content here</p>
@endsection

@section('js')
@endsection