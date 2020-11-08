@extends('admin.master')
@section('title','Trang Chủ Admin')
@section('main')


<div class="card">
     <div class="card-header">
          <a href="{{route('adminNewGetAdd')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Danh Mục</a>
     </div>
     <div class="card-body">
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
               <thead>
                    <tr>
                         <th>Mã Danh Mục</th>
                         <th>Tên Danh Mục</th>
                         <th>Danh Mục Cha</th>
                         <th></th>
                    </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
                    <tr>
                         <th>Mã Danh Mục</th>
                         <th>Tên Danh Mục</th>
                         <th>Danh Mục Cha</th>
                         <th></th>
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
               { "width": "20%" }
          ]
     });
</script>
@stop