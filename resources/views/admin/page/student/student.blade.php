@extends('admin.master')
@section('title','Quản Lý Học Viên')
@section('main')

<div class="card">
    <div class="card-header">
        <a href="{{asset('admin/student/add')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Học Viên Tiêu Biểu</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID Học Viên :</th>
                    <th>Têm Học Viên : </th>
                    <th>Ảnh :</th>
                    {{-- <th>Del_Flag (Admin)</th> --}}
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
                @foreach ($student as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <img width="100px" src="{{Storage::url('/upload/img/student/'.$item->avatar)}}" class="thumbnail">
                    </td>
                    <td>
                        <a href="{{asset('admin/student/edit/'.$item->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/student/delete/'.$item->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
        paging: false,
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
