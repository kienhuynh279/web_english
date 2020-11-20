@extends('admin.master')
@section('title','Quản Lý Banner')
@section('main')
<div class="card">
    <div class="card-header">
        <a href="{{asset('admin/banner/add')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Banner</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID Banner</th>
                    <th>Têm Banner</th>
                    <th>Ảnh : </th>
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
                @foreach ($bannerlist as $banner)
                <tr>
                    <td>{{$banner->id}}</td>
                    <td>{{$banner->title}}</td>
                    <td>
                        <img width="200px" src="{{Storage::url('upload/img/banner/'.$banner->avatar)}}" class="thumbnail">
                    </td>
                    <td>{{$banner->status}}</td>
                    <td>{{$banner->del_flg}}</td>
                    <td>
                        <a href="{{asset('admin/banner/edit/'.$banner->id)}}" class="btn btn-warning"><i class="fas btn-sm fa-pencil-alt" aria-hidden="true"></i></a>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/banner/delete/'.$banner->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
