@extends('admin.master')
@section('title','Danh sách tin tức')
@section('main')
<div class="card">
    <div class="card-header">
        <a href="{{ route('adminNewGetAdd') }}" class="btn btn-sm btn-primary">Thêm tin tức</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Tên tin tức</th>
                    <th>Ảnh</th>
                    <th>Nổi bật</th>
                    <th>Trạng thái</th>
                    <th>Ngày đăng</th>
                    <th>
                        <button disabled class="btn btn-sm btn-secondary">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button disabled class="btn btn-sm btn-secondary">
                            <i class="fas fa-trash"></i>
                        </button>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs ?? [] as $blog)
                <tr>
                    <th>{{ $blog->title }}</th>
                    <td><img width="100px" src="{{Storage::url('upload/img/blog/'.$blog->avatar)}}" class="thumbnail"></td>
                    <td class="text-{{ $blog->hight_flg == 1 ? "success" : "danger" }}">{{ $blog->hight_flg == 1 ? "Hiện" : "Ẩn" }}</td>
                    <td class="text-{{ $blog->status == 1 ? "success" : "danger" }}">{{ $blog->status == 1 ? "Hiện" : "Ẩn" }}</td>
                    <th>{{ $blog->created_at }}</th>
                    <th>
                        <a href="{{ route('adminNewGetEdit', $blog->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form class="d-inline" action={{ route('adminNewDelete',$blog->id) }} method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    let table = $("#dataTable").DataTable({
        scrollX: true,
        // search: false,
        // paging: false,
        // searching: false,
        aaSorting: [],
        bInfo : false,
        // columnDefs: [
        //     { className: "text-nowrap text-center", "targets": [ -1 ] }
        // ],
        fixedColumns: {
            leftColumns: 0,
            rightColumns: 1
        }
    });

    new ResizeSensor($("#dataTable"), () => table.draw());
</script>
@stop
