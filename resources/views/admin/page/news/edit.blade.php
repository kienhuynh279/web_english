@extends('admin.master')

@section('title')
Trang sửa tin tức
@endsection

@section('main')

<form enctype="multipart/form-data" action="{{route("adminNewPutEdit",$blog->id)}}" method="post">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-success" type="submit" name="submit"><i
                    class="fas fa-save"></i>  Lưu thay đổi</button>
            <a href="{{ route('adminNew') }}" class="btn btn-sm btn-danger">Cancel</a>
        </div>
        <div class="card-body">
             {{ csrf_field() }}
            @include("admin.page.news.inc._form")
        </div>
    </div>
 </form>
@endsection
