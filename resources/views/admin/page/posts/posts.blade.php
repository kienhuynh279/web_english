@extends('admin.master')
@section('title','Quản Lý Tài Liệu Bài Viết')
@section('main')

<div class="card">
    <div class="card-header">
         <a href="{{asset('admin/posts/add')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Tài Liệu</a>
    </div>
    <div class="card-body">
         <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
              <thead>
                   <tr>
                        <th>ID Tài Liệu :</th>
                        <th>Têm Tài Liệu : </th>
                        <th>Thuộc Danh Mục : </th>
                        <th>Ảnh : </th>
                        <th>Status (Client) : </th>
                        <th>Del_Flag (Admin) : </th>
                        <th>Nổi Bật : </th>
                        <th>Tùy Chọn : </th>
                   </tr>
              </thead>
              <tbody>
                   @foreach ($post as $item)
                   <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        
                         @foreach ($postcatslist as $postcat)
                              @if ($postcat->id === $item->id_thepost_cat)
                              <td>{{$postcat->title}}</td>
                              @break
                              @endif
                         @endforeach
                       
                        <td>
                              <img width="100px" src="{{Storage::url('upload/img/posts/'.$item->avatar)}}" class="thumbnail">
                        </td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->del_flg}}</td>
                        <td>{{$item->hight_flg}}</td>
                        <td>
                             <a href="{{asset('admin/posts/edit/'.$item->id)}}" class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Sửa</a>
                             <a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/posts/delete/'.$item->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                        </td>
                   </tr>
                   @endforeach
              </tbody>
              <tfoot>
                   <tr>
                         <th>ID Tài Liệu :</th>
                         <th>Têm Tài Liệu : </th>
                         <th>Thuộc Danh Mục : </th>
                         <th>Ảnh : </th>
                         <th>Status (Client) : </th>
                         <th>Del_Flag (Admin) : </th>
                         <th>Nổi Bật : </th>
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
