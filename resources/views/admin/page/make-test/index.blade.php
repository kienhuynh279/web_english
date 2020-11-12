@extends('admin.master')
@section('title','Danh sách bài kiểm tra')
@section('main')
<div class="card">
    <div class="card-header">
        <a href="{{ route('adminMakeTestGetAdd') }}" class="btn btn-sm btn-primary">Thêm tin tức</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Tên Bài Kiểm Tra</th>
                    <th>Mô tả ngắn</th>
                    <th>Trạng thái</th>
                    <th>Ngày đăng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @forelse ($forms ?? [] as $form)
                <tr>
                    <th>{{ $form->title }}</th>
                    <th>{{ $form->summary }}</th>
                    <th>{{ $form->status }}</th>
                    <th>{{ $form->created_at }}</th>
                    <th>
                        <button class="btn btn-sm btn-secondary">
                            <a href="#"><i class="fas fa-edit"></i></a> 
                        </button>
                        <button disabled class="btn btn-sm btn-secondary">
                            <i class="fas fa-trash"></i>
                        </button>
                    </th>
                </tr>
            @empty 
                <tr>
                    <td colspan="12">
                        <div class="alert alert-danger mb-0" role="alert">
                            Không tìm thấy dữ liệu
                        </div>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@stop