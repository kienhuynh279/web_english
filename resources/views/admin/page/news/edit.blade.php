@extends('admin.master')

@section('title')
Trang sửa tin tức
@endsection

@section('main')
<form action="{{route("adminNewPutEdit")}}" method="post">
    @csrf
    @include("admin.page.news.inc._form")
</form>
@endsection
