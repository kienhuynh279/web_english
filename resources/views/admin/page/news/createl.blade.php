@extends('admin.master')

@section('title')
Trang tạo tin tức
@endsection

@section('main')
<form action="{{route("adminNewPostAdd")}}" method="post">
    @csrf
    @include("admin.page.news.inc._form")
</form>
@endsection
