@extends('admin.master')
@section('title','Quản Lý Tài Liệu Bài Viết')
@section('main')

<div class="card">
    <div class="card-header">
         <a href="{{asset('admin/posts/add')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Danh Mục</a>
    </div>
    <div class="card-body">
         <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
              <thead>
                   <tr>
                        <th>ID Tài Liệu :</th>
                        <th>Têm Danh Mục : </th>
                        <th>Ảnh : </th>
                        <th>Status (Client) : </th>
                        <th>Del_Flag (Admin) : </th>
                        <th>Tùy Chọn : </th>
                   </tr>
              </thead>
              <tbody>
                   {{-- @foreach ($postcats as $item)
                   <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>
                              <img width="200px" src="{{Storage::url('/upload/img/postcats/'.$item->avatar)}}" class="thumbnail">
                        </td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->del_flg}}</td>
                        <td>
                             <a href="{{asset('admin/postcats/edit/'.$item->id)}}" class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Sửa</a>
                             <a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/postcats/delete/'.$item->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                        </td>
                   </tr>
                   @endforeach --}}
              </tbody>
              <tfoot>
                   <tr>
                         <th>ID Danh Mục :</th>
                         <th>Têm Danh Mục : </th>
                         <th>Ảnh : </th>
                         <th>Status (Client) : </th>
                         <th>Del_Flag (Admin) : </th>
                         <th>Tùy Chọn : </th>
                   </tr>
              </tfoot>
         </table>
    </div>
</div>
@stop
<script>
    $("#dataTable").DataTable({
         "responsive": true,
         "autoWidth": true,
         "columns": [
              null,
              null,
              null,
              null,
              null,
              { "width": "20%" }
              ]
    });
</script>
