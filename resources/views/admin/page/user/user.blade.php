@extends('admin.master')
@section('title','Người Dùng Admin')
@section('main')

<div class="card">
    <div class="card-header">
        <a href="{{asset('admin/user/add')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Người Dùng</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID User</th>
                    <th>Tên Người Dùng</th>
                    <th>Email Người Dùng</th>
                    <th>Ảnh</th>
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
                @foreach ($userlist as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <img width="100px" src="{{Storage::url('upload/img/user/'.$user->avatar)}}" class="thumbnail">
                    </td>
                    <td>
                        <a href="{{asset('admin/user/edit/'.$user->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/user/delete/'.$user->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
