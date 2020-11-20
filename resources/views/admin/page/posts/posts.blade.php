@extends('admin.master')
@section('title','Quản Lý Tài Liệu')
@section('main')

<div class="card">
    <div class="card-header">
        <a href="{{asset('admin/posts/add')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Thêm Tài Liệu</a>
    </div>
    <div class="card-body">
<<<<<<< HEAD
         <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
              <thead>
                   <tr>
                        <th>ID Tài Liệu :</th>
                        <th>Têm Tài Liệu : </th>
                        <th>Thuộc Danh Mục : </th>
                        <th>Ảnh : </th>
                        <th>Dowload : </th>
                        <th>Status (Client) : </th>
                        <th>Del_Flag (Admin) : </th>
                        {{-- <th>Nổi Bật : </th> --}}
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
=======
        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID Tài Liệu</th>
                    <th>Têm Tài Liệu</th>
                    <th>Thuộc Danh Mục</th>
                    <th>Ảnh</th>
                    <th>Dowload</th>
                    <th>Status (Client)</th>
                    <th>Del_Flag (Admin)</th>
                    <th>Nổi Bật</th>
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
                @foreach ($post as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
>>>>>>> 63aeb4163a663bc13de99f538241c731185b0efb

                    @foreach ($postcatslist as $postcat)
                    @if ($postcat->id === $item->id_thepost_cat)
                    <td>{{$postcat->title}}</td>
                    @break
                    @endif
                    @endforeach

<<<<<<< HEAD
                        <td>{{$item->status}}</td>
                        <td>{{$item->del_flg}}</td>
                        {{-- <td>{{$item->hight_flg}}</td> --}}
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
                         <th>Dowload : </th>
                         <th>Status (Client) : </th>
                         <th>Del_Flag (Admin) : </th>
                         {{-- <th>Nổi Bật : </th> --}}
                         <th>Tùy Chọn : </th>
                   </tr>
              </tfoot>
         </table>
=======
                    <td>
                        <img width="100px" src="{{Storage::url('upload/img/posts/'.$item->avatar)}}" class="thumbnail">
                    </td>

                    @if($item->dowload == 0 )
                    <td>Không được Dowload</td>
                    @else
                    <td>Được Dowload</td>
                    @endif

                    <td>{{$item->status}}</td>
                    <td>{{$item->del_flg}}</td>
                    <td>{{$item->hight_flg}}</td>
                    <td>
                        <a href="{{asset('admin/posts/edit/'.$item->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/posts/delete/'.$item->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
>>>>>>> 63aeb4163a663bc13de99f538241c731185b0efb
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
