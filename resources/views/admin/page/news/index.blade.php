@extends('admin.master')
@section('title','Danh sách tin tuc')
@section('main')
<div class="card">
    <div class="card-header">
        <a href="{{ route('adminNewGetAdd') }}" class="btn btn-sm btn-primary">Thêm tin tức</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Tên Blog</th>
                    <th>Mô tả ngắn</th>
                    <th>Trạng thái</th>
                    <th>Ngày đăng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @forelse ($blogs ?? [] as $blog)
                <tr>
                    <th>{{ $blog->title }}</th>
                    <th>{{ $blog->summary }}</th>
                    <th>{{ $blog->status }}</th>
                    <th>{{ $blog->created_at }}</th>
                    <th>
                        <button class="btn btn-sm btn-secondary">
                            <a href="{{ route("adminNewGetEdit",$blog->id) }}"><i class="fas fa-edit"></i></a> 
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

<script>
    let table = $("#dataTable").DataTable({
        scrollX: true,
        search: false,
        paging: false,
        searching: false,
        bInfo : false,
        fixedColumns: {
            rightColumns: 1,
            leftColumns: 0,
        }
    });

    new ResizeSensor($("#dataTable"), () => table.draw());
</script>
@stop
