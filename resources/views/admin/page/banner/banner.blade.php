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
                        <th>ID Banner :</th>
                        <th>Têm Banner : </th>
                        <th>Ảnh : </th>
                        <th>Status (Client) : </th>
                        <th>Del_Flag (Admin) : </th>
                        <th>Tùy Chọn : </th>
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
                             <a href="{{asset('admin/banner/edit/'.$banner->id)}}" class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Sửa</a>
                             <a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/banner/delete/'.$banner->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a> --}}
                        </td>
                   </tr>
                   @endforeach
              </tbody>
              <tfoot>
                   <tr>
                         <th>ID Banner :</th>
                         <th>Têm Banner : </th>
                         <th>Ảnh : </th>
                         <th>Status (Client) : </th>
                         <th>Del_Flag (Admin) : </th>
                         <th>Tùy Chọn : </th>
                   </tr>
              </tfoot>
         </table>
    </div>
</div>
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
@stop

