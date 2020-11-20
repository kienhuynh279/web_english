@extends('admin.master')
@section('title','Quản Lý Danh Mục')
@section('main')

<div class="card">
    <div class="card-header">
        <a href="{{asset('admin/postcats/add')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Danh Mục</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID Danh Mục</th>
                    <th>Têm Danh Mục </th>
                    <th>Vị Trí (Danh Mục Con)</th>
                    <th>Ảnh</th>
                    <th>Status (Client)</th>
                    <th>Del_Flag (Admin)</th>
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
                @foreach ($postcats as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>

                    @if($item->vi_tri == 0 )
                    <td>Không thuộc danh mục nào</td>
                    @else
                    @foreach ($postcats as $sub_item)
                    @if ($item->vi_tri == $sub_item->id)
                    <td>{{ $sub_item->title }}</td>
                    @break
                    @endif
                    @endforeach
                    @endif
                    <td>
                        <img width="100px" src="{{Storage::url('/upload/img/postcats/'.$item->avatar)}}" class="thumbnail">
                    </td>

                    <td>{{$item->status}}</td>
                    <td>{{$item->del_flg}}</td>
                    <td>
                        <a href="{{asset('admin/postcats/edit/'.$item->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/postcats/delete/'.$item->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
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
