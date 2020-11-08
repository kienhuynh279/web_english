@extends('admin.master')
@section('title','Trang Chủ Admin')
@section('main')


<div class="card">
     <div class="card-header">
          <a href="{{route('adminNewGetAdd')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Danh Mục</a>
     </div>
     <div class="card-body">
          <table id="dataTable" class="display" style="width:100%">
               <thead>
                    <tr>
                         <th>Mã Danh Mục</th>
                         <th>Tên Danh Mục</th>
                         <th>Danh Mục Cha</th>
                         <th></th>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                    </tr>
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