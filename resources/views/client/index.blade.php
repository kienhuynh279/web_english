@extends('index-master')
@section('title', $title ?? 'Web English')

@section('head-import')
@include('client.components.head-import')
@endsection

@section('js-import')
@include('client.components.js-import')
@endsection

@section('main')
@include('client.main')
@endsection