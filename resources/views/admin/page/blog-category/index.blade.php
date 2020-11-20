@extends('admin.master')
@section('title','Danh sách loại tin tức')
@section('main')
<div class="card">
    <div class="card-header">
        <a href="{{ route('adminBlogCateGetAdd') }}" class="btn btn-sm btn-primary">Thêm loại blog</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Mã loại</th>
                    <th>Tên Loại Blog</th>
                    <th>Danh mục cha</th>
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
                @foreach ($cates as $cate)
                <tr>
                    <th>{{ $cate->id }}</th>
                    <th>{{ $cate->title }}</th>
                    @if ($cate->parent_id == 0)
                    <td>Không thuộc danh mục nào</td>
                    @else
                    @foreach ($cates as $sub_item)
                    @if ($cate->parent_id == $sub_item->id)
                    <td>{{ $sub_item->title }}</td>
                    @break
                    @endif
                    @endforeach
                    @endif
                    <th>{{ $cate->status }}</th>
                    <th>{{ $cate->created_at }}</th>
                    <th>
                        <a href="{{ route('adminBlogCateGetEdit', $cate->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form class="d-inline" action={{ route('adminBlogCateDelete',$cate->id) }} method="POST">
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
        search: false,
        paging: false,
        searching: false,
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
